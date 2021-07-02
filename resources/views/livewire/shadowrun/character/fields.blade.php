<div>
    @foreach(config('shadowrun.fields.' . $key) as $name => $field)
        <x-dynamic-component
            :mt="$loop->first ? 4 : 2" :name="$name" :label="$field['label']"
            :component="$this->getFieldComponent($field)"
            :rows="$field['rows'] ?? null"
        />
    @endforeach
</div>
