<?php

namespace App\Http\Livewire\Shadowrun\Character;

use App\Http\Livewire\Shadowrun;

class Skills extends Shadowrun
{
    /**
     * Table column headers.
     *
     * @var array
     */
    public $headers = [
        'skill_name' => 'Name',
        'skill_rating' => 'Rating',
    ];

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.character.table');
    }
}
