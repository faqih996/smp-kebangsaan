@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-blue-50 focus:ring-blue-50 rounded-md shadow-sm',
]) !!}>
