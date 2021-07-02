<?php

namespace App\Http\Livewire\Shadowrun\Character;

use App\Http\Livewire\Shadowrun;

class Overview extends Shadowrun
{
    /**
     * Finish setting up the component.
     */
    protected function individualSetup()
    {
        $this->key = 'overview';
        $this->character = $this->builder
            ->addSelect('character', 'notes')
            ->first()
            ;
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.character.fields');
    }
}
