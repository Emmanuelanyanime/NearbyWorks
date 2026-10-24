@props(['job'])

@php
    // Guests always go through sign-up first. Signed-in people go to the employer's own apply link when the
    // job has one (Workable's application_url); the backend can replace that with an in-site application.
    $applyUrl = auth()->check()
        ? ($job['apply_url'] ?? route('jobs.show', $job['id']))
        : route('register', ['job' => $job['id']]);
@endphp

<a {{ $attributes->class('nw-button nw-button--primary') }} href="{{ $applyUrl }}">
    @guest {{ __('Sign up to apply') }} @else {{ __('Apply now') }} @endguest
    <span class="nw-sr-only">{{ __('for :title', ['title' => $job['title']]) }}@if (! empty($job['company'])) {{ __('at :company', ['company' => $job['company']]) }}@endif</span>
    <x-icon name="arrow-up-right" />
</a>
