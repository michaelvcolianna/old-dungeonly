@props(['id', 'border' => true])

<div
    class="grid grid-cols-86-10-pct gap-4-pct my-2"
    wire:key="quality-{{ $id }}"
>
    <div class="{{ $border ? 'pb-8 border-b' : '' }}">
        @foreach(config('shadowrun.arrays.qualities.fields') as $name => $field)
            @if($field['rows'])
                <x-multiline
                    :mt="$loop->first ? 4 : 2" :label="$field['label']"
                    :rows="$field['rows']"
                    name="qualities.{{ $id }}.{{ $name }}"
                />
            @else
                <x-field
                    :mt="$loop->first ? 4 : 2" :label="$field['label']"
                    name="qualities.{{ $id }}.{{ $name }}"
                />
            @endif
        @endforeach

        {{-- <div
            class="mt-4"
            wire:key="field-quality-{{ $name }}-{{ $id }}"
        >
            <x-jet-label
                class="mt-2" for="quality-{{ $name }}-{{ $id }}"
                value="Name"
            />
            <x-jet-input
                id="quality-{{ $name }}-{{ $id }}" type="text"
                class="block mt-1 w-full"
                wire:model.debounce.750ms="character.qualities.{{ $id }}.{{ $name }}"
            />
        </div>

        <div
            class="mt-2"
            wire:key="field-quality-notes-{{ $id }}"
        >
            <x-jet-label
                class="mt-2" for="quality-notes-{{ $id }}"
                value="Notes"
            />
            <x-textarea
                id="quality-notes-{{ $id }}"
                class="block mt-1 w-full"
                wire:model.debounce.750ms="character.qualities.{{ $id }}.notes"
            />
        </div> --}}
    </div>

    <div
        class="flex items-center justify-center pt-8 text-gray-800"
        wire:click="deleteQuality({{ $id }})"
    >
        <x-trash />
    </div>
</div>