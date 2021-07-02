<?php

namespace App\Http\Livewire\Shadowrun\Character;

use App\Models\Shadowrunner;
use Livewire\Component;

class Header extends Component
{
    /**
     * The character's id.
     *
     * @var integer
     */
    public $cid;

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'characterNameUpdated' => '$refresh',
    ];

    /**
     * Actions to take when the component is loaded.
     *
     * @param  integer  $cid
     */
    public function mount($cid)
    {
        $this->cid = $cid;
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        $character = Shadowrunner::find($this->cid)
            ->select('user_id', 'character')
            ->first()
            ;

        return view('livewire.shadowrun.character.header', [
            'name' => $character->character,
            'player' => $character->user->name,
        ]);
    }
}
