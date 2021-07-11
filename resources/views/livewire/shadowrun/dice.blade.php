<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white md:grid md:grid-cols-2 md:gap-4 md:items-end md:justify-around {{ $results ? 'border-b' : '' }}">
                <div>
                    <x-jet-label for="dice" value="Number of dice" />
                    <x-jet-input wire:model.lazy="dice" id="dice" class="block mt-1 w-full" type="number" autofocus wire:keydown.enter="rollDice" />
                </div>

                <div class="mt-2 md:mt-0 justify-self-end">
                    <x-jet-button wire:click="rollDice">
                        Roll
                    </x-jet-button>
                </div>
            </div>

            @if($results)
                <div class="p-6 sm:px-20 bg-white">
                    <table class="flex md:table md:table-fixed w-full">
                        <thead>
                            <tr>
                                <th class="w-1/5 block p-4 md:p-0 md:table-cell">
                                    Dice
                                </th>

                                <th class="w-1/5 block p-4 md:p-0 md:table-cell">
                                    Successes
                                </th>

                                <th class="
                                    w-1/5 block p-4 md:p-0 md:table-cell
                                    @if($this->isRollCriticallyGlitched())
                                        text-red-500
                                    @elseif($this->isRollGlitched())
                                        text-yellow-500
                                    @endif
                                ">
                                    Glitches
                                </th>

                                <th class="w-2/5 block p-4 md:p-0 md:table-cell">
                                    Sum
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="md:border md:text-center">
                                <td class="p-4 block md:table-cell">
                                    {{ count($results) }}
                                </td>

                                <td class="p-4 block md:table-cell">
                                    {{ $success }}
                                </td>

                                <td class="
                                    p-4 block md:table-cell
                                    @if($this->isRollCriticallyGlitched())
                                        text-red-500
                                    @elseif($this->isRollGlitched())
                                        text-yellow-500
                                    @endif
                                ">
                                    {{ $glitch }}
                                </td>

                                <td class="p-4 block md:table-cell">
                                    {{ $total }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="px-6 sm:px-20 bg-white md:flex justify-end">
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
                        <x-jet-button wire:click="pushTheLimit" class="ml-2">
                            Push the Limit
                        </x-jet-button>
                    @else
                        <x-jet-button disabled class="ml-2">
                            Push the Limit
                        </x-jet-button>
                    @endif
                </div>

                <div class="p-6 sm:px-20 bg-white grid grid-cols-4 md:grid-cols-10 gap-4">
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
