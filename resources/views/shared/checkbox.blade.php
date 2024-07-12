@php

$class ??= null;

@endphp

<div @class(["flex items-center mb-4", $class])>
    <input type="hidden" value="0" name="{{ $name}}">
    <input type="checkbox" value="1" name="{{ $name }}" class="w-4 h-4 text-gray-900 bg-gray-100 border-gray-300 rounded @error($name) is-invalid @enderror" roles="switch" id="{{ $name }}">
    <label class="default-checkbox" for="{{ $name }}">{{ $label }}</label>
    @error($name)
    <div class="invalid feedback">
        {{ $message }}
    </div>
@enderror
</div>

