<?php

namespace App\Http\Livewire\Shadowrun;

use App\Models\Shadowrunner;
use Illuminate\Support\Str;
use Livewire\Component;

class QuickJump extends Component
{
    /**
     * All group/field elements.
     *
     * @var array
     */
    public $elements;

    /**
     * Matched results of a search.
     *
     * @var array
     */
    public $results;

    /**
     * Value of the search field.
     *
     * @var string
     */
    public $search;

    /**
     * The currently selected option.
     *
     * @var string
     */
    public $selected;

    /**
     * Whether to show the results box.
     *
     * @var boolean
     */
    public $show_results;

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'elementSelected',
        'characterUpdated' => '$refresh',
    ];

    /**
     * Actions to take when the component is loaded.
     */
    public function mount()
    {
        // No results
        $this->results = [];
        $this->show_results = false;

        // Add regular groups to the list of elements
        foreach(config('shadowrun.groups') as $name => $label)
        {
            $this->elements['group--' . $name] = [
                'label' => $label,
                'group' => 'Group',
            ];
        }

        // Add regular fields to the list of elements, either as a group or a
        // field, depending on if they are JSON or not
        foreach(config('shadowrun.fields') as $fields)
        {
            foreach($fields as $name => $field)
            {
                $prefix = 'field--';
                $group = null;
                if($field['db'] == 'json')
                {
                    $prefix = 'group--';
                    $group = 'Group';
                }

                $this->elements[$prefix . $name] = [
                    'label' => $field['label'],
                    'group' => $group,
                ];
            }
        }

        // Add special array fields to the list of elements
        foreach(config('shadowrun.special') as $array)
        {
            $label = (in_array($array, config('shadowrun.core_combat')))
                ? config('shadowrun.fields.core_combat_info.' . $array . '.label')
                : config('shadowrun.fields.' . $array . '.' . $array . '.label')
                ;
            $fields = config('shadowrun.arrays.' . $array . '.fields');

            foreach($fields as $subname => $subfield)
            {
                $this->elements['field--' . $array . '--' . $subname] = [
                    'label' => $subfield['label'],
                    'group' => $label,
                ];
            }
        }

        // Add damage tracker fields to the list of elements
        foreach(config('shadowrun.damage_tracker') as $name => $field)
        {
            $this->elements['field--' . $name] = [
                'label' => $field['label'],
                'group' => 'Wounds',
            ];
        }

        // Add dynamic fields to the list of elements
        $character = Shadowrunner::find(1)
            ->select('skills', 'qualities', 'contacts', 'augmentations', 'spells_preparations_rituals_complex_forms', 'adept_powers_or_other_abilities')
            ->first()
            ->getAttributes()
            ;
        foreach($character as $name => $fields)
        {
            $fields = json_decode($fields, true);

            foreach($fields as $id => $field)
            {
                $this->elements['row--' . $name . '--' . $id] = [
                    'label' => $field['name'],
                    'group' => config('shadowrun.fields.' . $name . '.' . $name . '.label'),
                ];
            }
        }

        // Sort by the human-readable value
        asort($this->elements);
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.quick-jump');
    }

    /**
     * Actions to take when the search field is updated.
     */
    public function updatedSearch()
    {
        $this->results = [];

        // Only act if 2 characters or more
        if(strlen($this->search) > 1)
        {
            $this->searchElements();
        }

        $this->show_results = (count($this->results) > 0);
    }

    /**
     * Act when a result is chosen.
     *
     * @param  string  $choice
     */
    public function updatedSelected($choice)
    {
        $this->results = [];
        $this->search = null;
        $this->selected = null;
        $this->show_results = false;
    }

    /**
     * Searches the groups and fields for the term.
     */
    public function searchElements()
    {
        foreach($this->elements as $key => $element)
        {
            if(preg_match(sprintf('~%s~i', $this->search), $element['label']))
            {
                $this->results[$key] = [
                    'label' => $element['label'],
                    'group' => $element['group'],
                ];
            }
        }
    }
}
