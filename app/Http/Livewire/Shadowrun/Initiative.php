<?php

namespace App\Http\Livewire\Shadowrun;

use Livewire\Component;

class Initiative extends Component
{
    /**
     * Preset types of rolls.
     *
     * @var array
     */
    public $types = [
        1 => [
            'label' => 'Physical, Matrix AR, or Rigging AR',
            'test' => 'Reaction + Intuition',
        ],
        2 => [
            'label' => 'Astral',
            'test' => 'Intuition ⨉ 2',
        ],
        3 => [
            'label' => 'Matrix: Cold sim VR',
            'test' => 'Data Processing + Intuition',
        ],
        4 => [
            'label' => 'Matrix: Hot sim VR',
            'test' => 'Data Processing + Intuition',
        ],

    ];

    /**
     * The user-supplied type of initiative roll.
     *
     * @var integer
     */
    public $type;

    /**
     * The user-supplied ability score(s).
     *
     * @var integer
     */
    public $test;

    /**
     * Initial setup for the component.
     */
    public function mount()
    {
        $this->type = 1;
        $this->test = 0;
    }

    /**
     * Display the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.initiative');
    }

    /**
     * Get the test label for the given type.
     *
     * @param  integer  $type
     * @return string
     */
    public function getTestLabel($type)
    {
        return $this->types[$type]['test'];
    }

    /**
     * Roll the dice.
     */
    public function roll()
    {
        // nuffin yet
    }
}
