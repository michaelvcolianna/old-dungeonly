<div class="group--{{ $this->getKey() }}">
    @foreach($this->getArrayFields() as $name => $field)
        <x-dynamic-component
            :mt="2" :label="$field['label']" :rows="$field['rows'] ?? null"
            name="{{ $this->getKey() }}.{{ $name }}"
            fieldclass="{{ $this->getKey() }}--{{ $name }}"
            :component="$this->getArrayComponent($field)"
        />
    @endforeach
</div>
