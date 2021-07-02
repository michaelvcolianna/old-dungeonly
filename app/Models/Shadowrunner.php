<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

# Skills: [name, rating]
# Primary Armor: [name, rating]
# Primary Ranged Weapon: [name, damage, damage type, accuracy, armor penetration, mode, recoil compensation, ammo]
# Primary Melee Weapon: [name, reach, damage, damage type, accuracy, armor penetration]
# Qualities: [quality, notes]
# Contacts: [name, loyalty, connection, favor, notes]
# Ranged weapons: [name, damage, accuracy, armor penetration, mode, recoil compensation, ammo]
# Melee weapons: [name, reach, damage, accuracy, armor penetration]
# Armor: [name, rating, notes]
# Cyberdeck: [name, attack, sleaze, device rating, data processing, firewall, programs, matrix condition monitor]
# Augmentations: [name, rating, notes, essence]
# Spells etc: [name, type/target, range, duration, drain]
# Gear: [name, rating]
# Powers: [name, rating, notes]

class Shadowrunner extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'skills',
        'qualities',
        'contacts',
        'ranged_weapons',
        'melee_weapons',
        'armor',
        'cyberdeck',
        'augmentations',
        'spells_preparations_rituals_complex_forms',
        'gear',
        'adept_powers_or_other_abilities',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'primary_armor' => 'array',
        'primary_ranged_weapon' => 'array',
        'primary_melee_weapon' => 'array',
        'skills' => 'array',
        'qualities' => 'array',
        'contacts' => 'array',
        'ranged_weapons' => 'array',
        'melee_weapons' => 'array',
        'armor' => 'array',
        'cyberdeck' => 'array',
        'augmentations' => 'array',
        'spells_preparations_rituals_complex_forms' => 'array',
        'gear' => 'array',
        'adept_powers_or_other_abilities' => 'array',
    ];

    /**
     * Get the user that owns the Shadowrunner.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
