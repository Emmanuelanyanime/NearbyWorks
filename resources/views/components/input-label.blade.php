@props(['value'])

<label {{ $attributes->merge(['class' => 'nw-label']) }}>
    {{ $value ?? $slot }}
</label>
