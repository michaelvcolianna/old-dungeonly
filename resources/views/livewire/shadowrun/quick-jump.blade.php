<div class="w-full md:w-1/3">
    <div
        x-data="{
            open: @entangle('show_results'),
            search: @entangle('search'),
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
            updateSelected(id, key, label)
            {
                this.open = false;
                this.search = label;
                this.selected = key;
                this.selectedIndex = 0;

                scrollAndAccountForHeader(key);
            },
        }"
    >
        <div
            class="relative"
            x-on:element-selected="updateSelected($event.detail.id, $event.detail.key, $event.detail.label)"
        >
            <span>
                <div class="relative">
                    <x-jet-input
                        class="block mt-4 md:mt-0 w-full quick-jump placeholder-gray-400 md:bg-transparent md:placeholder-transparent"
                        type="text" placeholder="Quick jump to section"
                        wire:model.debounce.300ms="search"
                        x-on:keydown.arrow-down.stop.prevent="selectNext()"
                        x-on:keydown.arrow-up.stop.prevent="selectPrevious()"
                        x-on:keydown.enter.stop.prevent="$dispatch('element-selected', {
                            id: $refs.results.children[selectedIndex].getAttribute('data-result-id'),
                            key: $refs.results.children[selectedIndex].getAttribute('data-result-key'),
                            label: $refs.results.children[selectedIndex].getAttribute('data-result-label')
                        })"
                    />
                    <span
                        class="absolute top-0 left-0 h-full w-full items-center text-transparent -z-1 hidden md:flex"
                    >
                        Quick jump to section (ESC to focus)
                    </span>
                </div>
            </span>

            <div
                class="absolute bg-white left-0 right-0 mt-2"
                x-show="open" x-on:click.away="open = false"
            >
                <ul
                    class="{{ $results ? 'border' : '' }} border-gray-300 flex flex-row flex-wrap md:block"
                    x-ref="results"
                >
                    @foreach($results as $index => $result)
                        <li
                            wire:key="jump-result-{{ $loop->index }}"
                            x-on:click.stop="$dispatch('element-selected', {
                                id: {{ $loop->index }},
                                key: '{{ $index }}',
                                label: '{{ $result['label'] }}'
                            })"
                            :class="{
                                'bg-gray-600': {{ $loop->index }} === selectedIndex,
                                'text-white': {{ $loop->index }} === selectedIndex,
                                'p-4': true
                            }"
                            data-result-id="{{ $loop->index }}"
                            data-result-key="{{ $index }}"
                            data-result-label="{{ $result['label'] }}"
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
</div>
