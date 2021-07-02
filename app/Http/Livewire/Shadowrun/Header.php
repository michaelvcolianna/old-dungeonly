<?php

namespace App\Http\Livewire\Shadowrun;

use Livewire\Component;

class Header extends Component
{
    /**
     * The character's name.
     *
     * @var string
     */
    public $character;

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'characterNameUpdated' => 'getCharacterName',
    ];

    /**
     * Actions to take when the component is loaded.
     */
    public function mount()
    {
        $this->getCharacterName();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.header');
    }

    /**
     * Gets the character's name.
     */
    public function getCharacterName()
    {
        $character = auth()->user()->shadowrunners()->first();
        $this->character = $character->character;
    }
}
