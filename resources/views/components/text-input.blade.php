@props(['disabled' => false, 'errorBag' => 'default'])

@php
    $fieldName = $attributes->get('name');
    $fieldId = $attributes->get('id');
    $hasError = $fieldName && $errors->getBag($errorBag)->has($fieldName);
    $describedBy = $attributes->get('aria-describedby');

    if ($hasError && $fieldId) {
        $describedBy = trim($describedBy . ' ' . $fieldId . '-error');
    }
@endphp

<input @disabled($disabled) {{ $attributes->except('aria-describedby')->merge(['class' => 'nw-input', 'aria-invalid' => $hasError ? 'true' : null, 'aria-describedby' => $describedBy ?: null]) }}>