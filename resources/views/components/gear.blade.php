@props(['id'])

<div
    class="grid grid-cols-64-18-10-pct gap-4-pct my-2"
    wire:key="gear-{{ $id }}"
>
    <div wire:key="gear-name-{{ $id }}">
        <x-jet-label
            class="hidden" for="gear-name-{{ $id }}"
            value="{{ config('shadowrun.arrays.gear.fields.name.label') }}"
        />
        <x-jet-input
            id="gear-name-{{ $id }}" class="block mt-1 w-full"
            type="text"
            wire:model.debounce.750ms="character.gear.{{ $id }}.name"
        />
    </div>

    <div class="" wire:key="gear-rating-{{ $id }}">
        <x-jet-label
            class="hidden" for="gear-rating-{{ $id }}"
            value="{{ config('shadowrun.arrays.gear.fields.rating.label') }}"
        />
        <x-jet-input
            id="gear-rating-{{ $id }}" type="text"
            class="block mt-1 w-full"
            wire:model.debounce.750ms="character.gear.{{ $id }}.rating"
        />
    </div>

    <div
        class="flex items-center justify-center text-gray-800"
        wire:click="deleteGear({{ $id }})"
    >
        <x-trash />
    </div>
</div>
