@props(['id'])

<div
    class="grid grid-cols-64-18-10-pct gap-4-pct my-2"
    wire:key="skill-{{ $id }}"
>
    <div wire:key="skill-name-{{ $id }}">
        <x-jet-label
            class="hidden" for="skill-name-{{ $id }}"
            value="{{ config('shadowrun.arrays.skills.fields.name.label') }}"
        />
        <x-jet-input
            id="skill-name-{{ $id }}" class="block mt-1 w-full"
            type="text"
            wire:model.debounce.750ms="character.skills.{{ $id }}.name"
        />
    </div>

    <div class="" wire:key="skill-rating-{{ $id }}">
        <x-jet-label
            class="hidden" for="skill-rating-{{ $id }}"
            value="{{ config('shadowrun.arrays.skills.fields.rating.label') }}"
        />
        <x-jet-input
            id="skill-rating-{{ $id }}" type="text"
            class="block mt-1 w-full"
            wire:model.debounce.750ms="character.skills.{{ $id }}.rating"
        />
    </div>

    <div
        class="flex items-center justify-center text-gray-800"
        wire:click="deleteSkill({{ $id }})"
    >
        <x-trash />
    </div>
</div>
