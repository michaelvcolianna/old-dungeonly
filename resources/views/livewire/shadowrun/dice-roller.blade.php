<div class="text-gray-800">
    <div
        class=""
        x-data="{
            open: @entangle('show_window'),
        }"
    >
        <button
            type="button" class="h-12 w-12 flex justify-center items-center"
            wire:click="$toggle('show_window')"
        >
            <span class="fixed invisible -z-1">Roll Dice</span>
            <x-shadowrun.d6 />
        </button>

        <div
            class="absolute left-0 right-0 z-10"
            x-show="open" x-on:click.away="open = false"
        >
            <div
                class="p-4 bg-white border-b shadow opacity-0"
                :class="{
                    'opacity-100' : {{ $show_window ? 'true' : 'false' }},
                }"
            >
                <div class="max-w-7xl mx-auto md:px-8 md:flex flex-row justify-start items-end">
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
                    <div class="max-w-7xl mx-auto md:px-8 py-2 md:py-4 bg-white">
                        <table class="flex md:table md:table-fixed w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="w-1/5 block pr-4 md:p-0 md:table-cell"
                                    >
                                        Dice
                                    </th>

                                    <th
                                        class="w-1/5 block pr-4 md:p-0 md:table-cell"
                                    >
                                        Successes
                                    </th>

                                    <th class="
                                        w-1/5 block pr-4 md:p-0 md:table-cell
                                        @if($this->isRollCriticallyGlitched())
                                            text-red-500
                                        @elseif($this->isRollGlitched())
                                            text-yellow-500
                                        @endif
                                    ">
                                        Glitches
                                    </th>

                                    <th
                                        class="w-2/5 block pr-4 md:p-0 md:table-cell"
                                    >
                                        Sum
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="md:border md:text-center">
                                    <td class="pl-4 md:p-4 block md:table-cell">
                                        {{ count($results) }}
                                    </td>

                                    <td class="pl-4 md:p-4 block md:table-cell">
                                        {{ $success }}
                                    </td>

                                    <td class="
                                        pl-4 md:p-4 block md:table-cell
                                        @if($this->isRollCriticallyGlitched())
                                            text-red-500
                                        @elseif($this->isRollGlitched())
                                            text-yellow-500
                                        @endif
                                    ">
                                        {{ $glitch }}
                                    </td>

                                    <td class="pl-4 md:p-4 block md:table-cell">
                                        {{ $total }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="max-w-7xl mx-auto md:px-8 px-0 sm:px-20 bg-white md:flex justify-end">
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
                                wire:click="pushTheLimit" class="ml-2"
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
                        class="max-w-7xl mx-auto md:px-8 px-0 pt-4 sm:px-20 bg-white grid grid-cols-5 md:grid-cols-10 gap-4"
                    >
                        @foreach($results as $key => $result)
                            <div wire:key="result-{{ $key }}" class="
                                border text-center h-12 flex items-center justify-center die
                                {{ ($result['edge']) ? 'border-green-400' : '' }}
                                {{ ($result['second']) ? 'second' : '' }}
                                {{ ($result['limit']) ? 'limit' : '' }}
                            ">
                                {{ $result['roll'] }}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
