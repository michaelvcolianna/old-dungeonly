<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

# Skills: [skill, rtg, type]
# Qualities: [quality, notes, type]
# Contacts: [name, loyalty, connection, favor]
# Ranged weapons: [name, dam, acc, ap, mode, rc, ammo]
# Melee weapons: [name, reach, dam, acc, ap]
# Armor: [name, rating, notes]
# Augmentations: [name, rating, notes, essence]
# Spells etc: [name, type/target, range, duration, drain]
# Gear: [name, rating]
# Powers: [name, rating, notes]

class Shadowrun extends Model
{
    use HasFactory;
    use SoftDeletes;
}
