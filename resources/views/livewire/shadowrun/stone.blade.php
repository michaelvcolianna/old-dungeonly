<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @foreach($characters as $character)
                <div class="p-6 sm:px-20 bg-white border-b" wire:key="character-{{ $loop->index }}">
                    <details>
                        <summary>
                            <span class="font-semibold text-xl text-gray-800 leading-tight">{{ $character['name'] }}</span>
                        </summary>

                        <ul class="grid grid-cols-2 md:grid-cols-8 gap-4 md:gap-8">
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Initiative:</strong></strong><span>{{ $character['initiative'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Initiative Dice:</strong></strong><span>{{ $character['initiative_dice'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Stun Monitor:</strong></strong><span>{{ $character['stun_monitor'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Physical Monitor:</strong></strong><span>{{ $character['physical_monitor'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>RC:</strong></strong><span>{{ $character['recoil_compensation'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Clip Size:</strong></strong><span>{{ $character['clip_size'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Edge:</strong></strong><span>{{ $character['edge'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>PRC Skill:</strong></strong><span>{{ $character['primary_ranged_combat_skill'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>PRC Attribute:</strong></strong><span>{{ $character['primary_ranged_combat_attribute'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Intuition:</strong></strong><span>{{ $character['intuition'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Reaction:</strong></strong><span>{{ $character['reaction'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>PRW Damage:</strong></strong><span>{{ $character['primary_ranged_weapon_damage'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>PRW AP:</strong></strong><span>{{ $character['primary_ranged_weapon_armor_penetration'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Armor Rating:</strong></strong><span>{{ $character['armor_rating'] }}</span></li>
                            <li class="flex flex-row md:flex-col justify-start md:justify-end"><strong>Body:</strong></strong><span>{{ $character['body'] }}</span></li>
                        </ul>

                        <x-jet-button class="mt-4" wire:click="rollDice({{ $loop->index }})">
                            Roll (Doesn't Do Anything ... Yet)
                        </x-jet-button>
                    </details>
                </div>
            @endforeach

            <div class="p-6 sm:px-20 bg-white border-b">
                <div class="grid grid-cols-2 gap-4">
                    <div class="font-bold">Roller</div>
                    <div class="text-gray-500">{{ $roller ?? '???' }}</div>
                    <div class="font-bold">Base Dice</div>
                    <div class="text-gray-500">{{ $base_dice ?? '???' }}</div>
                    <div class="font-bold">Auto Modifiers</div>
                    <div class="text-gray-500">{{ $auto_modifiers ?? '???' }}</div>
                    <div class="font-bold">Manual Modifiers</div>
                    <div class="text-gray-500">(leaving out for now)</div>
                    <div class="font-bold">Dice to Roll</div>
                    <div class="text-gray-500">{{ $dice_to_roll ?? '???' }}</div>
                    <div class="font-bold">Result</div>
                    <div class="text-gray-500">{{ $result ?? '???' }}</div>
                </div>

                @if($result)
                    <x-jet-button class="mt-4" wire:click="clearRoll()">
                        Clear Roll
                    </x-jet-button>
                @else
                    <x-jet-button class="mt-4" disabled>
                        No Roll to Clear
                    </x-jet-button>
                @endif
            </div>
        </div>
    </div>
</div>
