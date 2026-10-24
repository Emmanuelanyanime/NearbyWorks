<button {{ $attributes->merge(['type' => 'submit', 'class' => 'nw-button nw-button--danger']) }}>
    {{ $slot }}
</button>
