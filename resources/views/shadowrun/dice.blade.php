<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Shadowrun Dice Roller
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-shadowrun.section>
                    <x-shadowrun.details>
                        <x-slot name="title">Roll Initiative</x-slot>

                        <livewire:shadowrun.initiative />
                    </x-shadowrun.details>
                </x-shadowrun.section>

                <div class="p-6 sm:px-20 bg-white border-b">
                    ranged combat
                </div>

                <div class="p-6 sm:px-20 bg-white border-b">
                    melee combat
                </div>

                <div class="p-6 sm:px-20 bg-white border-b">
                    spell casting
                </div>

                <div class="p-6 sm:px-20 bg-white border-b">
                    ranged defend
                </div>

                <div class="p-6 sm:px-20 bg-white">
                    melee defend
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
