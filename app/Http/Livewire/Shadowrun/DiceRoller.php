<?php

namespace App\Http\Livewire\Shadowrun;

use App\Models\Shadowrunner;
use Illuminate\Support\Str;
use Livewire\Component;

class DiceRoller extends Component
{
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
        //
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.dice-roller');
    }
}
