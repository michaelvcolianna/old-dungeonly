<div>
    <x-section>
        <x-slot name="title">Overview</x-slot>

        <x-field mt="2" name="character" label="Character" />

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
                <div class="text-gray-800 font-bold">Name</div>
                <div class="text-gray-800 font-bold">Rating</div>
                <div></div>
            </div>

            @foreach(array_keys($character->skills) as $id)
                <x-skill :id="$id" />
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
                @if($field['db'] == 'text')
                    <x-multiline
                        :mt="$loop->first ? 4 : 2" :name="$name"
                        :label="$field['label']"
                    />
                @else
                    <x-field
                        :mt="$loop->first ? 4 : 2" :name="$name"
                        :label="$field['label']"
                    />
                @endif
            @endforeach
        </div>
    </x-section>

    <x-section>
        <x-slot name="title">Core Combat Info</x-slot>

        <div class="mt-4">
            <div class="text-gray-800 font-bold">Primary Armor</div>

            @foreach(config('shadowrun.arrays.primary_armor.fields') as $name => $field)
                @if($field['rows'])
                    <x-multiline
                        :mt="$loop->first ? 4 : 2" :label="$field['label']"
                        :rows="$field['rows']"
                        name="primary_armor.{{ $name }}"
                    />
                @else
                    <x-field
                        :mt="$loop->first ? 4 : 2" :label="$field['label']"
                        name="primary_armor.{{ $name }}"
                    />
                @endif
            @endforeach
        </div>

        <div class="mt-4">
            <div class="text-gray-800 font-bold">Primary Ranged Weapon</div>

            @foreach(config('shadowrun.arrays.primary_ranged_weapon.fields') as $name => $field)
                @if($field['rows'])
                    <x-multiline
                        :mt="$loop->first ? 4 : 2" :label="$field['label']"
                        :rows="$field['rows']"
                        name="primary_ranged_weapon.{{ $name }}"
                    />
                @else
                    <x-field
                        :mt="$loop->first ? 4 : 2" :label="$field['label']"
                        name="primary_ranged_weapon.{{ $name }}"
                    />
                @endif
            @endforeach
        </div>

        <div class="mt-4">
            <div class="text-gray-800 font-bold">Primary Melee Weapon</div>

            @foreach(config('shadowrun.arrays.primary_melee_weapon.fields') as $name => $field)
                @if($field['rows'])
                    <x-multiline
                        :mt="$loop->first ? 4 : 2" :label="$field['label']"
                        :rows="$field['rows']"
                        name="primary_melee_weapon.{{ $name }}"
                    />
                @else
                    <x-field
                        :mt="$loop->first ? 4 : 2" :label="$field['label']"
                        name="primary_melee_weapon.{{ $name }}"
                    />
                @endif
            @endforeach
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
            @foreach(array_keys($character->qualities) as $id)
                <x-quality :id="$id" :border="!$loop->last" />
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addQuality">
            Add Quality
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Contacts</x-slot>

        @if($character->contacts)
            @foreach(array_keys($character->contacts) as $id)
                <x-contact :id="$id" :border="!$loop->last" />
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addContact">
            Add Contact
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Ranged Weapons</x-slot>

        @if($character->ranged_weapons)
            @foreach(array_keys($character->ranged_weapons) as $id)
                <x-ranged-weapon :id="$id" :border="!$loop->last" />
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addRangedWeapon">
            Add Ranged Weapon
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Melee Weapons</x-slot>

        @if($character->melee_weapons)
            @foreach(array_keys($character->melee_weapons) as $id)
                <x-melee-weapon :id="$id" :border="!$loop->last" />
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addMeleeWeapon">
            Add Melee Weapon
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Armor</x-slot>

        @if($character->armor)
            @foreach(array_keys($character->armor) as $id)
                <x-armor :id="$id" :border="!$loop->last" />
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addArmor">
            Add Armor
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Cyberdeck</x-slot>

        @foreach(config('shadowrun.arrays.cyberdeck.fields') as $name => $field)
            @if($field['rows'])
                <x-multiline
                    :mt="$loop->first ? 4 : 2" :label="$field['label']"
                    :rows="$field['rows']"
                    name="cyberdeck.{{ $name }}"
                />
            @else
                <x-field
                    :mt="$loop->first ? 4 : 2" :label="$field['label']"
                    name="cyberdeck.{{ $name }}"
                />
            @endif
        @endforeach
    </x-section>

    <x-section>
        <x-slot name="title">Augmentations</x-slot>

        @if($character->augmentations)
            @foreach(array_keys($character->augmentations) as $id)
                <x-augmentation :id="$id" :border="!$loop->last" />
            @endforeach
        @endif

        <x-jet-button class="mt-2" wire:click="addAugmentation">
            Add Augmentation
        </x-jet-button>
    </x-section>

    <x-section>
        <x-slot name="title">Spells/Preparations/Rituals/Complex Forms</x-slot>

        @if($character->spells_preparations_rituals_complex_forms)
            @foreach(array_keys($character->spells_preparations_rituals_complex_forms) as $id)
                <x-spell :id="$id" :border="!$loop->last" />
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
                <div class="text-gray-800 font-bold">Name</div>
                <div class="text-gray-800 font-bold">Rating</div>
                <div></div>
            </div>

            @foreach(array_keys($character->gear) as $id)
                <x-gear :id="$id" />
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
