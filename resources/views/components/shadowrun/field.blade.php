@props(['mt' => 2, 'name', 'label', 'hidden' => false, 'fieldclass' => null, 'calculated' => false, 'disabled' => false])

<div class="mt-{{ $mt }} field--{{ $fieldclass ?? $name }}" wire:key="field-{{ $name }}">
    <x-jet-label
        for="{{ $name }}" value="{{ $label }}"
        class="{{ $hidden ? 'hidden' : '' }}"
    />
    <x-jet-input
        id="{{ $name }}" class="block mt-1 w-full" type="text"
        :disabled="$disabled"
        wire:model="{{ !$calculated ? 'character.' : '' }}{{ $name }}"
    />
</div>
