<div class="group--{{ $this->getKey() }} mt-4">
    @if($character->{$this->getKey()})
        <table class="table-fixed">
            <thead>
                <tr>
                    @foreach($headers as $key => $label)
                        <x-shadowrun.table-head :key="$key">
                            {{ $label }}
                        </x-shadowrun.table-head>
                    @endforeach

                    <th class="header-delete"></th>
                </tr>
            </thead>

            <tbody>
                @foreach(array_keys($character->{$this->getKey()}) as $id)
                    <x-shadowrun.table-row
                        :key="$this->getKey()" :id="$id"
                        :fields="$this->getArrayFields()"
                    />
                @endforeach
            </tbody>
        </table>
    @endif

    <x-jet-button class="mt-6" wire:click="addRow">
        Add Row
    </x-jet-button>
</div>
