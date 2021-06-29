<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Shadowrun:
            <a class="{{ request()->routeIs('shadowrun.dice') ? 'text-gray-600' : 'text-blue-500' }} block font-normal md:inline underline md:mr-2" href="{{ route('shadowrun.dice') }}">Dice Roller</a>
            <a class="{{ request()->routeIs('shadowrun.stone') ? 'text-gray-600' : 'text-blue-500' }} block font-normal md:inline underline" href="{{ route('shadowrun.stone') }}">Stone’s Spreadsheet</a>
        </h2>
    </div>
</header>
