<?php

namespace App\Http\Livewire;

use App\Models\Shadowrunner;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

abstract class Shadowrun extends Component
{
    /**
     * The builder for the character.
     *
     * @var \Illuminate\Database\Eloquent\Builder
     */
    protected Builder $builder;

    /**
     * The character.
     *
     * @var \App\Models\Shadowrunner
     */
    public Shadowrunner $character;

    /**
     * The config array key for this section.
     *
     * @var string
     */
    public $key;

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
        if(empty($this->key))
        {
            return;
        }

        foreach(config('shadowrun.fields.' . $this->key) as $name => $field)
        {
            // Base field names
            $rules['character.' . $name] = 'nullable';

            // Array subfields
            if($field['db'] == 'json')
            {
                $config = config('shadowrun.arrays.' . $name);
                $dot = ($config['repeats'])
                    ? '.*.'
                    : '.'
                    ;

                foreach($config['fields'] as $subname => $subfield)
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
        $this->builder = Shadowrunner::find(1)
            ->select('id')
            ;

        $this->individualSetup();
    }

    /**
     * Contract for individual component customization.
     *
     * The extended class should set $key and add selects to $builder to make
     * $character.
     */
    abstract protected function individualSetup();

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
