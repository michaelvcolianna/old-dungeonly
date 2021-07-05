<div class="group--damage-track">
    @foreach(config('shadowrun.damage_tracker') as $name => $field)
        <x-shadowrun.field
            mt="2" :name="$name" :label="$field['label']" :calculated="true"
            :disabled="$field['disabled']"
        />
    @endforeach
</div>
