<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-d10 class="w-auto h-16" />
        </x-slot>

        <div>
            Dungeonly: Coming soon.
        </div>

        <div class="flex items-center justify-end mt-4">
            @auth
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dashboard') }}">
                    {{ __('Go to Dashboard') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-button class="ml-4">
                        {{ __('Log out') }}
                    </x-jet-button>
                </form>
            @else
                @if(Route::has('register'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('No account?') }}
                    </a>
                @endif

                <a class="ml-4 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            @endauth
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
