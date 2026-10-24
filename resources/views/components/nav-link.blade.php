@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nw-account-nav__link is-active'
            : 'nw-account-nav__link';
@endphp

<a @if ($active ?? false) aria-current="page" @endif {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
