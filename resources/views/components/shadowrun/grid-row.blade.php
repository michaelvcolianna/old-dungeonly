@props(['key', 'id', 'fields', 'last' => false])

<div
    class="grid grid-cols-86-10-pct gap-4pct items-center pl-6 mb-2 grid-row relative row--{{ $key }}--{{ $id }}"
    wire:key="field-{{ $key }}-{{ $id }}"
>
    <div class="grid--row">
        @foreach($fields as $name => $field)
            <x-dynamic-component
                :mt="2" :label="$field['label']" :rows="$field['rows'] ?? null"
                name="{{ $this->getKey() }}.{{ $id }}.{{ $name }}"
                fieldclass="{{ $this->getKey() }}--{{ $id }}--{{ $name }}"
                :component="$field['rows'] ? 'shadowrun.multiline' : 'shadowrun.field'"
            />
        @endforeach
    </div>

    <div class="flex flex-row justify-center">
        <button
            class="flex items-center justify-center text-gray-800"
            wire:click="deleteRow({{ $id }})"
        >
            <x-shadowrun.trash />
        </button>
    </div>
</div>
