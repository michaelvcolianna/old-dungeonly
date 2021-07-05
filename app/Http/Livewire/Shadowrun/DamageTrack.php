<?php

namespace App\Http\Livewire\Shadowrun;

use App\Models\Shadowrunner;
use App\Traits\Shadowrun\HasCharacter;
use Livewire\Component;

class DamageTrack extends Component
{
    use HasCharacter;

    /**
     * The current amount of physical damage.
     *
     * @var string
     */
    public $physical_damage;

    /**
     * The current amount of stun damage.
     *
     * @var string
     */
    public $stun_damage;

    /**
     * The calculated overflow damage.
     *
     * @var string
     */
    public $overflow_damage;

    /**
     * The calculated wound modifier.
     *
     * @var string
     */
    public $wound_modifier;

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'characterUpdated' => 'calculateWounds',
    ];

    /**
     * Actions to take when the component is loaded.
     */
    public function mount()
    {
        $this->character = Shadowrunner::find(1)
            ->select('id', 'user_id', 'physical_damage_track', 'stun_damage_track')
            ->first()
            ;

        $this->physical_damage = 0;
        $this->stun_damage = 0;

        $this->calculateWounds();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.damage-track');
    }

    /**
     * Actions to take when a property is updated.
     *
     * @param  string  $propertyName
     */
    public function updated($propertyName)
    {
        $this->calculateWounds();
    }

    /**
     * Determines what the wound modifier is, checking physical/stun damage
     * against the character's tracks.
     */
    public function calculateWounds()
    {
        // Get fields
        $physical_damage_track = $this->character->physical_damage_track;
        $stun_damage_track = $this->character->stun_damage_track;
        $overflow = $this->character->overflow;
        $physical_damage = empty($this->physical_damage)
            ? 0
            : $this->physical_damage
            ;
        $stun_damage = empty($this->stun_damage)
            ? 0
            : $this->stun_damage
            ;

        // Calculate overflow first
        $physical_overflow = ($physical_damage > $physical_damage_track)
            ? ($physical_damage - $physical_damage_track)
            : 0
            ;
        $stun_overflow = ($stun_damage > $stun_damage_track)
            ? ($stun_damage - $stun_damage_track)
            : 0
            ;
        $overflow_damage = ($physical_overflow + $stun_overflow);

        // Update the overflow damage as needed
        $this->overflow_damage = ($overflow_damage > $overflow)
            ? 'Ya Dead'
            : $overflow_damage
            ;

        // Limit to their tracks
        $physical_damage = ($physical_damage > $physical_damage_track)
            ? $physical_damage_track
            : $physical_damage
            ;
        $stun_damage = ($stun_damage > $stun_damage_track)
            ? $stun_damage_track
            : $stun_damage
            ;

        // Calculate the modifer
        $physical_modifier = (int) (floor($physical_damage / 3) * -1);
        $stun_modifier = (int) (floor($stun_damage / 3) * -1);

        // Update the modifier
        $this->wound_modifier = ($physical_modifier + $stun_modifier);
    }
}
