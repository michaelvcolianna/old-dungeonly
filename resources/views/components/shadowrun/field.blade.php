@props(['mt' => 2, 'name', 'label', 'hidden' => false])

<div class="mt-{{ $mt }} field--{{ $name }}" wire:key="field-{{ $name }}">
    <x-jet-label
        for="{{ $name }}" value="{{ $label }}"
        class="{{ $hidden ? 'hidden' : '' }}"
    />
    <x-jet-input
        id="{{ $name }}" class="block mt-1 w-full" type="text"
        wire:model="character.{{ $name }}"
    />
</div>
