@props(['id', 'border' => true])

<div
    class="grid grid-cols-86-10-pct gap-4-pct my-2" wire:key="contact-{{ $id }}"
>
    <div class="{{ $border ? 'pb-8 border-b' : '' }}">
        @foreach(config('shadowrun.arrays.contacts.fields') as $name => $field)
            @if($field['rows'])
                <x-shadowrun.multiline
                    :mt="$loop->first ? 4 : 2" :label="$field['label']"
                    :rows="$field['rows']" name="contacts.{{ $id }}.{{ $name }}"
                />
            @else
                <x-shadowrun.field
                    :mt="$loop->first ? 4 : 2" :label="$field['label']"
                    name="contacts.{{ $id }}.{{ $name }}"
                />
            @endif
        @endforeach
    </div>

    <div
        class="flex items-center justify-center text-gray-800"
        wire:click="deleteContact({{ $id }})"
    >
        <x-shadowrun.trash />
    </div>
</div>
