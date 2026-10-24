// The job application form: checks the answers before they leave the browser, handles file choosing and
// dragging, and (while the backend has no `jobs.apply.store` route) shows the confirmation without sending.
// The markup is written by views/Apply.blade.php and components/application-field.blade.php.

const readableSize = (bytes) => (bytes >= 1048576 ? `${(bytes / 1048576).toFixed(1)} MB` : `${Math.max(1, Math.round(bytes / 1024))} KB`);

// Laravel reports errors as "answers.q-why"; the form names them "answers[q-why]".
const errorKey = (name) => name.replace(/\[\]$/, '').replace(/\[([^\]]+)\]/g, '.$1');

// Alpine reveals things (x-show) on the next animation frame, and a hidden element cannot take focus yet,
// so wait until after that frame is drawn. A background tab draws no frames, so it just uses a short timer.
const afterPaint = (callback) => {
    if (document.visibilityState !== 'visible') {
        setTimeout(callback, 50);
        return;
    }
    requestAnimationFrame(() => requestAnimationFrame(callback));
};

export function registerApplicationForm(Alpine) {
    Alpine.data('applicationForm', ({ preview = true, errors = {} } = {}) => ({
        preview,
        errors: {},
        summary: [],
        files: {},
        over: null,
        submitting: false,
        done: false,
        init() {
            // One listener on the form, instead of an x-on:input / x-on:change on every field.
            this.$refs.form.addEventListener('input', (event) => this.touched(event));
            this.$refs.form.addEventListener('change', (event) => this.touched(event));

            // Errors sent back by the server (keyed "answers.q-why") become messages on the matching fields.
            this.$nextTick(() => {
                this.$refs.form?.querySelectorAll('[data-field]').forEach((field) => {
                    const message = errors[errorKey(field.dataset.field)];
                    if (message) this.errors[field.dataset.field] = message;
                });
                this.summary = this.listErrors();
            });
        },
        // Someone typed in, chose or ticked something: forget its error, and keep the character counter honest.
        touched(event) {
            const field = event.target.closest?.('[data-field]');
            if (!field) return;

            if (event.target.type === 'file') {
                if (event.type === 'change') this.pick(event);
                return;
            }

            this.clear(field.dataset.field);
            const counter = field.querySelector('[data-count]');
            if (counter && typeof event.target.value === 'string') counter.textContent = event.target.value.length;
        },
        error(name) { return this.errors[name] ?? ''; },
        clear(name) {
            if (!this.errors[name]) return;
            delete this.errors[name];
            this.summary = this.summary.filter((item) => item.name !== name);
        },
        listErrors() {
            return [...this.$refs.form.querySelectorAll('[data-field]')]
                .filter((field) => this.errors[field.dataset.field])
                .map((field) => ({ name: field.dataset.field, label: field.dataset.label, message: this.errors[field.dataset.field], target: field.querySelector('input, select, textarea')?.id }));
        },
        problemWith(field) {
            const name = field.dataset.field;
            const type = field.dataset.type;
            const required = field.hasAttribute('data-required');

            if (type === 'file') return required && !this.files[name] ? 'Please choose a file.' : '';
            if (type === 'boolean' || type === 'multiple_choice') {
                return required && !field.querySelector('input:checked') ? (field.dataset.requiredMessage || 'Please choose an answer.') : '';
            }

            const control = field.querySelector('input, select, textarea');
            const value = control.value.trim();
            if (required && !value) return type === 'dropdown' ? 'Please choose an option.' : 'This is required.';
            if (value && type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) return 'Enter a valid email address, like name@example.com.';
            if (value && type === 'numeric' && Number.isNaN(Number(value))) return 'Enter a number.';
            return '';
        },
        validate() {
            this.errors = {};
            this.$refs.form.querySelectorAll('[data-field]').forEach((field) => {
                const problem = this.problemWith(field);
                if (problem) this.errors[field.dataset.field] = problem;
            });
            this.summary = this.listErrors();
            return this.summary.length === 0;
        },
        submit(event) {
            if (!this.validate()) {
                event.preventDefault();
                afterPaint(() => {
                    this.$refs.summary?.focus();
                    this.$refs.summary?.scrollIntoView({ block: 'center', behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth' });
                });
                return;
            }
            if (this.preview) {
                event.preventDefault();
                this.done = true;
                afterPaint(() => {
                    this.$refs.success?.focus();
                    window.scrollTo({ top: 0, behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth' });
                });
                return;
            }
            this.submitting = true; // a real submit: the server takes it from here
        },
        goTo(item) {
            const target = item.target ? document.getElementById(item.target) : null;
            target?.focus();
            target?.scrollIntoView({ block: 'center', behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth' });
        },
        // Files: checked as soon as they are chosen, so the person finds out straight away.
        pick(event) {
            const input = event.target;
            const field = input.closest('[data-field]');
            const name = field.dataset.field;
            const file = input.files[0];

            if (!file) { this.remove(name, input); return; }

            const allowed = (field.dataset.accept || '').split(',').filter(Boolean);
            const limit = Number(field.dataset.max) || 0;
            const extension = file.name.split('.').pop().toLowerCase();

            if (allowed.length && !allowed.includes(extension)) {
                this.remove(name, input);
                this.errors[name] = `That file type isn't supported. Please choose a ${allowed.map((item) => item.toUpperCase()).join(', ')} file.`;
            } else if (limit && file.size > limit) {
                this.remove(name, input);
                this.errors[name] = `That file is ${readableSize(file.size)}. Please choose one under ${readableSize(limit)}.`;
            } else {
                this.clear(name);
                this.files[name] = { name: file.name, size: readableSize(file.size) };
            }
            this.summary = this.listErrors();
        },
        drop(event, name) {
            this.over = null;
            const input = this.$refs.form.querySelector(`[data-field="${CSS.escape(name)}"] input[type="file"]`);
            if (!input || !event.dataTransfer.files.length) return;
            input.files = event.dataTransfer.files;
            input.dispatchEvent(new Event('change', { bubbles: true }));
        },
        remove(name, input = null) {
            delete this.files[name];
            const control = input ?? this.$refs.form.querySelector(`[data-field="${CSS.escape(name)}"] input[type="file"]`);
            if (control) control.value = '';
        },
    }));
}
