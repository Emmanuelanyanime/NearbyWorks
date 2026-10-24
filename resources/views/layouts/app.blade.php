<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.site-head', ['title' => isset($title) ? (string) $title : 'Your account'])
    </head>
    <body class="nw-account-layout">
        <a class="nw-skip-link" href="#main-content">{{ __('Skip to content') }}</a>
        <x-site-header :account="true" />
        @include('layouts.navigation')

        <main id="main-content" class="nw-container nw-account-main">
            @isset($header)
                <header class="nw-page-heading">
                    {{ $header }}
                </header>
            @endisset

            {{ $slot }}
        </main>

        <x-site-footer :compact="true" />
    </body>
</html>