<div class="group--{{ $this->getKey() }} mt-4">
    <div class="group--grid">
        @if($character->{$this->getKey()})
            @foreach(array_keys($character->{$this->getKey()}) as $id)
                <x-shadowrun.grid-row
                    :key="$this->getKey()" :id="$id" :last="$loop->last"
                    :fields="$this->getArrayFields()"
                />
            @endforeach
        @endif
    </div>

    <x-jet-button class="mt-6" wire:click="addRow">
        Add Row
    </x-jet-button>
</div>
