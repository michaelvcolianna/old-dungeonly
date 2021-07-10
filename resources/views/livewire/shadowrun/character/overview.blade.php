<div class="group--{{ $this->getKey() }}">
    <div class="flex-row items-center justify-between mt-2 md:flex">
        <div class="font-normal text-gray-700 text-sm">
            <span class="font-semibold">Player:</span>
            {{ $this->character->user->name }}
        </div>

        <div class="font-normal text-gray-700 text-sm">
            <span class="font-semibold">Campaign:</span>
            {{ $this->character->team->name }}
        </div>
    </div>

    @foreach($this->getFieldConfig() as $name => $field)
        <x-dynamic-component
            :mt="$loop->first ? 4 : 2" :name="$name" :label="$field['label']"
            :component="$this->getFieldComponent($field)"
            :rows="$field['rows'] ?? null"
        />
    @endforeach
</div>
