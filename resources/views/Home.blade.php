<x-layout title="Good people. Great possibilities.">
    <section class="nw-hero" aria-labelledby="home-heading">
        <div class="nw-container nw-hero__grid">
            <div class="nw-hero__copy">
                <span class="nw-eyebrow">A better way to come together</span>
                <h1 id="home-heading">Good people.<br><em>Great possibilities.</em></h1>
                <p class="nw-copy">Sourcing and job postings, in one place. NearbyWorks brings employers and job seekers together to make the next connection count.</p>
                <div class="nw-button-row">
                    <a href="{{ route('register') }}" class="nw-button nw-button--primary">Find your next hire <x-icon name="arrow-up-right" /></a>
                    <a href="{{ route('register') }}" class="nw-button nw-button--outline">Find your next role <x-icon name="arrow-up-right" /></a>
                </div>
                <div class="nw-hero__footnote"><x-icon name="users" /> For the people hiring. And the people ready for what’s next.</div>
            </div>
            <div class="nw-hero__visual">
                <img class="nw-hero__image" src="{{ asset('asset/nearbyworks/professional.png') }}" width="495" height="621" fetchpriority="high" alt="Two colleagues sharing a conversation in a welcoming workplace">
                <x-icon name="spark" class="nw-hero__spark" />
                <div class="nw-connection-note">
                    <span class="nw-connection-note__icon"><x-icon name="check" /></span>
                    <div><strong>It starts with a connection.</strong><small>A person. A possibility. A new beginning.</small></div>
                </div>
            </div>
        </div>
    </section>

    <div class="nw-intro-strip">
        <div class="nw-container nw-intro-strip__inner">
            <span><x-icon name="briefcase" /> Opportunities worth exploring</span>
            <span><x-icon name="users" /> People worth getting to know</span>
            <span><x-icon name="globe" /> One place to connect</span>
        </div>
    </div>

    <section id="for-you" class="nw-section" aria-labelledby="audience-heading"
        x-data="{ audience: window.location.hash === '#for-job-seekers' ? 'job-seekers' : 'employers', select(value, focus = false) { this.audience = value; if (focus) this.$nextTick(() => this.$refs[value === 'employers' ? 'employersTab' : 'jobseekersTab'].focus()); } }"
        @hashchange.window="if (window.location.hash === '#for-job-seekers') audience = 'job-seekers'; if (window.location.hash === '#for-employers') audience = 'employers'">
        <div class="nw-container">
            <div class="nw-section-heading">
                <div><span class="nw-eyebrow">Two sides. One better connection.</span><h2 id="audience-heading" class="nw-heading">Your next chapter<br>starts with <em>who.</em></h2></div>
                <p>Whether you’re growing a team or ready for a new direction, there’s a place for you here.</p>
            </div>
            <div class="nw-audience-switch" role="tablist" aria-label="Explore NearbyWorks">
                <button id="for-employers" x-ref="employersTab" role="tab" aria-controls="employers-panel" :aria-selected="(audience === 'employers').toString()" :tabindex="audience === 'employers' ? 0 : -1" @click="select('employers')" @keydown.right.prevent="select('job-seekers', true)" @keydown.left.prevent="select('job-seekers', true)" @keydown.home.prevent="select('employers', true)" @keydown.end.prevent="select('job-seekers', true)">For employers</button>
                <button id="for-job-seekers" x-ref="jobseekersTab" role="tab" aria-controls="jobseekers-panel" :aria-selected="(audience === 'job-seekers').toString()" :tabindex="audience === 'job-seekers' ? 0 : -1" @click="select('job-seekers')" @keydown.right.prevent="select('employers', true)" @keydown.left.prevent="select('employers', true)" @keydown.home.prevent="select('employers', true)" @keydown.end.prevent="select('job-seekers', true)">For job seekers</button>
            </div>
            <div id="employers-panel" class="nw-audience-grid" role="tabpanel" aria-labelledby="for-employers" tabindex="0" x-show="audience === 'employers'">
                <div class="nw-audience-content">
                    <h3>Great teams begin<br>with the right people.</h3>
                    <p>Bring your hiring story to the people who should hear it. Make room for talent, potential, and a fresh perspective.</p>
                    <ul class="nw-check-list"><li><x-icon name="check" /> Put your opportunities in focus</li><li><x-icon name="check" /> Make meaningful talent connections</li><li><x-icon name="check" /> Build what comes next, together</li></ul>
                    <a href="{{ route('register') }}" class="nw-link">Start your hiring journey <x-icon name="arrow-right" /></a>
                </div>
                <div class="nw-audience-art" aria-label="The foundations of better hiring">
                    <span class="nw-art-label">Make space for possibility</span>
                    <div class="nw-opportunity"><x-icon name="briefcase" /><div><strong>Your opportunity</strong><span>A role with purpose. A team with ambition.</span></div></div>
                    <div class="nw-opportunity"><x-icon name="users" /><div><strong>The next great addition</strong><span>Skills, experience, and a new perspective.</span></div></div>
                    <p class="nw-art-caption">People and opportunities. Better together.</p>
                </div>
            </div>
            <div id="jobseekers-panel" class="nw-audience-grid" role="tabpanel" aria-labelledby="for-job-seekers" tabindex="0" x-show="audience === 'job-seekers'" x-cloak>
                <div class="nw-audience-content">
                    <h3>Your potential deserves<br>a new possibility.</h3>
                    <p>You’re more than a list of past roles. Take the first step toward the people and opportunities that could shape your future.</p>
                    <ul class="nw-check-list"><li><x-icon name="check" /> Start with your own NearbyWorks account</li><li><x-icon name="check" /> Keep your profile details up to date</li><li><x-icon name="check" /> Be ready for your next chapter</li></ul>
                    <a href="{{ route('register') }}" class="nw-link">Take your next step <x-icon name="arrow-right" /></a>
                </div>
                <div class="nw-audience-art nw-audience-art--peach" aria-label="Your next chapter">
                    <span class="nw-art-label">Bring your whole story</span>
                    <div class="nw-opportunity"><x-icon name="spark" /><div><strong>What makes you, you</strong><span>Your experience. Your ambition. Your perspective.</span></div></div>
                    <div class="nw-opportunity"><x-icon name="globe" /><div><strong>A world of possibilities</strong><span>A fresh start begins with a connection.</span></div></div>
                    <p class="nw-art-caption">Make your next move a meaningful one.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="nw-section nw-section--soft" aria-labelledby="how-heading">
        <div class="nw-container">
            <div class="nw-section-heading"><div><span class="nw-eyebrow">A thoughtful place to start</span><h2 id="how-heading" class="nw-heading">Less distance.<br><em>More possibility.</em></h2></div><p>A simple starting point for people with something to offer, and teams with something to build.</p></div>
            <div class="nw-feature-grid">
                <article class="nw-feature"><span class="nw-feature__number">01</span><h3>Start with you.</h3><p>Create your NearbyWorks account. One place to begin, whether you’re hiring or looking for your next role.</p></article>
                <article class="nw-feature"><span class="nw-feature__number">02</span><h3>Make it personal.</h3><p>Keep your name and contact details current, so your account reflects the person behind the next connection.</p></article>
                <article class="nw-feature"><span class="nw-feature__number">03</span><h3>Look ahead.</h3><p>Get to know a platform built around sourcing, job postings, and bringing the two sides of hiring together.</p></article>
            </div>
        </div>
    </section>

    <section class="nw-section" aria-labelledby="people-heading">
        <div class="nw-container nw-editorial">
            <img class="nw-editorial__image" src="{{ asset('asset/nearbyworks/conversation.png') }}" width="585" height="444" loading="lazy" alt="A professional smiling during a video conversation">
            <div><span class="nw-eyebrow">Built around people</span><h2 id="people-heading" class="nw-heading">The best next step<br>is a <em>human one.</em></h2><p class="nw-copy">Hiring is about more than filling a role. It’s a new colleague, a fresh perspective, a chance to do meaningful work. That’s the kind of connection NearbyWorks is here for.</p><a class="nw-link" href="{{ url('/About') }}">Get to know NearbyWorks <x-icon name="arrow-right" /></a></div>
        </div>
    </section>

    <aside class="nw-resources" aria-labelledby="resources-heading">
        <div class="nw-container">
            <div class="nw-resources__heading"><h2 id="resources-heading" class="nw-eyebrow">Keep exploring</h2><p>Independent career resources, beyond NearbyWorks.</p></div>
            <div class="nw-resource-grid">
                <a class="nw-resource" href="https://www.linkedin.com/learning/" rel="external"><img src="{{ asset('asset/nearbyworks/linkedin.svg') }}" width="27" height="27" loading="lazy" alt=""><strong>LinkedIn Learning</strong><x-icon name="arrow-up-right" /></a>
                <a class="nw-resource" href="https://www.indeed.com/career-advice" rel="external"><img src="{{ asset('asset/nearbyworks/indeed.svg') }}" width="27" height="27" loading="lazy" alt=""><strong>Indeed Career Guide</strong><x-icon name="arrow-up-right" /></a>
                <a class="nw-resource" href="https://www.glassdoor.com/blog/" rel="external"><img src="{{ asset('asset/nearbyworks/glassdoor.svg') }}" width="27" height="27" loading="lazy" alt=""><strong>Glassdoor career insights</strong><x-icon name="arrow-up-right" /></a>
            </div>
        </div>
    </aside>

    <section class="nw-cta" aria-labelledby="cta-heading"><div class="nw-container nw-cta__inner"><div><span class="nw-eyebrow">Let’s see what’s possible</span><h2 id="cta-heading" class="nw-heading">Your next great connection<br>could start <em>right here.</em></h2></div><a href="{{ route('register') }}" class="nw-button nw-button--light">Get started with NearbyWorks <x-icon name="arrow-up-right" /></a></div></section>
</x-layout>
