<nav class="nw-account-nav" aria-label="{{ __('Your account') }}">
    <div class="nw-container nw-account-nav__inner">
        <div class="nw-account-nav__links">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Overview') }}
            </x-nav-link>
            <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.*')">
                {{ __('Profile & settings') }}
            </x-nav-link>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nw-link">{{ __('Log out') }}</button>
        </form>
    </div>
</nav>