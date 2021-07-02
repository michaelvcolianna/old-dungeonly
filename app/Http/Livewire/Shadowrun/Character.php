<?php

namespace App\Http\Livewire\Shadowrun;

use App\Models\Shadowrunner;
use Livewire\Component;

class Character extends Component
{
    /**
     * The user's character.
     *
     * @var \App\Models\Shadowrunner
     */
    public Shadowrunner $character;

    /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        foreach(config('shadowrun.fields') as $group)
        {
            foreach($group as $name => $field)
            {
                // No validation needed
                if($field['db'] != 'json')
                {
                    $rules['character.' . $name] = 'nullable';
                }
            }
        }

        $arrays = [
            'skills',
            'skills.*.name',
            'skills.*.rating',
            'primary_armor.name',
            'primary_armor.rating',
            'primary_ranged_weapon.name',
            'primary_ranged_weapon.damage',
            'primary_ranged_weapon.damage_type',
            'primary_ranged_weapon.accuracy',
            'primary_ranged_weapon.armor_penetration',
            'primary_ranged_weapon.mode',
            'primary_ranged_weapon.recoil_compensation',
            'primary_ranged_weapon.ammo',
            'primary_melee_weapon.name',
            'primary_melee_weapon.reach',
            'primary_melee_weapon.damage',
            'primary_melee_weapon.damage_type',
            'primary_melee_weapon.accuracy',
            'primary_melee_weapon.armor_penetration',
            'qualities',
            'qualities.*.name',
            'qualities.*.notes',
            'contacts',
            'contacts.*.name',
            'contacts.*.loyalty',
            'contacts.*.connection',
            'contacts.*.favor',
            'contacts.*.notes',
            'ranged_weapons',
            'ranged_weapons.*.name',
            'ranged_weapons.*.damage',
            'ranged_weapons.*.accuracy',
            'ranged_weapons.*.armor_penetration',
            'ranged_weapons.*.mode',
            'ranged_weapons.*.recoil_compensation',
            'ranged_weapons.*.ammo',
            'melee_weapons',
            'melee_weapons.*.name',
            'melee_weapons.*.reach',
            'melee_weapons.*.damage',
            'melee_weapons.*.accuracy',
            'melee_weapons.*.armor_penetration',
            'armor',
            'armor.*.name',
            'armor.*.rating',
            'armor.*.notes',
            'cyberdeck.name',
            'cyberdeck.attack',
            'cyberdeck.sleaze',
            'cyberdeck.device_rating',
            'cyberdeck.data_processing',
            'cyberdeck.firewall',
            'cyberdeck.programs',
            'cyberdeck.matrix_condition_monitor',
            'augmentations',
            'augmentations.*.name',
            'augmentations.*.rating',
            'augmentations.*.notes',
            'augmentations.*.essence',
            'spells_preparations_rituals_complex_forms',
            'spells_preparations_rituals_complex_forms.*.name',
            'spells_preparations_rituals_complex_forms.*.type_target',
            'spells_preparations_rituals_complex_forms.*.range',
            'spells_preparations_rituals_complex_forms.*.duration',
            'spells_preparations_rituals_complex_forms.*.drain',
            'gear',
            'gear.*.name',
            'gear.*.rating',
            'adept_powers_or_other_abilities',
            'adept_powers_or_other_abilities.*.name',
            'adept_powers_or_other_abilities.*.rating',
            'adept_powers_or_other_abilities.*.notes',
        ];
        foreach($arrays as $name)
        {
            $rules['character.' . $name] = 'nullable';
        }

