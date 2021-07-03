<?php

namespace App\Http\Livewire;

use App\Models\Shadowrunner;
use App\Traits\Shadowrun\HasCharacter;
use Illuminate\Support\Str;
use Livewire\Component;

abstract class Shadowrun extends Component
{
    use HasCharacter;

    /**
     * Fields that prompt special handling.
     *
     * @var array
     */
    const SPECIAL_FIELDS = [
        'primary_armor',
        'primary_ranged_weapon',
        'primary_melee_weapon',
    ];

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'characterUpdated' => '$refresh',
    ];

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

        if(in_array($this->getKey(), self::SPECIAL_FIELDS))
        {
            $this->buildSpecialRules($rules);
        }
        else
        {
            $this->buildRegularRules($rules);
        }

        return $rules;
    }

    /**
     * Builds a standard set of rules from the config.
     *
     * @param  array  &$rules
     */
    protected function buildRegularRules(&$rules)
    {
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

                foreach(array_keys($array['fields']) as $subname)
                {
                    $rules['character.' . $name . $dot . $subname] = 'nullable';
                }
            }
        }
    }

    /**
     * Builds a set of rules for a special field from the config.
     *
     * @param  array  &$rules
     */
    protected function buildSpecialRules(&$rules)
    {
        $array = $this->getArrayConfig();
        $dot = ($array['repeats'])
            ? '.*.'
            : '.'
            ;

        foreach(array_keys($array['fields']) as $subname)
        {
            $rules['character.' . $this->getKey() . $dot . $subname] = 'nullable';
        }
    }

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

        // Add extra column for the special fields to the builder, if needed
        if(in_array($this->getKey(), self::SPECIAL_FIELDS))
        {
            $builder->addSelect($this->getKey());
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
     * Gets the type of component needed for an array field.
     *
     * @param  array  $field
     * @return string
     */
    public function getArrayComponent($field)
    {
        $component = ($field['rows'])
            ? 'multiline'
            : 'field'
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
