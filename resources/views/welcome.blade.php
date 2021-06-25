<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="/">
                <x-d10 />
            </a>
        </x-slot>

        <div>
            Dungeonly: Coming soon.
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            @if(Route::has('register'))
                <a class="ml-4 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('No account?') }}
                </a>
            @endif
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
