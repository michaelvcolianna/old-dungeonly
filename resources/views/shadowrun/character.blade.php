<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Shadowrun Character Sheet:
            <livewire:shadowrun.character.header />
        </h2>
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
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Condition Monitor</x-slot>
                        <livewire:shadowrun.character.condition-monitor />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Qualities</x-slot>
                        <livewire:shadowrun.character.qualities />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                {{-- Legacy character sheet --}}
                <livewire:shadowrun.character />
            </div>
        </div>
    </div>
</x-guest-layout>
