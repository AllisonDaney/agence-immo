@php  
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??='';

@endphp



<div @class(['flex flex-col gap-2', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    @if($type ==  'textarea')
    <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">{{ old($name, $value) }} </textarea>
    @else
    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" placeholder="{{ $name }}">
    @endif
    @error($name)
        <div class="invalid feedback">
            {{ $message }}
        </div>
    @enderror
</div>
