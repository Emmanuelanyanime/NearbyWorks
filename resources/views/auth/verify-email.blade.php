<x-guest-layout>
    <x-slot name="title">{{ __('Verify your email') }}</x-slot>

    <header class="nw-auth-heading">
        <span class="nw-eyebrow">{{ __('You are almost there') }}</span>
        <h1 id="auth-heading">{{ __('Check your inbox.') }}</h1>
        <p>{{ __('Thanks for joining NearbyWorks. Click the link in your verification email to confirm your address.') }}
        </p>
    </header>

    @if (session('status') == 'verification-link-sent')
        <div class="nw-notice" role="status">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="nw-form-stack">
        <p class="nw-form-hint">{{ __('Cannot find the email? Check your spam folder or request another link below.') }}
        </p>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button>{{ __('Resend verification email') }}</x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="nw-form-footer">
            @csrf
            <button type="submit" class="nw-link">{{ __('Log out') }}</button>
        </form>
    </div>
</x-guest-layout>