        return $rules;
    }

    /**
     * Actions to take when the component is loaded.
     */
    public function mount()
    {
        $this->character = auth()->user()->shadowrunners()->first();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.character');
    }

    /**
     * Actions to take when a property is updated.
     */
    public function updated($propertyName)
    {
        $this->character->save();

        if($propertyName == 'character.character')
        {
            $this->emit('characterNameUpdated');
        }
    }

    /**
     * Adds a new skill row.
     */
    public function addSkill()
    {
        $skills = $this->character->skills ?? [];

        $skills[] = [
            'name' => null,
            'rating' => null,
        ];

        $this->character->update([
            'skills' => $skills,
        ]);
    }

    /**
     * Removes a skill row.
     *
     * @param  integer  $id
     */
    public function deleteSkill($id)
    {
        $skills = $this->character->skills;

        if(count($skills) > 1)
        {
            $skills = array_splice($skills, ($id - 1), 1);
        }
        else
        {
            $skills = [];
        }

        $this->character->update([
            'skills' => $skills,
        ]);
    }

    /**
     * Adds a new quality row.
     */
    public function addQuality()
    {
        $qualities = $this->character->qualities ?? [];

        $qualities[] = [
            'name' => null,
            'notes' => null,
        ];

        $this->character->update([
            'qualities' => $qualities,
        ]);
    }

    /**
     * Removes a quality row.
     *
     * @param  integer  $id
     */
    public function deleteQuality($id)
    {
        $qualities = $this->character->qualities;

        if(count($qualities) > 1)
        {
            $qualities = array_splice($qualities, ($id - 1), 1);
        }
        else
        {
            $qualities = [];
        }

        $this->character->update([
            'qualities' => $qualities,
        ]);
    }

    /**
     * Adds a new contact row.
     */
    public function addContact()
    {
        $contacts = $this->character->contacts ?? [];

        $contacts[] = [
            'name' => null,
            'loyalty' => null,
            'connection' => null,
            'favor' => null,
            'notes' => null,
        ];

        $this->character->update([
            'contacts' => $contacts,
        ]);
    }

    /**
     * Removes a contact row.
     *
     * @param  integer  $id
     */
    public function deleteContact($id)
    {
        $contacts = $this->character->contacts;

        if(count($contacts) > 1)
        {
            $contacts = array_splice($contacts, ($id - 1), 1);
        }
        else
        {
            $contacts = [];
        }

        $this->character->update([
            'contacts' => $contacts,
        ]);
    }

    /**
     * Adds a new ranged weapon row.
     */
    public function addRangedWeapon()
    {
        $ranged_weapons = $this->character->ranged_weapons ?? [];

        $ranged_weapons[] = [
            'name' => null,
            'damage' => null,
            'accuracy' => null,
            'armor_penetration' => null,
            'mode' => null,
            'recoil_compensation' => null,
            'ammo' => null,
        ];

        $this->character->update([
            'ranged_weapons' => $ranged_weapons,
        ]);
    }

    /**
     * Removes a ranged weapon row.
     *
     * @param  integer  $id
     */
    public function deleteRangedWeapon($id)
    {
        $ranged_weapons = $this->character->ranged_weapons;

        if(count($ranged_weapons) > 1)
        {
            $ranged_weapons = array_splice($ranged_weapons, ($id - 1), 1);
        }
        else
        {
            $ranged_weapons = [];
        }

        $this->character->update([
            'ranged_weapons' => $ranged_weapons,
        ]);
    }

    /**
     * Adds a new melee weapon row.
     */
    public function addMeleeWeapon()
    {
        $melee_weapons = $this->character->melee_weapons ?? [];

        $melee_weapons[] = [
            'name' => null,
            'reach' => null,
            'damage' => null,
            'accuracy' => null,
            'armor_penetration' => null,
        ];

        $this->character->update([
            'melee_weapons' => $melee_weapons,
        ]);
    }

    /**
     * Removes a melee weapon row.
     *
     * @param  integer  $id
     */
    public function deleteMeleeWeapon($id)
    {
        $melee_weapons = $this->character->melee_weapons;

        if(count($melee_weapons) > 1)
        {
            $melee_weapons = array_splice($melee_weapons, ($id - 1), 1);
        }
        else
        {
            $melee_weapons = [];
        }

        $this->character->update([
            'melee_weapons' => $melee_weapons,
        ]);
    }

    /**
     * Adds a new armor row.
     */
    public function addArmor()
    {
        $armor = $this->character->armor ?? [];

        $armor[] = [
            'name' => null,
            'rating' => null,
            'notes' => null,
        ];

        $this->character->update([
            'armor' => $armor,
        ]);
    }

    /**
     * Removes an armor row.
     *
     * @param  integer  $id
     */
    public function deleteArmor($id)
    {
        $armor = $this->character->armor;

        if(count($armor) > 1)
        {
            $armor = array_splice($armor, ($id - 1), 1);
        }
        else
        {
            $armor = [];
        }

        $this->character->update([
            'armor' => $armor,
        ]);
    }

    /**
     * Adds a new augmentation row.
     */
    public function addAugmentation()
    {
        $augmentations = $this->character->augmentations ?? [];

        $augmentations[] = [
            'name' => null,
            'rating' => null,
            'notes' => null,
            'essence' => null,
        ];

        $this->character->update([
            'augmentations' => $augmentations,
        ]);
    }

    /**
     * Removes an augmentation row.
     *
     * @param  integer  $id
     */
    public function deleteAugmentation($id)
    {
        $augmentations = $this->character->augmentations;

        if(count($augmentations) > 1)
        {
            $augmentations = array_splice($augmentations, ($id - 1), 1);
        }
        else
        {
            $augmentations = [];
        }

        $this->character->update([
            'augmentations' => $augmentations,
        ]);
    }

    /**
     * Adds a new spell row.
     */
    public function addSpell()
    {
        $spells = $this->character->spells_preparations_rituals_complex_forms ?? [];

        $spells[] = [
            'name' => null,
            'type_target' => null,
            'range' => null,
            'duration' => null,
            'drain' => null,
        ];

        $this->character->update([
            'spells_preparations_rituals_complex_forms' => $spells,
        ]);
    }

    /**
     * Removes a spell row.
     *
     * @param  integer  $id
     */
    public function deleteSpell($id)
    {
        $spells = $this->character->spells_preparations_rituals_complex_forms;

        if(count($spells) > 1)
        {
            $spells = array_splice($spells, ($id - 1), 1);
        }
        else
        {
            $spells = [];
        }

        $this->character->update([
            'spells_preparations_rituals_complex_forms' => $spells,
        ]);
    }

    /**
     * Adds a new gear row.
     */
    public function addGear()
    {
        $gear = $this->character->gear ?? [];

        $gear[] = [
            'name' => null,
            'rating' => null,
        ];

        $this->character->update([
            'gear' => $gear,
        ]);
    }

    /**
     * Removes a gear row.
     *
     * @param  integer  $id
     */
    public function deleteGear($id)
    {
        $gear = $this->character->gear;

        if(count($gear) > 1)
        {
            $gear = array_splice($gear, ($id - 1), 1);
        }
        else
        {
            $gear = [];
        }

        $this->character->update([
            'gear' => $gear,
        ]);
    }

    /**
     * Adds a new power row.
     */
    public function addPower()
    {
        $powers = $this->character->adept_powers_or_other_abilities ?? [];

        $powers[] = [
            'name' => null,
            'rating' => null,
            'notes' => null,
        ];

        $this->character->update([
            'adept_powers_or_other_abilities' => $powers,
        ]);
    }

    /**
     * Removes a power row.
     *
     * @param  integer  $id
     */
    public function deletePower($id)
    {
        $powers = $this->character->adept_powers_or_other_abilities;

        if(count($powers) > 1)
        {
            $powers = array_splice($powers, ($id - 1), 1);
        }
        else
        {
            $powers = [];
        }

        $this->character->update([
            'adept_powers_or_other_abilities' => $powers,
        ]);
    }
}
