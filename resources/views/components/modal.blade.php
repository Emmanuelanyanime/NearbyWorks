@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusOnOpen: @js($attributes->has('focusable')),
        previouslyFocused: null,
        focusables() {
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])';
            return [...$el.querySelectorAll(selector)].filter(el => ! el.hasAttribute('disabled'));
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() {
            let index = this.focusables().indexOf(document.activeElement);
            return this.focusables()[index + 1] || this.firstFocusable();
        },
        prevFocusable() {
            let index = this.focusables().indexOf(document.activeElement);
            return this.focusables()[index - 1] || this.lastFocusable();
        },
        activate() {
            this.previouslyFocused = document.activeElement;
            document.body.classList.add('overflow-y-hidden');
            if (this.focusOnOpen) {
                this.$nextTick(() => this.firstFocusable()?.focus());
            }
        },
        deactivate() {
            document.body.classList.remove('overflow-y-hidden');
            const trigger = this.previouslyFocused;
            this.previouslyFocused = null;
            this.$nextTick(() => trigger?.focus());
        },
    }"
    x-init="
        if (show) activate();
        $watch('show', value => value ? activate() : deactivate());
    "
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="if (show) show = false"
    x-on:keydown.tab="if (show) { $event.preventDefault(); ($event.shiftKey ? prevFocusable() : nextFocusable())?.focus(); }"
    x-show="show"
    x-bind:aria-hidden="(! show).toString()"
    role="dialog"
    aria-modal="true"
    aria-labelledby="{{ $name }}-title"
    aria-describedby="{{ $name }}-description"
    class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        class="fixed inset-0 transform transition-all"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div
        x-show="show"
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        {{ $slot }}
    </div>
</div>