@props(['id', 'border' => true])

<div
    class="grid grid-cols-86-10-pct gap-4-pct my-2"
    wire:key="ranged_weapons-{{ $id }}"
>
    <div class="grid grid-cols-2 gap-4 {{ $border ? 'pb-8 border-b' : '' }}">
        @foreach(config('shadowrun.arrays.ranged_weapons.fields') as $name => $field)
            @if($field['rows'])
                <x-shadowrun.multiline
                    :mt="0" :label="$field['label']" :rows="$field['rows']"
                    name="ranged_weapons.{{ $id }}.{{ $name }}"
                />
            @else
                <x-shadowrun.field
                    :mt="0" :label="$field['label']"
                    name="ranged_weapons.{{ $id }}.{{ $name }}"
                />
            @endif
        @endforeach
    </div>

    <div
        class="flex items-center justify-center text-gray-800"
        wire:click="deleteRangedWeapon({{ $id }})"
    >
        <x-shadowrun.trash />
    </div>
</div>
