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

                {{-- Legacy character sheet --}}
                <livewire:shadowrun.character />
            </div>
        </div>
    </div>
</x-guest-layout>
