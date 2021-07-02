<div>
    <div class="mt-2">
        <div class="block font-medium text-sm text-gray-700">
            Type
        </div>

        <div class="flex flex-col md:flex-row justify-start md:justify-between">
            @foreach($types as $id => $info)
                <div class="my-2" wire:key="type-field-{{ $id }}">
                    <label for="type-{{ $id }}" class="flex items-center">
                        <x-jet-input type="radio" id="type-{{ $id }}" wire:model="type" value="{{ $id }}" />
                        <span class="ml-2 text-sm text-gray-600">{{ $info['label'] }}</span>
                    </label>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-2">
        <x-jet-label for="test" value="{{ $this->getTestLabel($type) }}" />
        <x-jet-input id="test" class="block mt-1 w-full" type="number" wire:model="test" required />
    </div>

    <div class="mt-2">
        <x-jet-button class="mt-4" wire:click="roll">
            Roll (Doesn't Do Much ... Yet)
        </x-jet-button>
    </div>
</div>
