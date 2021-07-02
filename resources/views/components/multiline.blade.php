@props(['mt' => 2, 'name', 'label', 'rows' => 2])

<div class="mt-{{ $mt }}" wire:key="field-{{ $name }}">
    <x-jet-label class="mt-2" for="{{ $name }}" value="{{ $label }}" />
    <x-textarea
        id="{{ $name }}" class="block mt-1 w-full" rows="{{ $rows }}"
        wire:model.debounce.750ms="character.{{ $name }}"
    />
</div>