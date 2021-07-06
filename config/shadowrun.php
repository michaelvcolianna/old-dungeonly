<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Overall Field Definitions
    |--------------------------------------------------------------------------
    |
    | This option defines how each field is set up in the database. If a field
    | isn't JSON (array), it also provides the HTML label text. It also sets the
    | number of rows for a textarea field.
    |
    */

    'groups' => [
        'overview' => 'Overview',
        'personal_data' => 'Personal Data',
        'attributes' => 'Attributes',
        'ids_lifestyles_currency' => 'IDs/Lifestyles/Currency',
        'core_combat_info' => 'Core Combat Info',
        'condition_monitor' => 'Condition Monitor',
    ],

    'fields' => [
        'overview' => [
            'character' => [
                'db' => 'string',
                'label' => 'Character',
            ],
            'notes' => [
                'db' => 'text',
                'label' => 'Notes',
                'rows' => 8,
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
                'label' => 'Skills',
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
                'db' => 'text',
                'label' => 'Fake IDs/Related Lifestyles/Funds/Licenses',
                'rows' => 2,
            ],
        ],
        'core_combat_info' => [
            'primary_armor' => [
                'db' => 'json',
                'label' => 'Primary Armor',
            ],
            'primary_ranged_weapon' => [
                'db' => 'json',
                'label' => 'Primary Ranged Weapon',
            ],
            'primary_melee_weapon' => [
                'db' => 'json',
                'label' => 'Primary Melee Weapon',
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
                'label' => 'Qualities',
            ],
        ],
        'contacts' => [
            'contacts' => [
                'db' => 'json',
                'label' => 'Contacts',
            ],
        ],
        'ranged_weapons' => [
            'ranged_weapons' => [
                'db' => 'json',
                'label' => 'Ranged Weapons',
            ],
        ],
        'melee_weapons' => [
            'melee_weapons' => [
                'db' => 'json',
                'label' => 'Melee Weapons',
            ],
        ],
        'armor' => [
            'armor' => [
                'db' => 'json',
                'label' => 'Armor',
            ],
        ],
        'cyberdeck' => [
            'cyberdeck' => [
                'db' => 'json',
                'label' => 'Cyberdeck',
            ],
        ],
        'augmentations' => [
            'augmentations' => [
                'db' => 'json',
                'label' => 'Augmentations',
            ],
        ],
        'vehicle' => [
            'vehicle' => [
                'db' => 'json',
                'label' => 'Vehicle',
            ],
        ],
        'gear' => [
            'gear' => [
                'db' => 'json',
                'label' => 'Gear',
            ],
        ],
        'spells_preparations_rituals_complex_forms' => [
            'spells_preparations_rituals_complex_forms' => [
                'db' => 'json',
                'label' => 'Spells/Preparations/Rituals/Complex Forms',
            ],
        ],
        'adept_powers_or_other_abilities' => [
            'adept_powers_or_other_abilities' => [
                'db' => 'json',
                'label' => 'Adept Powers or Other Abilities',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Array Field Specifications
    |--------------------------------------------------------------------------
    |
    | This option defines the fields used in each of the JSON (array) columns,
    | as well as whether it's a normal or multidimensional (repeater) array.
    |
    */

    'arrays' => [
        'skills' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'rating' => [
                    'rows' => false,
                    'label' => 'Rating',
                ],
            ],
        ],
        'primary_armor' => [
            'repeats' => false,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'rating' => [
                    'rows' => false,
                    'label' => 'Rating',
                ],
            ],
        ],
        'primary_ranged_weapon' => [
            'repeats' => false,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'damage' => [
                    'rows' => false,
                    'label' => 'Damage',
                ],
                'damage_type' => [
                    'rows' => false,
                    'label' => 'Damage Type',
                ],
                'accuracy' => [
                    'rows' => false,
                    'label' => 'Accuracy',
                ],
                'armor_penetration' => [
                    'rows' => false,
                    'label' => 'AP',
                ],
                'mode' => [
                    'rows' => false,
                    'label' => 'Mode',
                ],
                'recoil_compensation' => [
                    'rows' => false,
                    'label' => 'RC',
                ],
                'ammo' => [
                    'rows' => false,
                    'label' => 'Ammo',
                ],
            ],
        ],
        'primary_melee_weapon' => [
            'repeats' => false,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'reach' => [
                    'rows' => false,
                    'label' => 'Reach',
                ],
                'damage' => [
                    'rows' => false,
                    'label' => 'Damage',
                ],
                'damage_type' => [
                    'rows' => false,
                    'label' => 'Damage Type',
                ],
                'accuracy' => [
                    'rows' => false,
                    'label' => 'Accuracy',
                ],
                'armor_penetration' => [
                    'rows' => false,
                    'label' => 'AP',
                ],
            ],
        ],
        'qualities' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'notes' => [
                    'rows' => 2,
                    'label' => 'Notes',
                ],
            ],
        ],
        'contacts' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'loyalty' => [
                    'rows' => false,
                    'label' => 'Loyalty',
                ],
                'connection' => [
                    'rows' => false,
                    'label' => 'Connection',
                ],
                'favor' => [
                    'rows' => false,
                    'label' => 'Favor',
                ],
                'notes' => [
                    'rows' => 2,
                    'label' => 'Notes',
                ],
            ],
        ],
        'ranged_weapons' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'damage' => [
                    'rows' => false,
                    'label' => 'Damage',
                ],
                'accuracy' => [
                    'rows' => false,
                    'label' => 'Accuracy',
                ],
                'armor_penetration' => [
                    'rows' => false,
                    'label' => 'AP',
                ],
                'mode' => [
                    'rows' => false,
                    'label' => 'Mode',
                ],
                'recoil_compensation' => [
                    'rows' => false,
                    'label' => 'RC',
                ],
                'ammo' => [
                    'rows' => false,
                    'label' => 'Ammo',
                ],
            ],
        ],
        'melee_weapons' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'reach' => [
                    'rows' => false,
                    'label' => 'Reach',
                ],
                'damage' => [
                    'rows' => false,
                    'label' => 'Damage',
                ],
                'accuracy' => [
                    'rows' => false,
                    'label' => 'Accuracy',
                ],
                'armor_penetration' => [
                    'rows' => false,
                    'label' => 'AP',
                ],
            ],
        ],
        'armor' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'rating' => [
                    'rows' => false,
                    'label' => 'Rating',
                ],
                'notes' => [
                    'rows' => 2,
                    'label' => 'Notes',
                ],
            ],
        ],
        'cyberdeck' => [
            'repeats' => false,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'attack' => [
                    'rows' => false,
                    'label' => 'Attack',
                ],
                'sleaze' => [
                    'rows' => false,
                    'label' => 'Sleaze',
                ],
                'device_rating' => [
                    'rows' => false,
                    'label' => 'Device Rating',
                ],
                'data_processing' => [
                    'rows' => false,
                    'label' => 'Data Processing',
                ],
                'firewall' => [
                    'rows' => false,
                    'label' => 'Firewall',
                ],
                'matrix_condition_monitor' => [
                    'rows' => false,
                    'label' => 'Matrix Condition Monitor',
                ],
                'programs' => [
                    'rows' => 3,
                    'label' => 'Programs',
                ],
            ],
        ],
        'augmentations' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'rating' => [
                    'rows' => false,
                    'label' => 'Rating',
                ],
                'essence' => [
                    'rows' => false,
                    'label' => 'Essence',
                ],
                'notes' => [
                    'rows' => 2,
                    'label' => 'Notes',
                ],
            ],
        ],
        'vehicle' => [
            'repeats' => false,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'handling' => [
                    'rows' => false,
                    'label' => 'Handling',
                ],
                'acceleration' => [
                    'rows' => false,
                    'label' => 'Acceleration',
                ],
                'speed' => [
                    'rows' => false,
                    'label' => 'Speed',
                ],
                'pilot' => [
                    'rows' => false,
                    'label' => 'Pilot',
                ],
                'body' => [
                    'rows' => false,
                    'label' => 'Body',
                ],
                'armor' => [
                    'rows' => false,
                    'label' => 'Armor',
                ],
                'sensor' => [
                    'rows' => false,
                    'label' => 'Sensor',
                ],
                'notes' => [
                    'rows' => 2,
                    'label' => 'Notes',
                ],
            ],
        ],
        'gear' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'rating' => [
                    'rows' => false,
                    'label' => 'Rating',
                ],
            ],
        ],
        'spells_preparations_rituals_complex_forms' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'type_target' => [
                    'rows' => false,
                    'label' => 'Type/Target',
                ],
                'range' => [
                    'rows' => false,
                    'label' => 'Range',
                ],
                'duration' => [
                    'rows' => false,
                    'label' => 'Duration',
                ],
                'drain' => [
                    'rows' => false,
                    'label' => 'Drain',
                ],
            ],
        ],
        'adept_powers_or_other_abilities' => [
            'repeats' => true,
            'fields' => [
                'name' => [
                    'rows' => false,
                    'label' => 'Name',
                ],
                'rating' => [
                    'rows' => false,
                    'label' => 'Rating',
                ],
                'notes' => [
                    'rows' => 2,
                    'label' => 'Notes',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Core Combat Info Fields List
    |--------------------------------------------------------------------------
    |
    | This option defines the fields in the special core combat group.
    |
    */
    'core_combat' => [
        'primary_armor',
        'primary_ranged_weapon',
        'primary_melee_weapon',
    ],

    /*
    |--------------------------------------------------------------------------
    | Special Fields List
    |--------------------------------------------------------------------------
    |
    | This option defines the fields that are special overall.
    |
    */
    'special' => [
        'primary_armor',
        'primary_ranged_weapon',
        'primary_melee_weapon',
        'cyberdeck',
        'vehicle',
    ],

    /*
    |--------------------------------------------------------------------------
    | Damage Tracker Field Specifications
    |--------------------------------------------------------------------------
    |
    | This option defines the fields used in the damage tracker component and
    | its associated view.
    |
    */
    'damage_tracker' => [
        'physical_damage' => [
            'label' => 'Physical Damage Taken',
            'disabled' => false,
        ],
        'stun_damage' => [
            'label' => 'Stun Damage Taken',
            'disabled' => false,
        ],
        'wound_modifier' => [
            'label' => 'Wound Modifier',
            'disabled' => true,
        ],
        'overflow_damage' => [
            'label' => 'Overflow Damage',
            'disabled' => true,
        ],
    ],

];
