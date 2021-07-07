<x-guest-layout>
    <x-slot name="header">
        <div class="flex flex-row flex-wrap items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Shadowrun Character Sheet:
                <livewire:shadowrun.character.header />
            </h2>

            <livewire:shadowrun.dice-roller />

            <livewire:shadowrun.quick-jump />
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Overview</x-slot>
                        <livewire:shadowrun.character.overview />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Personal Data</x-slot>
                        <livewire:shadowrun.character.personal-data />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Attributes</x-slot>
                        <livewire:shadowrun.character.attributes />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Skills</x-slot>
                        <livewire:shadowrun.character.skills />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">IDs/Lifestyles/Currency</x-slot>
                        <livewire:shadowrun.character.ids-lifestyles-currency />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Core Combat Info</x-slot>

                        <div class="group--core_combat_info">
                            <x-shadowrun.subsection>
                                <x-slot name="title">Primary Armor</x-slot>
                                <livewire:shadowrun.character.primary-armor />
                            </x-shadowrun.subsection>

                            <x-shadowrun.subsection>
                                <x-slot name="title">Primary Ranged Weapon</x-slot>
                                <livewire:shadowrun.character.primary-ranged-weapon />
                            </x-shadowrun.subsection>

                            <x-shadowrun.subsection>
                                <x-slot name="title">Primary Melee Weapon</x-slot>
                                <livewire:shadowrun.character.primary-melee-weapon />
                            </x-shadowrun.subsection>
                        </div>
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Condition Monitor</x-slot>

                        <div class="group--condition_monitors">
                            <x-shadowrun.subsection>
                                <x-slot name="title">Character Stats</x-slot>
                                <livewire:shadowrun.character.condition-monitor />
                            </x-shadowrun.subsection>

                            <x-shadowrun.subsection>
                                <x-slot name="title">Wounds</x-slot>
                                <livewire:shadowrun.damage-track />
                            </x-shadowrun.subsection>
                        </div>
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Qualities</x-slot>
                        <livewire:shadowrun.character.qualities />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Contacts</x-slot>
                        <livewire:shadowrun.character.contacts />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Ranged Weapons</x-slot>
                        <livewire:shadowrun.character.ranged-weapons />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Melee Weapons</x-slot>
                        <livewire:shadowrun.character.melee-weapons />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Armor</x-slot>
                        <livewire:shadowrun.character.armor />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Cyberdeck</x-slot>
                        <livewire:shadowrun.character.cyberdeck />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Augmentations</x-slot>
                        <livewire:shadowrun.character.augmentations />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Vehicle</x-slot>
                        <livewire:shadowrun.character.vehicle />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Spells/Preparations/Rituals/Complex Forms</x-slot>
                        <livewire:shadowrun.character.spells-preparations-rituals-complex-forms />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Gear</x-slot>
                        <livewire:shadowrun.character.gear />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Adept Powers or Other Abilities</x-slot>
                        <livewire:shadowrun.character.adept-powers-or-other-abilities />
                    </x-shadowrun.details>
                </x-shadowrun.section>
            </div>
        </div>
    </div>
</x-guest-layout>
