<x-blank-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-blue-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" tabindex="1" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                </div>
                <x-jet-input id="password" tabindex="2" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                {{-- 
                    //todo de nuevo deshabilito el panel de registro para nuevos usuarios
                   @if (Route::has('register'))
                    <a class="text-sm text-gray-600 hover:text-gray-900 underline" href="{{ route('register') }}">
                        {{ __('Don\'t have an account? Sign up') }}
                    </a>
                @endif --}}

                <x-jet-button class="ml-4 h-10" tabindex="3">
                    {{ __('Ingresar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-blank-layout>
