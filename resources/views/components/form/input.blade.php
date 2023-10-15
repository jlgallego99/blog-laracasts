@props(['name', 'type' => 'text'])

<div class="mt-6">
    <x-form.label name="{{ $name }}" />

    <input class="border border-gray-200 p-2 w-full rounded"
           type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ old($name) }}"
           required
    >

    <x-form.error name="{{ $name }}" />
</div>
