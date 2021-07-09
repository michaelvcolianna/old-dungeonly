<div class="w-full md:w-1/3">
    <div
        class="relative"
        x-data="{
            open: @entangle('show_results'),
            selected: @entangle('selected'),
            selectedIndex: 0,
            selectPrevious()
            {
                if(this.selectedIndex > 0)
                {
                    this.selectedIndex = this.selectedIndex - 1;
                    this.scrollIntoView();
                }
            },
            selectNext()
            {
                if(this.selectedIndex < this.$refs.results.children.length - 1)
                {
                    this.selectedIndex = this.selectedIndex + 1;
                    this.scrollIntoView();
                }
            },
            scrollIntoView()
            {
                this.$refs.results.children[this.selectedIndex].scrollIntoView({
                    block: 'nearest',
                    behavior: 'smooth'
                });
            },
            updateSelected(id, key)
            {
                this.open = false;
                this.selected = key;
                this.selectedIndex = 0;

                scrollAndAccountForHeader(key);
            },
        }"
        x-on:element-selected="
            updateSelected($event.detail.id, $event.detail.key)
        "
    >
        <div class="relative">
            <x-jet-input
                class="
                    quick-jump block mt-4 placeholder-gray-400 w-full
                    md:bg-transparent md:mt-0 md:placeholder-transparent
                "
                type="text" placeholder="Quick jump to section"
                wire:model.debounce.300ms="search"
                x-on:keydown.arrow-down.stop.prevent="selectNext()"
                x-on:keydown.arrow-up.stop.prevent="selectPrevious()"
                x-on:keydown.enter.stop.prevent="$dispatch('element-selected', {
                    id: $refs.results.children[selectedIndex].dataset.resultId,
                    key: $refs.results.children[selectedIndex].dataset.resultKey
                })"
            />

            <span
                class="
                    absolute h-full hidden items-center left-0 text-transparent
                    top-0 w-full -z-1 md:flex
                "
            >
                Quick jump to section (ESC to focus)
            </span>
        </div>

        <div
            class="absolute bg-white left-0 mt-2 right-0"
            x-show="open" x-on:click.away="open = false"
        >
            <ul
                class="border-gray-300 flex flex-row flex-wrap md:block"
                :class="{
                    'border': {{ $results ? 'true' : 'false' }}
                }"
                x-ref="results"
            >
                @foreach($results as $index => $result)
                    <li
                        class="p-4" wire:key="jump-result-{{ $loop->index }}"
                        :class="{
                            'bg-gray-600': {{ $loop->index }} === selectedIndex,
                            'text-white': {{ $loop->index }} === selectedIndex
                        }"
                        x-on:click.stop="$dispatch('element-selected', {
                            id: {{ $loop->index }},
                            key: '{{ $index }}'
                        })"
                        data-result-id="{{ $loop->index }}"
                        data-result-key="{{ $index }}"
                    >
                        <span>
                            {{ $result['label'] }}

                            @if($result['group'])
                                <small>({{ $result['group'] }})</small>
                            @endif
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
