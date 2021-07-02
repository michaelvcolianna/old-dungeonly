@props(['id', 'border' => true])

<div class="grid grid-cols-86-10-pct gap-4-pct my-2" wire:key="power-{{ $id }}">
    <div class="{{ $border ? 'pb-8 border-b' : '' }}">
        @foreach(config('shadowrun.arrays.adept_powers_or_other_abilities.fields') as $name => $field)
            @if($field['rows'])
                <x-shadowrun.multiline
                    :mt="$loop->first ? 4 : 2" :label="$field['label']"
                    :rows="$field['rows']"
                    name="adept_powers_or_other_abilities.{{ $id }}.{{ $name }}"
                />
            @else
                <x-shadowrun.field
                    :mt="$loop->first ? 4 : 2" :label="$field['label']"
                    name="adept_powers_or_other_abilities.{{ $id }}.{{ $name }}"
                />
            @endif
        @endforeach
    </div>

    <div
        class="flex items-center justify-center pt-8 text-gray-800"
        wire:click="deletePower({{ $id }})"
    >
        <x-shadowrun.trash />
    </div>
</div>
