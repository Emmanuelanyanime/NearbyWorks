@props(['job'])

@php
    // Guests always go through sign-up first; signed-in people fill in the application form on this site.
    $applyUrl = auth()->check()
        ? route('jobs.apply', $job['id'])
        : route('register', ['job' => $job['id']]);
@endphp

<a {{ $attributes->class('nw-button nw-button--primary') }} href="{{ $applyUrl }}">
    @guest {{ __('Sign up to apply') }} @else {{ __('Apply now') }} @endguest
    <span class="nw-sr-only">{{ __('for :title', ['title' => $job['title']]) }}@if (! empty($job['company'])) {{ __('at :company', ['company' => $job['company']]) }}@endif</span>
    <x-icon name="arrow-up-right" />
</a>
