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

    /*
     |-------------------------------------------------------------------------
     | Skill Group Specifications
     |-------------------------------------------------------------------------
     |
     | This options defines the skill groups and their sub-skills. p90
     |
     */
    'skill_groups' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Skill Specifications
    |--------------------------------------------------------------------------
    |
    | This option defines the skills, whether they can default, their linked
    | attributes, and their specializations.
    |
    */
    'skills' => [
        'archery' => [
            'label' => 'Archery',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'bow' => 'Bow',
                'crossbow' => 'Crossbow',
                'nonstandard_ammunition' => 'Non-Standard Ammunition',
                'slingshot' => 'Slingshot',
            ],
        ],
        'automatics' => [
            'label' => 'Automatics',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'assault_rifles' => 'Assault Rifles',
                'cyber_implant' => 'Cyber-Implant',
                'machine_pistols' => 'Machine Pistols',
                'submachine_guns' => 'Submachine Guns',
            ],
        ],
        'blades' => [
            'label' => 'Blades',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'axes' => 'Axes',
                'knives' => 'Knives',
                'swords' => 'Swords',
                'parrying' => 'Parrying',
            ],
        ],
        'clubs' => [
            'label' => 'Clubs',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'batons' => 'Batons',
                'hammers' => 'Hammers',
                'saps' => 'Saps',
                'staves' => 'Staves',
                'parrying' => 'Parrying',
            ],
        ],
        'exotic_ranged_weapon' => [
            'label' => 'Exotic Ranged Weapon',
            'attribute' => 'agility',
            'default' => false,
            'specializations' => [],
        ],
        'heavy_weapons' => [
            'label' => 'Heavy Weapons',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'assault_cannons' => 'Assault Cannons',
                'grenade_launchers' => 'Grenade Launchers',
                'guided_missiles' => 'Guided Missiles',
                'machine_guns' => 'Machine Guns',
                'rocket_launchers' => 'Rocket Launchers',
            ],
        ],
        'longarms' => [
            'label' => 'Longarms',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'extended_range_shots' => 'Extended-Range Shots',
                'long_range_shots' => 'Long-Range Shots',
                'shotguns' => 'Shotguns',
                'sniper_rifles' => 'Sniper Rifles',
            ],
        ],
        'pistols' => [
            'label' => 'Pistols',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'holdouts' => 'Holdouts',
                'revolvers' => 'Revolvers',
                'semi_automatics' => 'Semi-Automatics',
                'tasers' => 'Tasers',
            ],
        ],
        'throwing_weapons' => [
            'label' => 'Throwing Weapons',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'aerodynamic' => 'Aerodynamic',
                'blades' => 'Blades',
                'non_aerodynamic' => 'Non-Aerodynamic',
            ],
        ],
        'unarmed_combat' => [
            'label' => 'Unarmed Combat',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'blocking' => 'Blocking',
                'cyber_implants' => 'Cyber Implants',
                'subduing_combat' => 'Subduing Combat',
                'martial_art' => 'Martial Art',
            ],
        ],
        'disguise' => [
            'label' => 'Disguise',
            'attribute' => 'intution',
            'default' => true,
            'specializations' => [
                'camouflage' => 'Camouflage',
                'cosmetic' => 'Cosmetic',
                'theatrical' => 'Theatrical',
                'trideo_video' => 'Trideo & Video',
            ],
        ],
        'diving' => [
            'label' => 'Diving',
            'attribute' => 'body',
            'default' => true,
            'specializations' => [
                'apparatus' => 'By apparatus',
                'condition' => 'By condition',
                'controlled_hyperventilation' => 'Controlled Hyperventilation',
            ],
        ],
        'escape_artist' => [
            'label' => 'Escape Artists',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                'restraint' => 'By restraint',
                'contortionism' => 'Contortionism',
            ],
        ],
        'free_fall' => [
            'label' => 'Free-Fall',
            'attribute' => 'body',
            'default' => true,
            'specializations' => [
                'base_jumping' => 'BASE Jumping',
                'break_fall' => 'Break-Fall',
                'bungee' => 'Bungee',
                'halo' => 'HALO',
                'low_altitude' => 'Low Altitude',
                'parachute' => 'Parachute',
                'static_line' => 'Static Line',
                'wingsuit' => 'Wing Suit',
                'zipline' => 'Zipline',
            ],
        ],
        'gymnastics' => [
            'label' => 'Automatics',
            'attribute' => 'agility',
            'default' => true,
            'specializations' => [
                //
            ],
        ],
    ],
];
