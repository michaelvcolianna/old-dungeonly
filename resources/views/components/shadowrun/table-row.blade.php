@props(['key', 'id', 'fields'])

<tr class="row--{{ $key }}" wire:key="field-{{ $key }}-{{ $id }}">
    @foreach($fields as $name => $field)
        <td
            class="field--{{ $key }}--{{ $name }}"
            wire:key="field-{{ $key }}-{{ $id }}-{{ $name }}"
        >
            <x-shadowrun.field
                mt="0" :label="$field['label']" :hidden="true"
                name="{{ $key }}.{{ $id }}.{{ $name }}"
            />
        </td>
    @endforeach

    <td
        class="field--{{ $key }}--delete"
        wire:key="field-{{ $key }}-{{ $id }}-delete"
    >
        <button
            class="flex items-center justify-center text-gray-800"
            wire:click="deleteRow({{ $id }})"
        >
            <x-shadowrun.trash />
        </button>
    </td>
</tr>
