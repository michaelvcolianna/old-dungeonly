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

    /**
     * Retrieve the character.
     *
     * Gets the character for the user & current team, creating a new one if it
     * doesn't exist.
     *
     * If a character ID is specified & belongs to the user, gets that character
     * instead.
     *
     * @return void
     */
    protected function getCharacter()
    {
        $user = auth()->user();

        // Get the character or create one
        $this->character = Shadowrunner::firstOrCreate([
            'user_id' => $user->id,
            'team_id' => $user->currentTeam->id,
        ]);

        // Character ID specified in the session
        if(session()->has('character_id'))
        {
            $character = Shadowrunner::where([
                'id' => session()->get('character_id'),
                'user_id' => $user->id,
            ])->get();

            if($character->isEmpty())
            {
                // No cheating & loading someone else's character
                session()->forget('character_id');
            }
            else
            {
                // Update with the specified character
                $this->character = $character->first();
            }
        }
    }
}
