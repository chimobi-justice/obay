@props(['name'])

@error($name)
    <div class="text-red-500 text-xs mb-2">
        {{ $message }}
    </div>
@enderror