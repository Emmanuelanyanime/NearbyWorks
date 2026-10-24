<x-app-layout>
    <x-slot name="title">{{ __('Your overview') }}</x-slot>

    @php
        $accountUser = auth()->user();
        $accountName = trim(($accountUser->firstName ?? '') . ' ' . ($accountUser->lastName ?? ''))
            ?: ($accountUser->name ?: $accountUser->email);
        $needsEmailVerification = $accountUser instanceof \Illuminate\Contracts\Auth\MustVerifyEmail
            && ! $accountUser->hasVerifiedEmail();
    @endphp

    <x-slot name="header">
        <span class="nw-eyebrow">{{ __('Your NearbyWorks') }}</span>
        <h1>{{ __('A good place to begin.') }}</h1>
        <p>{{ __('Your account, your details, your next chapter.') }}</p>
    </x-slot>

    <div class="nw-dashboard-grid">
        <section class="nw-panel nw-dashboard-welcome" aria-labelledby="welcome-heading">
            <span class="nw-account-kicker">{{ __('Welcome back') }}</span>
            <h2 id="welcome-heading">{{ __('Hello, :name.', ['name' => $accountName]) }}</h2>
            <p>{{ __('Great connections begin with a little introduction. Keep your account details up to date as you get to know NearbyWorks.') }}</p>
            <a class="nw-button nw-button--primary" href="{{ route('profile.edit') }}">
                {{ __('Manage your profile') }} <span aria-hidden="true">&rarr;</span>
            </a>
        </section>

        <section class="nw-panel nw-account-summary" aria-labelledby="account-summary-heading">
            <div class="nw-account-avatar" aria-hidden="true">{{ mb_strtoupper(mb_substr($accountName, 0, 1)) }}</div>
            <span class="nw-eyebrow">{{ __('Your account') }}</span>
            <h2 id="account-summary-heading">{{ $accountName }}</h2>
            <p>{{ $accountUser->email }}</p>
            @if ($needsEmailVerification)
                <a class="nw-link" href="{{ route('profile.edit') }}#profile-information">{{ __('Verify your email address') }}</a>
            @else
                <a class="nw-link" href="{{ route('profile.edit') }}#profile-information">{{ __('Review account details') }}</a>
            @endif
        </section>
    </div>

    <section class="nw-account-next" aria-labelledby="next-steps-heading">
        <div class="nw-account-section-heading">
            <span class="nw-eyebrow">{{ __('Make yourself at home') }}</span>
            <h2 id="next-steps-heading">{{ __('A few useful places to start.') }}</h2>
        </div>
        <div class="nw-account-cards">
            <article class="nw-account-card">
                <span class="nw-card-number" aria-hidden="true">01</span>
                <h3>{{ __('Make it yours') }}</h3>
                <p>{{ __('Review your name and email address in your profile settings.') }}</p>
                <a class="nw-link" href="{{ route('profile.edit') }}#profile-information">{{ __('Edit your profile') }} <span aria-hidden="true">&rarr;</span></a>
            </article>
            <article class="nw-account-card">
                <span class="nw-card-number" aria-hidden="true">02</span>
                <h3>{{ __('Keep it secure') }}</h3>
                <p>{{ __('Choose a strong password and manage your account security.') }}</p>
                <a class="nw-link" href="{{ route('profile.edit') }}#password">{{ __('Password settings') }} <span aria-hidden="true">&rarr;</span></a>
            </article>
            <article class="nw-account-card">
                <span class="nw-card-number" aria-hidden="true">03</span>
                <h3>{{ __('Get to know us') }}</h3>
                <p>{{ __('Discover the idea behind NearbyWorks and a more connected world of hiring.') }}</p>
                <a class="nw-link" href="{{ url('/About') }}">{{ __('About NearbyWorks') }} <span aria-hidden="true">&rarr;</span></a>
            </article>
        </div>
    </section>
</x-app-layout>