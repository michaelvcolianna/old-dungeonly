@props(['mt' => 2, 'name', 'label', 'rows' => 2])

<div class="mt-{{ $mt }} field--{{ $name }}" wire:key="field-{{ $name }}">
    <x-jet-label class="mt-2" for="{{ $name }}" value="{{ $label }}" />
    <x-shadowrun.textarea
        id="{{ $name }}" class="block mt-1 w-full" rows="{{ $rows }}"
        wire:model="character.{{ $name }}"
    />
</div>
