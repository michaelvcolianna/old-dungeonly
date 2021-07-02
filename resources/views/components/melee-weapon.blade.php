@props(['id', 'border' => true])

<div
    class="grid grid-cols-86-10-pct gap-4-pct my-2"
    wire:key="melee_weapons-{{ $id }}"
>
    <div class="grid grid-cols-2 gap-4 {{ $border ? 'pb-8 border-b' : '' }}">
        @foreach(config('shadowrun.arrays.melee_weapons.fields') as $name => $field)
            @if($field['rows'])
                <x-multiline
                    :mt="0" :label="$field['label']"
                    :rows="$field['rows']"
                    name="melee_weapons.{{ $id }}.{{ $name }}"
                />
            @else
                <x-field
                    :mt="0" :label="$field['label']"
                    name="melee_weapons.{{ $id }}.{{ $name }}"
                />
            @endif
        @endforeach
    </div>

    <div
        class="flex items-center justify-center text-gray-800"
        wire:click="deleteMeleeWeapon({{ $id }})"
    >
        <x-trash />
    </div>
</div>
