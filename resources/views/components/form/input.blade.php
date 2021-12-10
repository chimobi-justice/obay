@props(['name'])

<x-field>
    <x-form.label name="{{ $name }}"/>

    <input class="border border-gray-200 p-2 mb-1 w-full rounded text-sm"
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>
</x-field>