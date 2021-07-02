<?php

namespace App\Http\Livewire\Shadowrun\Character;

use App\Http\Livewire\Shadowrun;

class Header extends Shadowrun
{
    /**
     * Finish setting up the component.
     */
    protected function individualSetup()
    {
        $this->character = $this->builder
            ->addSelect('user_id', 'character')
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
        return view('livewire.shadowrun.character.header');
    }
}