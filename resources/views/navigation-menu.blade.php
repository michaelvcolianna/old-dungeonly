<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <svg class="block h-9 w-auto" fill="none" viewBox="0 0 281.58 265.6" xmlns="http://www.w3.org/2000/svg"><path fill="#ef3b2d" d="M95.22,0A5.77,5.77,0,0,0,94,.13c-4.25.67-6.4,5-9.5,9.12C81,57.16,76,101,72.5,149c14.69-1.1,34.89-.87,55.63-1.15,22.56-.31,44.54-1.85,55.31-5.75,22.18-8,39.3-28.39,53.59-58.63C193.09,56.72,145.79,24.92,105.22,3.22c-3.52-1.47-7-3.28-10-3.22ZM76.09,19.6C49.82,69.28,26.57,109.94.06,160.51c-.51,13.58,2.17,21.4,5.6,26.37s6.55,6.27,11.15,6c6.65-2.2,15-8.12,23.63-15.59,3.27-2.92,24.23-21.11,26-25.13,3.29-45,6.31-87.31,9.62-132.53Zm75,2.37c32,19.85,62.56,39.8,90.4,56.28,8.32,4.93,24.1,10.77,36,14.31a144.92,144.92,0,0,0-38.75-28.5L151.12,22ZM130.75,40.5a17.86,17.86,0,0,1,9.59,2.69q9.51,5.52,17.66,22.22,7.62,15.6,5.75,28.87t-12.66,19.88a32.91,32.91,0,0,1-6.18,3l-7.16,1.81-4-8.13a30.83,30.83,0,0,0,7.06-1.18,26,26,0,0,0,6.25-2.78,17.5,17.5,0,0,0,8.75-13.1q1.14-8.46-4.18-20.9a21.16,21.16,0,0,1-2.78,9.28,18.93,18.93,0,0,1-6.54,6.65q-8.55,5.28-16.46,2.41t-13-13.34q-5-10.17-2.78-19.5A22.91,22.91,0,0,1,121,43.69a19.65,19.65,0,0,1,9.78-3.19ZM130,48.91a11.42,11.42,0,0,0-5.62,1.84A12.94,12.94,0,0,0,118.19,60c-.68,4,.15,8.32,2.47,13.06s5.18,7.91,8.53,9.41l10.25-1a12.83,12.83,0,0,0,6.19-9.16c.69-4-.11-8.38-2.44-13.15s-5.16-7.86-8.53-9.35a10.39,10.39,0,0,0-3.82-.93Zm-68.28,25a2.08,2.08,0,0,1,1.63.56c1.34,1.27,1.25,4.6-.32,10a56,56,0,0,1-4.59,11.06,52.57,52.57,0,0,1-6.66,9.66c2.17-1.1,3.53-.74,4,1.09s.15,4.91-1.12,9.28a74.74,74.74,0,0,1-8.38,18.79A60.46,60.46,0,0,1,33.84,149a29.23,29.23,0,0,1-4.65,3.25,18.25,18.25,0,0,1-4.47,1.81l2.59-8.87a5.28,5.28,0,0,0,3.66-.5,22.38,22.38,0,0,0,5-3.28,40.92,40.92,0,0,0,8.28-9.53,46.64,46.64,0,0,0,5.41-12c1.16-4,1.29-6.47.37-7.4s-2.72-.33-5.5,2l-4.41,3.69,2.19-7.57,4.6-3.84a32.52,32.52,0,0,0,6.56-7.5,36.8,36.8,0,0,0,4.25-9.5q1.52-5.23.25-6.28c-.82-.74-2.5,0-5.06,2.09a54.62,54.62,0,0,0-4.75,4.56c-1.76,1.89-3.75,4.21-6,7l2.37-8.18c2.22-2.6,4.24-4.83,6.06-6.72a66.42,66.42,0,0,1,5-4.75q4-3.34,6.19-3.47ZM244,87c-14.13,29.87-32.13,52.6-55.19,62.06l3.5,113.78c6-3.36,7.17-5.38,9.82-11.75l78.62-144.28c1.1-2.81,1.2-4.63-.53-5.81A204.69,204.69,0,0,1,244,87Zm-59.34,19.91,2.75,5.59-45.6,22.41-2.78-5.6,45.63-22.4Zm66.87,21-3.12,8.18q-5.22,7-14.1,18.72c-6,7.88-9.74,12.9-11.34,15.13q-4.56,6.28-6.94,10.31a50.36,50.36,0,0,0-3.78,7.59c-1.47,3.83-1.94,6.66-1.41,8.47s1.95,2.24,4.29,1.28a24.67,24.67,0,0,0,5.84-3.71,92.67,92.67,0,0,0,7.75-7.22l-3.81,9.81a93,93,0,0,1-7.32,6,28.19,28.19,0,0,1-5.53,3.28q-6,2.48-7.5-1.66t2.16-13.47a67.78,67.78,0,0,1,4.16-8.78c1.6-2.87,3.9-6.44,6.87-10.68q1.18-1.66,7.25-9.78l17.06-22.69-18.4,7.5,3.15-8.19,24.72-10.09Zm-68.94,23.4c-12.72,3.82-33.16,4.62-54.43,4.91-18.06.17-42.78-1.25-57.35,1.37-8.51,8.2-17.67,17-26.62,24.72-8,6.68-16.15,13.62-26.22,16.82a9.79,9.79,0,0,1-2.69-.19c3.74,3.36,7.66,5.4,11.91,7.81l143.44,57.44c.75.14,8.7,3.09,15.18,0l-3.21-112.91ZM113.72,183c.64,0,1.27,0,1.9,0s1.42.08,2.13.16q8.48.88,13.5,6.47c2.39,2.66,3.37,5.37,2.91,8.12s-2.27,5.24-5.44,7.5a29.44,29.44,0,0,1,13.69,0,20,20,0,0,1,10.37,6c4.06,4.52,5.22,8.79,3.5,12.85s-6.12,7.6-13.34,10.65S129.09,239,123,238.19a23.77,23.77,0,0,1-15.12-7.94q-4-4.45-3.19-9.06t6.25-8.38v0a26.91,26.91,0,0,1-12.28,0,18.06,18.06,0,0,1-9.25-5.44q-5-5.58-2.38-11.18t12.44-9.72A40.08,40.08,0,0,1,113.72,183Zm-1.56,6.5a22.13,22.13,0,0,0-8.19,1.91c-3.83,1.62-6.18,3.53-7.1,5.78s-.26,4.59,1.91,7a13.12,13.12,0,0,0,8.22,4.31,20.53,20.53,0,0,0,10.78-1.75c3.8-1.6,6.14-3.53,7.06-5.78s.36-4.62-1.81-7a13.16,13.16,0,0,0-8.34-4.28,17.77,17.77,0,0,0-2.54-.16Zm19.28,20.19a23.61,23.61,0,0,0-9.19,2c-4.21,1.78-6.83,4-7.81,6.59s-.18,5.32,2.34,8.13a15.7,15.7,0,0,0,9.56,5.12,22.24,22.24,0,0,0,12.1-1.81c4.2-1.78,6.82-4,7.81-6.62s.19-5.37-2.31-8.16a15.55,15.55,0,0,0-9.6-5.06,18.69,18.69,0,0,0-2.9-.22Z"/></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link
                        href="{{ route('dashboard') }}"
                        :active="request()->routeIs('dashboard')"
                    >
                        Dashboard
                    </x-jet-nav-link>

                    <x-jet-nav-link
                        href="{{ route('shadowrun.main') }}"
                        :active="request()->routeIs('shadowrun.main')"
                    >
                        Shadowrun
                    </x-jet-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Campaigns Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button
                                        type="button"
                                        class="
                                            inline-flex items-center px-3 py-2
                                            border border-transparent text-sm
                                            leading-4 font-medium rounded-md
                                            text-gray-500 bg-white
                                            hover:bg-gray-50 hover:text-gray-700
                                            focus:outline-none focus:bg-gray-50
                                            active:bg-gray-50 transition
                                        "
                                    >
                                        <span class="font-bold mr-1">
                                            Campaign:
                                        </span>
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Campaign Management -->
                                    <div
                                        class="
                                            block px-4 py-2 text-xs
                                            text-gray-400
                                        "
                                    >
                                        Manage Campaign
                                    </div>

                                    <!-- Campaign Settings -->
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                    >
                                        Campaign Settings
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link
                                            href="{{ route('teams.create') }}"
                                        >
                                            Create New Campaign
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Campaign Switcher -->
                                    <div
                                        class="
                                            block px-4 py-2 text-xs
                                            text-gray-400
                                        "
                                    >
                                        Switch Campaigns
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="
                                        flex text-sm border-2 border-transparent
                                        rounded-full focus:outline-none
                                        focus:border-gray-300 transition
                                    "
                                >
                                    <img
                                        class="
                                            h-8 w-8 rounded-full object-cover
                                        "
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}"
                                    />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button
                                        type="button"
                                        class="
                                            inline-flex items-center px-3 py-2
                                            border border-transparent text-sm
                                            leading-4 font-medium rounded-md
                                            text-gray-500 bg-white
                                            hover:text-gray-700
                                            focus:outline-none transition
                                        "
                                    >
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Manage Account
                            </div>

                            <x-jet-dropdown-link
                                href="{{ route('profile.show') }}"
                            >
                                Profile
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link
                                    href="{{ route('api-tokens.index') }}
                                ">
                                    API Tokens
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link
                                    href="{{ route('logout') }}"
                                    onclick="
                                        event.preventDefault();
                                        this.closest('form').submit();
                                    "
                                >
                                    Log Out
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button
                    @click="open = ! open"
                    class="
                        inline-flex items-center justify-center p-2 rounded-md
                        text-gray-400 hover:text-gray-500 hover:bg-gray-100
                        focus:outline-none focus:bg-gray-100 focus:text-gray-500
                        transition
                    "
                >
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"><path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /><path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link
                href="{{ route('dashboard') }}"
                :active="request()->routeIs('dashboard')"
            >
                Dashboard
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link
                href="{{ route('shadowrun.main') }}"
                :active="request()->routeIs('shadowrun.main')"
            >
                Shadowrun
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img
                            class="h-10 w-10 rounded-full object-cover"
                            src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}"
                        />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">
                            {{ Auth::user()->name }}
                    </div>
                    <div class="font-medium text-sm text-gray-500">
                        {{ Auth::user()->email }}
                    </div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link
                    href="{{ route('profile.show') }}"
                    :active="request()->routeIs('profile.show')"
                >
                    Profile
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link
                        href="{{ route('api-tokens.index') }}"
                        :active="request()->routeIs('api-tokens.index')"
                    >
                        API Tokens
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        Log Out
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Campaign Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        Manage Campaign
                    </div>

                    <!-- Campaign Settings -->
                    <x-jet-responsive-nav-link
                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                        :active="request()->routeIs('teams.show')"
                    >
                        Campaign Settings
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link
                            href="{{ route('teams.create') }}"
                            :active="request()->routeIs('teams.create')"
                        >
                            Create New Campaign
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Campaign Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        Switch Campaigns
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team
                            :team="$team" component="jet-responsive-nav-link"
                        />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
