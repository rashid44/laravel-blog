@props(['name'])

@error($name)
    <span class="text-xs font-bold text-red-500">{{ $message }}</span>
@enderror
