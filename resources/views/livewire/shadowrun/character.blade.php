<div>
    <x-section>
        <x-slot name="title">Overview</x-slot>

        <x-field mt="0" name="character" label="Character" />

        <div
            class="mt-2"
            wire:key="field-notes"
        >
            <x-jet-label
                class="mt-2" for="notes"
                value="Notes"
            />
            <x-textarea
                id="notes" class="block mt-1 w-full" :rows="8"
                wire:model.debounce.750ms="character.notes"
            />
        </div>
    </x-section>

    <x-section>
        <x-slot name="title">Personal Data</x-slot>

        <div>
            @foreach(config('shadowrun.fields.personal_data') as $name => $field)
                <x-field
                    :mt="$loop->first ? 4 : 2" :name="$name"
                    :label="$field['label']"
                />
            @endforeach
        </div>
    </x-section>

    <x-section>
        <x-slot name="title">Attributes</x-slot>

        <div class="mt-4 grid grid-cols-2 gap-4">
            @foreach(config('shadowrun.fields.attributes') as $name => $field)
                <x-field :mt="0" :name="$name" :label="$field['label']" />
            @endforeach
        </div>
    </x-section>

    <x-section>
        <x-slot name="title">Skills</x-slot>

        @if($character->skills)
            <div class="grid grid-cols-64-18-10-pct gap-4-pct my-2">
                <div class="text-gray-800 font-bold">Skill</div>
                <div class="text-gray-800 font-bold">Rating</div>
                <div></div>
            </div>

            @foreach($character->skills as $id => $skill)
                <div
                    class="grid grid-cols-64-18-10-pct gap-4-pct my-2"
                    wire:key="skill-{{ $id }}"
                >
                    <div class="" wire:key="skill-name-{{ $id }}">
                        <x-jet-label
                            class="hidden" for="skill-name-{{ $id }}"
                            value="Skill Name"
                        />
                        <x-jet-input
                            id="skill-name-{{ $id }}" class="block mt-1 w-full"
                            type="text"
                            wire:model.debounce.750ms="character.skills.{{ $id }}.name"
                        />
                    </div>

                    <div class="" wire:key="skill-rating-{{ $id }}">
                        <x-jet-label
                            class="hidden" for="skill-rating-{{ $id }}"
                            value="Skill Rating"
                        />
                        <x-jet-input
                            id="skill-rating-{{ $id }}" type="text"
                            class="block mt-1 w-full"
                            wire:model.debounce.750ms="character.skills.{{ $id }}.rating"
                        />
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deleteSkill({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addSkill">
            Add Skill
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">IDs/Lifestyles/Currency</x-slot>

        <div>
            @foreach(config('shadowrun.fields.ids_lifestyles_currency') as $name => $field)
                <x-field
                    :mt="$loop->first ? 4 : 2" :name="$name"
                    :label="$field['label']"
                />
            @endforeach
        </div>
    </x-section>

    <x-section>
        <x-slot name="title">Core Combat Info</x-slot>

        <div class="mt-4">
            <div class="text-gray-800 font-bold">Primary Armor</div>

            <x-field name="primary_armor.name" label="Name" />
            <x-field name="primary_armor.rating" label="Rating" />
        </div>

        <div class="mt-4">
            <div class="text-gray-800 font-bold">Primary Ranged Weapon</div>

            <x-field
                name="primary_ranged_weapon.name" label="Name"
            />
            <x-field
                name="primary_ranged_weapon.damage" label="Damage"
            />
            <x-field
                name="primary_ranged_weapon.damage_type" label="Damage Type"
            />
            <x-field
                name="primary_ranged_weapon.accuracy" label="Accuracy"
            />
            <x-field
                name="primary_ranged_weapon.armor_penetration" label="AP"
            />
            <x-field
                name="primary_ranged_weapon.mode" label="Mode"
            />
            <x-field
                name="primary_ranged_weapon.recoil_compensation" label="RC"
            />
            <x-field
                name="primary_ranged_weapon.ammo" label="Ammo"
            />
        </div>

        <div class="mt-4">
            <div class="text-gray-800 font-bold">Primary Melee Weapon</div>

            <x-field
                name="primary_melee_weapon.name" label="Name"
            />
            <x-field
                name="primary_melee_weapon.reach" label="Reach"
            />
            <x-field
                name="primary_melee_weapon.damage" label="Damage"
            />
            <x-field
                name="primary_melee_weapon.damage_type" label="Damage Type"
            />
            <x-field
                name="primary_melee_weapon.accuracy" label="Accuracy"
            />
            <x-field
                name="primary_melee_weapon.armor_penetration" label="AP"
            />
        </div>
    </x-section>

    <x-section>
        <x-slot name="title">Condition Monitor</x-slot>

        <div>
            @foreach(config('shadowrun.fields.condition_monitor') as $name => $field)
                <x-field
                    :mt="$loop->first ? 4 : 2" :name="$name"
                    :label="$field['label']"
                />
            @endforeach
        </div>
    </x-section>

    <x-section>
        <x-slot name="title">Qualities</x-slot>

        @if($character->qualities)
            @foreach($character->qualities as $id => $quality)
                <div
                    class="grid grid-cols-86-10-pct gap-4-pct my-2"
                    wire:key="quality-{{ $id }}"
                >
                    <div>
                        <div
                            class="mt-4"
                            wire:key="field-quality-name-{{ $id }}"
                        >
                            <x-jet-label
                                class="mt-2" for="quality-name-{{ $id }}"
                                value="Name"
                            />
                            <x-jet-input
                                id="quality-name-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.qualities.{{ $id }}.name"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="field-quality-notes-{{ $id }}"
                        >
                            <x-jet-label
                                class="mt-2" for="quality-notes-{{ $id }}"
                                value="Notes"
                            />
                            <x-textarea
                                id="quality-notes-{{ $id }}"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.qualities.{{ $id }}.notes"
                            />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-center pt-8 text-gray-800"
                        wire:click="deleteQuality({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addQuality">
            Add Quality
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Contacts</x-slot>

        @if($character->contacts)
            @foreach($character->contacts as $id => $contact)
                <div
                    class="grid grid-cols-86-10-pct gap-4-pct my-2"
                    wire:key="contact-{{ $id }}"
                >
                    <div>
                        <div
                            class="mt-4"
                            wire:key="field-contact-name-{{ $id }}"
                        >
                            <x-jet-label
                                class="mt-2" for="contact-name-{{ $id }}"
                                value="Name"
                            />
                            <x-jet-input
                                id="contact-name-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.contacts.{{ $id }}.name"
                            />
                        </div>

                        <div
                            class="mt-4"
                            wire:key="field-contact-loyalty-{{ $id }}"
                        >
                            <x-jet-label
                                class="mt-2" for="contact-loyalty-{{ $id }}"
                                value="Loyalty"
                            />
                            <x-jet-input
                                id="contact-loyalty-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.contacts.{{ $id }}.loyalty"
                            />
                        </div>

                        <div
                            class="mt-4"
                            wire:key="field-contact-connection-{{ $id }}"
                        >
                            <x-jet-label
                                class="mt-2" for="contact-connection-{{ $id }}"
                                value="Connection"
                            />
                            <x-jet-input
                                id="contact-connection-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.contacts.{{ $id }}.connection"
                            />
                        </div>

                        <div
                            class="mt-4"
                            wire:key="field-contact-favor-{{ $id }}"
                        >
                            <x-jet-label
                                class="mt-2" for="contact-favor-{{ $id }}"
                                value="Favor"
                            />
                            <x-jet-input
                                id="contact-favor-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.contacts.{{ $id }}.favor"
                            />
                        </div>

                        <div
                            class="mt-4"
                            wire:key="field-contact-notes-{{ $id }}"
                        >
                            <x-jet-label
                                class="mt-2" for="contact-notes-{{ $id }}"
                                value="Notes"
                            />
                            <x-textarea
                                id="contact-notes-{{ $id }}"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.contacts.{{ $id }}.notes"
                            />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deleteContact({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addContact">
            Add Contact
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Ranged Weapons</x-slot>

        @if($character->ranged_weapons)
            @foreach($character->ranged_weapons as $id => $ranged_weapon)
                <div
                    class="grid grid-cols-86-10-pct gap-4-pct my-2"
                    wire:key="ranged_weapons-{{ $id }}"
                >
                    <div class="grid grid-cols-2 gap-4">
                        <div class="" wire:key="ranged_weapons-name-{{ $id }}">
                            <x-jet-label
                                for="ranged_weapons-name-{{ $id }}"
                                value="Name"
                            />
                            <x-jet-input
                                id="ranged_weapons-name-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.ranged_weapons.{{ $id }}.name"
                            />
                        </div>

                        <div
                            class=""
                            wire:key="ranged_weapons-damage-{{ $id }}"
                        >
                            <x-jet-label
                                for="ranged_weapons-damage-{{ $id }}"
                                value="Damage"
                            />
                            <x-jet-input
                                id="ranged_weapons-damage-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.ranged_weapons.{{ $id }}.damage"
                            />
                        </div>

                        <div
                            class=""
                            wire:key="ranged_weapons-accuracy-{{ $id }}"
                        >
                            <x-jet-label
                                for="ranged_weapons-accuracy-{{ $id }}"
                                value="Accuracy"
                            />
                            <x-jet-input
                                id="ranged_weapons-accuracy-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.ranged_weapons.{{ $id }}.accuracy"
                            />
                        </div>

                        <div
                            class=""
                            wire:key="ranged_weapons-armor_penetration-{{ $id }}"
                        >
                            <x-jet-label
                                for="ranged_weapons-armor_penetration-{{ $id }}"
                                value="AP"
                            />
                            <x-jet-input
                                id="ranged_weapons-armor_penetration-{{ $id }}"
                                class="block mt-1 w-full" type="text"
                                wire:model.debounce.750ms="character.ranged_weapons.{{ $id }}.armor_penetration"
                            />
                        </div>

                        <div class="" wire:key="ranged_weapons-mode-{{ $id }}">
                            <x-jet-label
                                for="ranged_weapons-mode-{{ $id }}"
                                value="Mode"
                            />
                            <x-jet-input
                                id="ranged_weapons-mode-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.ranged_weapons.{{ $id }}.mode"
                            />
                        </div>

                        <div
                            class=""
                            wire:key="ranged_weapons-recoil_compensation-{{ $id }}"
                        >
                            <x-jet-label
                                for="ranged_weapons-recoil_compensation-{{ $id }}"
                                value="RC"
                            />
                            <x-jet-input
                                id="ranged_weapons-recoil_compensation-{{ $id }}"
                                class="block mt-1 w-full" type="text"
                                wire:model.debounce.750ms="character.ranged_weapons.{{ $id }}.recoil_compensation"
                            />
                        </div>

                        <div class="" wire:key="ranged_weapons-ammo-{{ $id }}">
                            <x-jet-label
                                for="ranged_weapons-ammo-{{ $id }}"
                                value="Ammo"
                            />
                            <x-jet-input
                                id="ranged_weapons-ammo-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.ranged_weapons.{{ $id }}.ammo"
                            />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deleteRangedWeapon({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addRangedWeapon">
            Add Ranged Weapon
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Melee Weapons</x-slot>

        @if($character->melee_weapons)
            @foreach($character->melee_weapons as $id => $melee_weapon)
                <div
                    class="grid grid-cols-86-10-pct gap-4-pct my-2"
                    wire:key="melee_weapons-{{ $id }}"
                >
                    <div class="grid grid-cols-2 gap-4">
                        <div class="" wire:key="melee_weapons-name-{{ $id }}">
                            <x-jet-label
                                for="melee_weapons-name-{{ $id }}"
                                value="Name"
                            />
                            <x-jet-input
                                id="melee_weapons-name-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.melee_weapons.{{ $id }}.name"
                            />
                        </div>

                        <div
                            class=""
                            wire:key="melee_weapons-reach-{{ $id }}"
                        >
                            <x-jet-label
                                for="melee_weapons-reach-{{ $id }}"
                                value="Reach"
                            />
                            <x-jet-input
                                id="melee_weapons-reach-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.melee_weapons.{{ $id }}.reach"
                            />
                        </div>

                        <div
                            class=""
                            wire:key="melee_weapons-damage-{{ $id }}"
                        >
                            <x-jet-label
                                for="melee_weapons-damage-{{ $id }}"
                                value="Damage"
                            />
                            <x-jet-input
                                id="melee_weapons-damage-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.melee_weapons.{{ $id }}.damage"
                            />
                        </div>

                        <div
                            class=""
                            wire:key="melee_weapons-accuracy-{{ $id }}"
                        >
                            <x-jet-label
                                for="melee_weapons-accuracy-{{ $id }}"
                                value="Accuracy"
                            />
                            <x-jet-input
                                id="melee_weapons-accuracy-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.melee_weapons.{{ $id }}.accuracy"
                            />
                        </div>

                        <div
                            class=""
                            wire:key="melee_weapons-armor_penetration-{{ $id }}"
                        >
                            <x-jet-label
                                for="melee_weapons-armor_penetration-{{ $id }}"
                                value="AP"
                            />
                            <x-jet-input
                                id="melee_weapons-armor_penetration-{{ $id }}"
                                class="block mt-1 w-full" type="text"
                                wire:model.debounce.750ms="character.melee_weapons.{{ $id }}.armor_penetration"
                            />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deleteMeleeWeapon({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addMeleeWeapon">
            Add Melee Weapon
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Armor</x-slot>

        @if($character->armor)
            @foreach($character->armor as $id => $armor)
                <div
                    class="grid grid-cols-86-10-pct gap-4-pct my-2"
                    wire:key="armor-{{ $id }}"
                >
                    <div class="">
                        <div class="mt-2" wire:key="armor-name-{{ $id }}">
                            <x-jet-label
                                for="armor-name-{{ $id }}"
                                value="Name"
                            />
                            <x-jet-input
                                id="armor-name-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.armor.{{ $id }}.name"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="armor-rating-{{ $id }}"
                        >
                            <x-jet-label
                                for="armor-rating-{{ $id }}"
                                value="Rating"
                            />
                            <x-jet-input
                                id="armor-rating-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.armor.{{ $id }}.rating"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="armor-notes-{{ $id }}"
                        >
                            <x-jet-label
                                for="armor-notes-{{ $id }}"
                                value="Notes"
                            />
                            <x-textarea
                                id="armor-notes-{{ $id }}"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.armor.{{ $id }}.notes"
                            />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deleteArmor({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addArmor">
            Add Armor
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Cyberdeck</x-slot>

        <x-field name="cyberdeck.name" label="Name" />
        <x-field name="cyberdeck.attack" label="Attack" />
        <x-field name="cyberdeck.sleaze" label="Sleaze" />
        <x-field name="cyberdeck.device_rating" label="Device Rating" />
        <x-field name="cyberdeck.data_processing" label="Data Processing" />
        <x-field name="cyberdeck.firewall" label="Firewall" />

        <div
            class="mt-2"
            wire:key="cyberdeck-programs"
        >
            <x-jet-label
                for="cyberdeck-programs"
                value="Programs"
            />
            <x-textarea
                id="cyberdeck-programs" class="block mt-1 w-full" rows="3"
                wire:model.debounce.750ms="character.cyberdeck.programs"
            />
        </div>

        <x-field
            name="cyberdeck.matrix_condition_monitor"
            label="Matrix Condition Monitor"
        />
    </x-section>

    <x-section>
        <x-slot name="title">Augmentations</x-slot>

        @if($character->augmentations)
            @foreach($character->augmentations as $id => $augmentation)
                <div
                    class="grid grid-cols-86-10-pct gap-4-pct my-2"
                    wire:key="augmentations-{{ $id }}"
                >
                    <div class="">
                        <div
                            class="mt-2"
                            wire:key="augmentations-name-{{ $id }}"
                        >
                            <x-jet-label
                                for="augmentations-name-{{ $id }}"
                                value="Name"
                            />
                            <x-jet-input
                                id="augmentations-name-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.augmentations.{{ $id }}.name"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="augmentations-rating-{{ $id }}"
                        >
                            <x-jet-label
                                for="augmentations-rating-{{ $id }}"
                                value="Rating"
                            />
                            <x-jet-input
                                id="augmentations-rating-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.augmentations.{{ $id }}.rating"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="augmentations-notes-{{ $id }}"
                        >
                            <x-jet-label
                                for="augmentations-notes-{{ $id }}"
                                value="Notes"
                            />
                            <x-jet-input
                                id="augmentations-notes-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.augmentations.{{ $id }}.notes"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="augmentations-essence-{{ $id }}"
                        >
                            <x-jet-label
                                for="augmentations-essence-{{ $id }}"
                                value="Essence"
                            />
                            <x-jet-input
                                id="augmentations-essence-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.augmentations.{{ $id }}.essence"
                            />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deleteAugmentation({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addAugmentation">
            Add Augmentation
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Spells/Preparations/Rituals/Complex Forms</x-slot>

        @if($character->spells_preparations_rituals_complex_forms)
            @foreach($character->spells_preparations_rituals_complex_forms as $id => $spell)
                <div
                    class="grid grid-cols-86-10-pct gap-4-pct my-2"
                    wire:key="spells-{{ $id }}"
                >
                    <div class="">
                        <div
                            class="mt-2"
                            wire:key="spells-name-{{ $id }}"
                        >
                            <x-jet-label
                                for="spells-name-{{ $id }}"
                                value="Name"
                            />
                            <x-jet-input
                                id="spells-name-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.spells_preparations_rituals_complex_forms.{{ $id }}.name"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="augmentations-type_target-{{ $id }}"
                        >
                            <x-jet-label
                                for="augmentations-type_target-{{ $id }}"
                                value="Type/Target"
                            />
                            <x-jet-input
                                id="augmentations-type_target-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.spells_preparations_rituals_complex_forms.{{ $id }}.type_target"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="spells-range-{{ $id }}"
                        >
                            <x-jet-label
                                for="spells-range-{{ $id }}"
                                value="Range"
                            />
                            <x-jet-input
                                id="spells-range-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.spells_preparations_rituals_complex_forms.{{ $id }}.range"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="spells-duration-{{ $id }}"
                        >
                            <x-jet-label
                                for="spells-duration-{{ $id }}"
                                value="Duration"
                            />
                            <x-jet-input
                                id="spells-duration-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.spells_preparations_rituals_complex_forms.{{ $id }}.duration"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="spells-drain-{{ $id }}"
                        >
                            <x-jet-label
                                for="spells-drain-{{ $id }}"
                                value="Drain"
                            />
                            <x-jet-input
                                id="spells-drain-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.spells_preparations_rituals_complex_forms.{{ $id }}.drain"
                            />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deleteSpell({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addSpell">
            Add Entry
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Gear</x-slot>

        @if($character->gear)
            <div class="grid grid-cols-64-18-10-pct gap-4-pct my-2">
                <div class="text-gray-800 font-bold">Gear</div>
                <div class="text-gray-800 font-bold">Rating</div>
                <div></div>
            </div>

            @foreach($character->gear as $id => $gear)
                <div
                    class="grid grid-cols-64-18-10-pct gap-4-pct my-2"
                    wire:key="gear-{{ $id }}"
                >
                    <div class="" wire:key="gear-name-{{ $id }}">
                        <x-jet-label
                            class="hidden" for="gear-name-{{ $id }}"
                            value="Gear Name"
                        />
                        <x-jet-input
                            id="gear-name-{{ $id }}" class="block mt-1 w-full"
                            type="text"
                            wire:model.debounce.750ms="character.gear.{{ $id }}.name"
                        />
                    </div>

                    <div class="" wire:key="skill-gear-{{ $id }}">
                        <x-jet-label
                            class="hidden" for="gear-rating-{{ $id }}"
                            value="Gear Rating"
                        />
                        <x-jet-input
                            id="gear-rating-{{ $id }}" type="text"
                            class="block mt-1 w-full"
                            wire:model.debounce.750ms="character.gear.{{ $id }}.rating"
                        />
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deleteGear({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addGear">
            Add Gear
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Adept Powers or Other Abilities</x-slot>

        @if($character->adept_powers_or_other_abilities)
            @foreach($character->adept_powers_or_other_abilities as $id => $power)
                <div
                    class="grid grid-cols-86-10-pct gap-4-pct my-2"
                    wire:key="powers-{{ $id }}"
                >
                    <div class="">
                        <div
                            class="mt-2"
                            wire:key="powers-name-{{ $id }}"
                        >
                            <x-jet-label
                                for="powers-name-{{ $id }}"
                                value="Name"
                            />
                            <x-jet-input
                                id="powers-name-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.adept_powers_or_other_abilities.{{ $id }}.name"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="powers-rating-{{ $id }}"
                        >
                            <x-jet-label
                                for="powers-rating-{{ $id }}"
                                value="Rating"
                            />
                            <x-jet-input
                                id="powers-rating-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.adept_powers_or_other_abilities.{{ $id }}.rating"
                            />
                        </div>

                        <div
                            class="mt-2"
                            wire:key="powers-notes-{{ $id }}"
                        >
                            <x-jet-label
                                for="powers-notes-{{ $id }}"
                                value="Notes"
                            />
                            <x-jet-input
                                id="powers-notes-{{ $id }}" type="text"
                                class="block mt-1 w-full"
                                wire:model.debounce.750ms="character.adept_powers_or_other_abilities.{{ $id }}.notes"
                            />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-center text-gray-800"
                        wire:click="deletePower({{ $id }})"
                    >
                        <x-trash />
                    </div>
                </div>
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addPower">
            Add Entry
        </x-jet-button>
    </x-section>
</div>
