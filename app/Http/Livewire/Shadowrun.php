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
                $array = $this->getArrayConfig();
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
     * Gets the array config for the component.
     *
     * @return array
     */
    public function getArrayConfig()
    {
        return config('shadowrun.arrays.' . $this->getKey()) ?? [];
    }

    /**
     * Gets the array fields.
     *
     * @return array
     */
    public function getArrayFields()
    {
        return $this->getArrayConfig()['fields'];
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

    /**
     * Gets the type of component needed for a repeating field.
     *
     * @return string
     */
    public function getRepeaterComponent()
    {
        return 'shadowrun.' . $this->getKey();
    }

    /**
     * Adds a row to an array.
     */
    public function addRow()
    {
        // Obtain the current array
        $array = $this->character->{$this->getKey()} ?? [];

        // Build a blank row
        foreach(array_keys($this->getArrayFields()) as $name)
        {
            $new[$name] = null;
        }

        // Add the new blank row
        $array[] = $new;

        $this->character->update([
            $this->getKey() => $array,
        ]);
    }

    /**
     * Removes a row from an array.
     *
     * @param  integer  $id
     */
    public function deleteRow($id)
    {
        // Obtain the current array
        $array = $this->character->{$this->getKey()};

        // Remove the row and reindex
        unset($array[$id]);
        $array = array_values($array);

        $this->character->update([
            $this->getKey() => $array,
        ]);
    }
}
