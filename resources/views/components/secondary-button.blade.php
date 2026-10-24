<button {{ $attributes->merge(['type' => 'button', 'class' => 'nw-button nw-button--outline']) }}>
    {{ $slot }}
</button>
