<div class="text-gray-800">
    <div
        x-data="{
            open: @entangle('show_window'),
        }"
    >
        <button
            class="flex h-12 items-center justify-center w-12"
            type="button" wire:click="$toggle('show_window')"
        >
            <span class="fixed invisible -z-1">Roll Dice</span>
            <x-shadowrun.d6 />
        </button>

        <div
            class="absolute left-0 right-0 z-10"
            x-show="open" x-on:click.away="open = false"
        >
            <div
                class="bg-white border-b shadow opacity-0 p-4"
                :class="{
                    'opacity-100' : {{ $show_window ? 'true' : 'false' }},
                }"
            >
                <div
                    class="
                        flex-row items-end justify-start max-w-7xl mx-auto
                        md:flex md:px-8
                    "
                >
                    <div>
                        <x-jet-label for="dice" value="Number of dice" />
                        <x-jet-input
                            wire:model.lazy="dice" id="dice" type="number"
                            class="block mt-1 w-full" min="0"
                            wire:keydown.enter="rollDice"
                        />
                    </div>

                    <div class="mt-2 md:mt-0 md:ml-4 justify-self-end">
                        <x-jet-button wire:click="rollDice">
                            Roll
                        </x-jet-button>
                    </div>
                </div>

                @if($results)
                    <div
                        class="bg-white max-w-7xl mx-auto py-2 md:px-8 md:py-4"
                    >
                        <table class="flex w-full md:table md:table-fixed">
                            <thead>
                                <tr>
                                    <th
                                        class="
                                            block pr-4 w-1/5 md:p-0
                                            md:table-cell
                                        "
                                    >
                                        Dice
                                    </th>

                                    <th
                                        class="
                                            block pr-4 w-1/5 md:p-0
                                            md:table-cell
                                        "
                                    >
                                        Successes
                                    </th>

                                    <th class="
                                        block pr-4 w-1/5 md:p-0 md:table-cell
                                        {{ $this->cellClass() }}
                                        "
                                    >
                                        Glitches
                                    </th>

                                    <th
                                        class="
                                            block pr-4 w-2/5 md:p-0
                                            md:table-cell
                                        "
                                    >
                                        Sum
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="md:border md:text-center">
                                    <td class="block pl-4 md:p-4 md:table-cell">
                                        {{ count($results) }}
                                    </td>

                                    <td class="block pl-4 md:p-4 md:table-cell">
                                        {{ $success }}
                                    </td>

                                    <td class="
                                        block pl-4 md:p-4 md:table-cell
                                        {{ $this->cellClass() }}
                                    ">
                                        {{ $glitch }}
                                    </td>

                                    <td class="block pl-4 md:p-4 md:table-cell">
                                        {{ $total }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div
                        class="
                            bg-white justify-end max-w-7xl mx-auto px-0 sm:px-20
                            md:flex md:px-8
                        "
                    >
                        @if(!$limit && !$reroll && !$this->isRollGlitched())
                            <x-jet-button wire:click="secondChance">
                                Second Chance
                            </x-jet-button>
                        @else
                            <x-jet-button disabled>
                                Second Chance
                            </x-jet-button>
                        @endif

                        @if($this->canRollEdge() && !$reroll)
                            <x-jet-button
                                class="ml-2" wire:click="pushTheLimit"
                            >
                                Push the Limit
                            </x-jet-button>
                        @else
                            <x-jet-button disabled class="ml-2">
                                Push the Limit
                            </x-jet-button>
                        @endif
                    </div>

                    <div
                        class="
                            bg-white gap-4 grid grid-cols-5 max-w-7xl mx-auto
                            px-0 pt-4 sm:px-20 md:grid-cols-10 md:px-8
                        "
                    >
                        @foreach($results as $key => $result)
                            <div
                                class="
                                    die border flex h-12 items-center
                                    justify-center text-center
                                "
                                :class="{
                                    'border-green-400': {{ $result['edge'] ? 'true' : 'false' }},
                                    'limit': {{ $result['limit'] ? 'true' : 'false' }},
                                    'second': {{ $result['second'] ? 'true' : 'false' }}
                                }"
                            >
                                {{ $result['roll'] }}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
