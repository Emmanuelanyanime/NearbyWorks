<x-layout title="Contact and support" description="Find your next step with NearbyWorks, whether you are hiring, exploring opportunities, or looking for help with your account.">
    <section class="nw-interior-hero nw-container">
        <p class="nw-eyebrow">We're here to help</p>
        <h1>A little help.<br> A better connection.</h1>
        <p class="nw-copy">Whether you are building a team or thinking about your next role, we're happy to hear from you. Email <a href="mailto:Nearbywork@gmail.com">Nearbywork@gmail.com</a> or find your next step below.</p>
    </section>

    <section class="nw-container nw-contact-grid" aria-label="Find your next step">
        <article class="nw-contact-card">
            <x-icon name="briefcase" />
            <h2>I'm hiring.</h2>
            <p>Bring your next hiring conversation to NearbyWorks. Create an account to get started.</p>
            <a class="nw-link" href="{{ route('register') }}">Get started as an employer <x-icon name="arrow-up-right" /></a>
        </article>
        <article class="nw-contact-card">
            <x-icon name="users" />
            <h2>I'm looking ahead.</h2>
            <p>Your experience has a next chapter. Create your NearbyWorks account and take the first step.</p>
            <a class="nw-link" href="{{ route('register') }}">Get started as a job seeker <x-icon name="arrow-up-right" /></a>
        </article>
        <article class="nw-contact-card">
            <x-icon name="lock" />
            <h2>I need account help.</h2>
            <p>Return to your account, update your details, or reset a forgotten password.</p>
            @auth
                <a class="nw-link" href="{{ route('profile.edit') }}">Manage your account <x-icon name="arrow-up-right" /></a>
            @else
                <a class="nw-link" href="{{ route('login') }}">Log in to your account <x-icon name="arrow-up-right" /></a>
            @endauth
        </article>
        <article class="nw-contact-card">
            <x-icon name="mail" />
            <h2>General enquiries.</h2>
            <p>Have a question about NearbyWorks or something you would like to share? Get in touch by email.</p>
            <a class="nw-link" href="mailto:Nearbywork@gmail.com">Nearbywork@gmail.com <x-icon name="arrow-up-right" /></a>
        </article>
    </section>

    <section class="nw-section nw-section--soft" aria-labelledby="faq-heading">
        <div class="nw-container nw-faq">
            <div>
                <p class="nw-eyebrow">A few useful answers</p>
                <h2 class="nw-heading" id="faq-heading">Let's find<br> your next step.</h2>
            </div>
            <div>
                <details>
                    <summary>How do I create an account?</summary>
                    <p>Visit the <a href="{{ route('register') }}">registration page</a>, enter your name and email address, and choose a password. If you already have an account, you can <a href="{{ route('login') }}">log in here</a>.</p>
                </details>
                <details>
                    <summary>I forgot my password. What should I do?</summary>
                    <p>Open the <a href="{{ route('password.request') }}">password reset page</a> and enter the email address associated with your account to request a reset link.</p>
                </details>
                <details>
                    <summary>Where can I update my account details?</summary>
                    <p>
                        @auth
                            Open your <a href="{{ route('profile.edit') }}">account settings</a> to update your profile information or password.
                        @else
                            <a href="{{ route('login') }}">Log in</a>, then open your account settings to update your profile information or password.
                        @endauth
                    </p>
                </details>
                <details>
                    <summary>Who is NearbyWorks for?</summary>
                    <p>NearbyWorks is built for employers sourcing talent and posting jobs, and for job seekers looking for their next opportunity. Learn more <a href="{{ url('/About') }}">about our approach</a>.</p>
                </details>
            </div>
        </div>
    </section>
</x-layout>
