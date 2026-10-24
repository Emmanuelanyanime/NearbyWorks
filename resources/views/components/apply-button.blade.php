@props(['job'])

@php
    // Guests apply through sign-up; the backend replaces the signed-in branch with the real application flow.
    $applyUrl = $job['apply_url'] ?? (auth()->check() ? route('dashboard') : route('register', ['job' => $job['id']]));
@endphp

<a {{ $attributes->class('nw-button nw-button--primary') }} href="{{ $applyUrl }}">
    @guest {{ __('Sign up to apply') }} @else {{ __('Apply now') }} @endguest
    <span class="nw-sr-only">{{ __('for :title at :company', ['title' => $job['title'], 'company' => $job['company']]) }}</span>
    <x-icon name="arrow-up-right" />
</a>
