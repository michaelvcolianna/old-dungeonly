<?php

namespace App\Http\Livewire\Shadowrun\Character;

use App\Http\Livewire\Shadowrun;

class PrimaryArmor extends Shadowrun
{
    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.character.list');
    }
}
