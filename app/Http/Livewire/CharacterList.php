<?php

namespace App\Http\Livewire;

use App\Models\Shadowrunner;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class CharacterList extends Component
{
    /**
     * The characters collection.
     *
     * @var \Illuminate\Support\Collection
     */
    public Collection $characters;

    /**
     * Actions to take when the component is loaded.
     */
    public function mount()
    {
        $this->characters = Shadowrunner::where('user_id', auth()->user()->id)
            ->get()
            ->sortBy('name')
            ;
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.character-list');
    }

    /**
     * Prints up to 50 words of the character's notes.
     *
     * @param  string  $string
     * @return string
     */
    public function limitedNotes($string)
    {
        $string ??= 'There are no notes for this character yet.';

        return Str::words($string, 50, ' [...]');
    }

    /**
     * Sets the character to load in the session.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function loadCharacter($id)
    {
        session(['character_id' => $id]);

        return redirect()->route('shadowrun.main');
    }
}
