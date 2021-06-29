<?php

namespace App\Http\Livewire\Shadowrun;

use Livewire\Component;
use DiceCalc\Calc;

class Stone extends Component
{
    /**
     * The character information.
     *
     * @var array
     */
    public $characters;

    /**
     * The character who rolled.
     *
     * @var string
     */
    public $roller;

    /**
     * Calculated base dice to roll.
     *
     * @var integer
     */
    public $base_dice;

    /**
     * Calculated modifiers to the roll.
     *
     * @var integer
     */
    public $auto_modifiers;

    /**
     * Calculated total dice to roll.
     *
     * @var integer
     */
    public $dice_to_roll;

    /**
     * Calculated result.
     *
     * @var integer
     */
    public $result;

    /**
     * Actions to take when the component first loads.
     */
    public function mount()
    {
        $this->characters = [
            [
                'name' => 'Pietro',
                'initiative' => 10,
                'initiative_dice' => 3,
                'stun_monitor' => 10,
                'physical_monitor' => 10,
                'recoil_compensation' => 6,
                'clip_size' => 22,
                'edge' => 3,
                'primary_ranged_combat_skill' => 5,
                'primary_ranged_combat_attribute'  => 5,
                'intuition' => 4,
                'reaction' => 4,
                'primary_ranged_weapon_damage' => 8,
                'primary_ranged_weapon_armor_penetration' => -2,
                'armor_rating' => 8,
                'body' => 4,
            ],
            [
                'name' => 'Donkey',
                'initiative' => 8,
                'initiative_dice' => 1,
                'stun_monitor' => 8,
                'physical_monitor' => 8,
                'recoil_compensation' => 4,
                'clip_size' => 12,
                'edge' => 1,
                'primary_ranged_combat_skill' => 4,
                'primary_ranged_combat_attribute'  => 4,
                'intuition' => 4,
                'reaction' => 4,
                'primary_ranged_weapon_damage' => 8,
                'primary_ranged_weapon_armor_penetration' => -2,
                'armor_rating' => 8,
                'body' => 4,
            ],
            [
                'name' => 'Guard',
                'initiative' => 6,
                'initiative_dice' => 1,
                'stun_monitor' => 6,
                'physical_monitor' => 6,
                'recoil_compensation' => 2,
                'clip_size' => 6,
                'edge' => 1,
                'primary_ranged_combat_skill' => 4,
                'primary_ranged_combat_attribute'  => 4,
                'intuition' => 4,
                'reaction' => 4,
                'primary_ranged_weapon_damage' => 8,
                'primary_ranged_weapon_armor_penetration' => -2,
                'armor_rating' => 8,
                'body' => 4,
            ],
        ];
    }

    /**
     * Displays the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.stone')
            ->layout('layouts.guest');
    }

    /**
     * ooh
     */
    public function rollDice($character)
    {
        $this->clearRoll();

        if(array_key_exists($character, $this->characters))
        {
            $character = $this->characters[$character];
            $this->roller = $character['name'];
            $this->base_dice = ($character['primary_ranged_combat_skill'] + $character['primary_ranged_combat_attribute']);
            $this->auto_modifiers = 'net penalties lol';
            $this->dice_to_roll = 'writing code now';
            $this->result = 0;
        }
    }

    /**
     * ahh
     */
    public function clearRoll()
    {
        $this->roller = null;
        $this->base_dice = null;
        $this->auto_modifiers = null;
        $this->dice_to_roll = null;
        $this->result = null;
    }
}
