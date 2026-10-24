<x-app-layout>
    <x-slot name="title">{{ __('Profile & settings') }}</x-slot>

    <x-slot name="header">
        <span class="nw-eyebrow">{{ __('Your account, your way') }}</span>
        <h1>{{ __('Profile & settings') }}</h1>
        <p>{{ __('Keep your details current and your account secure.') }}</p>
    </x-slot>

    <div class="nw-account-grid">
        <aside class="nw-account-sidebar" aria-label="{{ __('Settings sections') }}">
            <span class="nw-eyebrow">{{ __('On this page') }}</span>
            <nav class="nw-settings-nav">
                <a href="#profile-information">{{ __('Personal details') }}</a>
                <a href="#password">{{ __('Password') }}</a>
                <a href="#delete-account">{{ __('Delete account') }}</a>
            </nav>
            <p class="nw-form-hint">{{ __('Need a hand?') }} <a class="nw-link" href="{{ url('/ContactUs') }}">{{ __('Get in touch') }}</a></p>
        </aside>

        <div class="nw-settings-panels">
            <div id="profile-information" class="nw-panel">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div id="password" class="nw-panel">
                @include('profile.partials.update-password-form')
            </div>
            <div id="delete-account" class="nw-panel nw-panel--danger">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>