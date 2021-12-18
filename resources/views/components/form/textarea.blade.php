@props(['name'])

<x-field>
    <x-form.label name="{{ $name }}"/>

    <textarea name="{{ $name }}" id="{{ $name }}" 
        cols="30" rows="10" 
        class="border border-gray-200 p-2 mb-1 w-full rounded text-sm"
    >
        {{ $attributes(['value' => old($name)]) }}
    </textarea>

    <x-form.error name="{{ $name }}"/>
</x-field>