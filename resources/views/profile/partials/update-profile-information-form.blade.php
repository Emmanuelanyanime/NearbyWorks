<section aria-labelledby="profile-information-heading">
    <header class="nw-panel-heading">
        <span class="nw-eyebrow">{{ __('The essentials') }}</span>
        <h2 id="profile-information-heading">{{ __('Personal details') }}</h2>
        <p>{{ __('Update the name and email address on your account.') }}</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="nw-form-stack">
        @csrf
        @method('patch')

        <div class="nw-form-row nw-form-row--fields">
            <div>
                <x-input-label for="firstname" :value="__('First name')" />
                <x-text-input id="firstname" name="firstname" type="text" :value="old('firstname', $user->firstname)" required autofocus autocomplete="given-name" />
                <x-input-error id="firstname-error" :messages="$errors->get('firstname')" />
            </div>
            <div>
                <x-input-label for="lastname" :value="__('Last name')" />
                <x-text-input id="lastname" name="lastname" type="text" :value="old('lastname', $user->lastname)" required autocomplete="family-name" />
                <x-input-error id="lastname-error" :messages="$errors->get('lastname')" />
            </div>
        </div>

        <div>
            <x-input-label for="email" :value="__('Email address')" />
            <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error id="email-error" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="nw-notice">
                    <p>{{ __('Your email address is unverified.') }}</p>
                    <button type="submit" form="send-verification" class="nw-link">
                        {{ __('Resend verification email') }}
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p role="status">{{ __('A new verification link has been sent to your email address.') }}</p>
                    @endif
                </div>
            @endif
        </div>

        <div class="nw-form-row nw-form-row--actions">
            <x-primary-button>{{ __('Save changes') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="nw-form-hint" role="status">{{ __('Your changes have been saved.') }}</p>
            @endif
        </div>
    </form>
</section>