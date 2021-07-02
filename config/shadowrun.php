<?php

use Illuminate\Support\Str;

return [

    'fields' => [
        '' => [
            'character' => [
                'db' => 'string',
                'label' => 'Character',
            ],
            'notes' => [
                'db' => 'string',
                'label' => 'notes',
            ],
        ],
        'personal_data' => [
            'name_primary_alias' => [
                'db' => 'string',
                'label' => 'Name/Primary Alias',
            ],
            'metatype' => [
                'db' => 'string',
                'label' => 'Metatype',
            ],
            'ethnicity' => [
                'db' => 'string',
                'label' => 'Ethnicity',
            ],
            'age' => [
                'db' => 'string',
                'label' => 'Age',
            ],
            'sex' => [
                'db' => 'string',
                'label' => 'Sex',
            ],
            'height' => [
                'db' => 'string',
                'label' => 'Height',
            ],
            'weight' => [
                'db' => 'string',
                'label' => 'Weight',
            ],
            'street_cred' => [
                'db' => 'string',
                'label' => 'Street Cred',
            ],
            'notoriety' => [
                'db' => 'string',
                'label' => 'Notoriety',
            ],
            'public_awareness' => [
                'db' => 'string',
                'label' => 'Public Awareness',
            ],
            'karma' => [
                'db' => 'string',
                'label' => 'Karma',
            ],
            'total_karma' => [
                'db' => 'string',
                'label' => 'Total Karma',
            ],
            'misc' => [
                'db' => 'string',
                'label' => 'Misc',
            ],
        ],
        'attributes' => [
            'body' => [
                'db' => 'string',
                'label' => 'Body',
            ],
            'agility' => [
                'db' => 'string',
                'label' => 'Agility',
            ],
            'reaction' => [
                'db' => 'string',
                'label' => 'Reaction',
            ],
            'strength' => [
                'db' => 'string',
                'label' => 'Strength',
            ],
            'willpower' => [
                'db' => 'string',
                'label' => 'Willpower',
            ],
            'logic' => [
                'db' => 'string',
                'label' => 'Logic',
            ],
            'intuition' => [
                'db' => 'string',
                'label' => 'Intuition',
            ],
            'charisma' => [
                'db' => 'string',
                'label' => 'Charisma',
            ],
            'edge' => [
                'db' => 'string',
                'label' => 'Edge',
            ],
            'edge_points' => [
                'db' => 'string',
                'label' => 'Edge Points',
            ],
            'essence' => [
                'db' => 'string',
                'label' => 'Essence',
            ],
            'magic_resonance' => [
                'db' => 'string',
                'label' => 'Magic/Resonance',
            ],
            'initiative' => [
                'db' => 'string',
                'label' => 'Initiative',
            ],
            'matrix_initiative' => [
                'db' => 'string',
                'label' => 'Matrix Initiative',
            ],
            'astral_initiative' => [
                'db' => 'string',
                'label' => 'Astral Initiative',
            ],
            'composure' => [
                'db' => 'string',
                'label' => 'Composure',
            ],
            'judge_intentions' => [
                'db' => 'string',
                'label' => 'Judge Intentions',
            ],
            'memory' => [
                'db' => 'string',
                'label' => 'Memory',
            ],
            'lift_carry' => [
                'db' => 'string',
                'label' => 'Lift/Carry',
            ],
            'movement' => [
                'db' => 'string',
                'label' => 'Movement',
            ],
            'physical_limit' => [
                'db' => 'string',
                'label' => 'Physical Limit',
            ],
            'mental_limit' => [
                'db' => 'string',
                'label' => 'Mental Limit',
            ],
            'social_limit' => [
                'db' => 'string',
                'label' => 'Social Limit',
            ],
        ],
        'skills' => [
            'skills' => [
                'db' => 'json',
            ],
        ],
        'ids_lifestyles_currency' => [
            'primary_lifestyle' => [
                'db' => 'string',
                'label' => 'Primary Lifestyle',
            ],
            'nuyen' => [
                'db' => 'string',
                'label' => 'Nuyen',
            ],
            'licenses' => [
                'db' => 'string',
                'label' => 'Licenses',
            ],
            'fake_ids_related_lifestyles_funds_licenses' => [
                'db' => 'string',
                'label' => 'Fake IDs/Related Lifestyles/Funds/Licenses',
            ],
        ],
        'core_combat_info' => [
            'primary_armor' => [
                'db' => 'json',
            ],
            'primary_ranged_weapon' => [
                'db' => 'json',
            ],
            'primary_melee_weapon' => [
                'db' => 'json',
            ],
        ],
        'condition_monitor' => [
            'physical_damage_track' => [
                'db' => 'string',
                'label' => 'Physical Damage Track',
            ],
            'stun_damage_track' => [
                'db' => 'string',
                'label' => 'Stun Damage Track',
            ],
            'overflow' => [
                'db' => 'string',
                'label' => 'Overflow',
            ],
        ],
        'qualities' => [
            'qualities' => [
                'db' => 'json',
            ],
        ],
        'contacts' => [
            'contacts' => [
                'db' => 'json',
            ],
        ],
        'ranged_weapons' => [
            'ranged_weapons' => [
                'db' => 'json',
            ],
        ],
        'melee_weapons' => [
            'melee_weapons' => [
                'db' => 'json',
            ],
        ],
        'armor' => [
            'armor' => [
                'db' => 'json',
            ],
        ],
        'cyberdeck' => [
            'cyberdeck' => [
                'db' => 'json',
            ],
        ],
        'augmentations' => [
            'augmentations' => [
                'db' => 'json',
            ],
        ],
        'vehicle' => [
            'vehicle' => [
                'db' => 'json',
            ],
        ],
        'gear' => [
            'gear' => [
                'db' => 'json',
            ],
        ],
        'spells_preparations_rituals_complex_forms' => [
            'spells_preparations_rituals_complex_forms' => [
                'db' => 'json',
            ],
        ],
        'adept_powers_or_other_abilities' => [
            'adept_powers_or_other_abilities' => [
                'db' => 'json',
            ],
        ],
    ],

];
