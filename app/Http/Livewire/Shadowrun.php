<?php

namespace App\Http\Livewire;

use App\Models\Shadowrunner;
use Illuminate\Support\Str;
use Livewire\Component;

abstract class Shadowrun extends Component
{
    /**
     * The character.
     *
     * @var \App\Models\Shadowrunner
     */
    public Shadowrunner $character;

    /**
     * Validation rules.
     *
     * Cycles through the configuration for each field in the section and
     * creates the rules, along with any sub-fields for arrays.
     *
     * @return array
     */
    protected function rules()
    {
        $rules = [];

        foreach($this->getFieldConfig() as $name => $field)
        {
            // Base field names
            $rules['character.' . $name] = 'nullable';

            // Array subfields
            if($field['db'] == 'json')
            {
                $array = $this->getArrayConfig($name);
                $dot = ($array['repeats'])
                    ? '.*.'
                    : '.'
                    ;

                foreach($array['fields'] as $subname => $subfield)
                {
                    $rules['character.' . $name . $dot . $subname] = 'nullable';
                }
            }
        }

        return $rules;
    }

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'characterUpdated' => '$refresh',
    ];

    /**
     * Actions to take when the component is loaded.
     */
    public function mount()
    {
        $builder = Shadowrunner::find(1)
            ->select('id', 'user_id', 'character')
            ;

        // Add extra columns for this component to the builder
        foreach(array_keys($this->getFieldConfig()) as $name)
        {
            $builder->addSelect($name);
        }

        $this->character = $builder->first();
    }

    /**
     * Actions to take when a property is updated.
     *
     * @param  string  $propertyName
     */
    public function updated($propertyName)
    {
        $this->character->save();

        // Notify the other components something changed
        $this->emit('characterUpdated');
    }

    /**
     * Gets the config key for the component.
     *
     * @return string
     */
    public function getKey()
    {
        return Str::snake((new \ReflectionClass($this))->getShortName());
    }

    /**
     * Gets the field config for the component.
     *
     * @return array
     */
    public function getFieldConfig()
    {
        return config('shadowrun.fields.' . $this->getKey()) ?? [];
    }

    /**
     * Gets the array config for the specified field.
     *
     * @param  string  $field
     * @return array
     */
    public function getArrayConfig($field)
    {
        return config('shadowrun.arrays.' . $field) ?? [];
    }

    /**
     * Gets the type of component needed for a field.
     *
     * @param  array  $field
     * @return string
     */
    public function getFieldComponent($field)
    {
        $component = ($field['db'] == 'string')
            ? 'field'
            : 'multiline'
            ;

        return 'shadowrun.' . $component;
    }
}
