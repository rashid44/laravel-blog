@props(['name', 'rows' => 6])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea class="w-full text-sm p-2 border border-gray-200 rounded" name="{{ $name }}"
        id="{{ $name }}" rows="{{ $rows }}" placeholder="Enter post {{ $name }}"
        required>{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
