@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'nw-notice', 'role' => 'status']) }}>
        {{ $status }}
    </div>
@endif
