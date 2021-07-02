@props(['final' => false])

<div class="p-6 sm:px-20 bg-white {{ $final ? '' : 'border-b' }}">
    @if(isset($title))
        <div class="font-semibold text-lg text-gray-800 leading-tight">
            {{ $title }}
        </div>
    @endif

    {{ $slot }}
</div>
