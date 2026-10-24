<button {{ $attributes->merge(['type' => 'submit', 'class' => 'nw-button nw-button--primary']) }}>
    {{ $slot }}
</button>
