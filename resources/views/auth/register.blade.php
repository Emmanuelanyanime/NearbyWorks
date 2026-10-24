<x-guest-layout>
    <x-slot name="title">{{ __('Create an account') }}</x-slot>

    <header class="nw-auth-heading">
        <span class="nw-eyebrow">{{ __('Start something good') }}</span>
        <h1 id="auth-heading">{{ __('Your possibilities start here.') }}</h1>
        <p>{{ __('Create your NearbyWorks account and take the first step.') }}</p>
    </header>

    <form method="POST" action="{{ route('register') }}" class="nw-form-stack">
        @csrf

        <div class="nw-form-row nw-form-row--fields">
            <div>
                <x-input-label for="firstName" :value="__('First name')" />
                <x-text-input id="firstName" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="given-name" />
                <x-input-error id="firstName-error" :messages="$errors->get('firstName')" />
            </div>
            <div>
                <x-input-label for="lastName" :value="__('Last name')" />
                <x-text-input id="lastName" type="text" name="lastName" :value="old('lastName')" required autocomplete="family-name" />
                <x-input-error id="lastName-error" :messages="$errors->get('lastName')" />
            </div>
        </div>

        <div>
            <x-input-label for="email" :value="__('Email address')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error id="email-error" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
            <x-input-error id="password-error" :messages="$errors->get('password')" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm password')" />
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error id="password_confirmation-error" :messages="$errors->get('password_confirmation')" />
        </div>

        <x-primary-button>{{ __('Create account') }} <span aria-hidden="true">&rarr;</span></x-primary-button>
    </form>

    <p class="nw-form-footer">
        {{ __('Already have an account?') }}
        <a class="nw-link" href="{{ route('login') }}">{{ __('Log in') }}</a>
    </p>
</x-guest-layout>