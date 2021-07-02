@props(['mt' => 2, 'name', 'label'])

<div class="mt-{{ $mt }}" wire:key="field-{{ $name }}">
    <x-jet-label for="{{ $name }}" value="{{ $label }}" />
    <x-jet-input
        id="{{ $name }}" class="block mt-1 w-full" type="text"
        wire:model="character.{{ $name }}"
    />
</div>
