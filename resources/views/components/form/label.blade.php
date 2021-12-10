@props(['name'])

<label for="{{ $name }}"
    class="mb-2 block text-sm text-gray-500 font-bold"
>
    {{ ucwords($name) }}
</label>