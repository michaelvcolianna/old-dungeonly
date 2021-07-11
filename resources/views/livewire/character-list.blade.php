<div class="character-list">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Your Characters (Currently Only Shadowrun)

        @if(!$characters->isEmpty())
            <small class="block font-normal mt-4">
                Tap/click to view. (If you use the link in the nav, it will load
                the character you were last viewing.)
            </small>
        @endif
    </h2>

    <ul class="gap-4 grid grid-cols-1 my-4">
        @forelse($characters as $character)
            <li
                class="
                    border border-gray-200 cursor-pointer flex-row flex-wrap
                    items-start justify-between p-4 rounded-lg shadow md:flex
                "
                wire:click="loadCharacter({{ $character->id }})"
            >
                <div class="font-normal text-gray-700 text-sm">
                    <span class="font-semibold">Name:</span>
                    {{ $character->character ?? '???' }}
                </div>

                <div class="font-normal text-gray-700 text-sm">
                    <span class="font-semibold">Game:</span>
                    Shadowrun
                </div>

                <div class="font-normal text-gray-700 text-sm">
                    <span class="font-semibold">Campaign:</span>
                    {{ $character->team->name }}
                </div>

                <div
                    class="font-normal italic mt-2 text-gray-500 text-xs w-full"
                >
                    {{ $this->limitedNotes($character->notes) }}
                </div>
            </li>
        @empty
            <li class="italic mt-4 text-lg">
                You don't have any characters yet.
            </li>
        @endforelse
    </ul>
</div>
