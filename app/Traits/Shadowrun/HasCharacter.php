<?php

namespace App\Traits\Shadowrun;

use App\Models\Shadowrunner;

trait HasCharacter
{
    /**
     * The character.
     *
     * @var \App\Models\Shadowrunner
     */
    public Shadowrunner $character;
}
