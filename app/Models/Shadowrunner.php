<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'user_id',
        'team_id',
        'skills',
        'primary_armor',
        'primary_ranged_weapon',
        'primary_melee_weapon',
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
        'skills' => 'array',
        'primary_armor' => 'array',
        'primary_ranged_weapon' => 'array',
        'primary_melee_weapon' => 'array',
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
     * Get the team that owns the Shadowrunner.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the user that owns the Shadowrunner.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
