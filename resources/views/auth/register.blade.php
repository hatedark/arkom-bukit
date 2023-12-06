<x-guest-layout>
    <div class="body-filter"></div>
    <section class="login-container">
        <div class="quotes">
            <h1 class="quotes__title">Ayo Daftar!</h1>
            <p class="quotes__subtitle">Langkah pertama menuju pesona alam, masuki keindahan, temukan ketenangan di Bukit
                Panyangrayan!</p>
        </div>
        <form method="POST" action="{{ route('register') }}" class="forms">
            <div class="forms__subtitle" style="margin-bottom: -2rem">SELAMAT DATANG</div>
            <div class="forms__title">Daftarkan Akunmu</div>

            <div class="forms__container">
                <x-input-label for="name" :value="__('Nama')" class="forms__label" />
                <input id="name" class="block mt-1 w-full forms__input" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" placeholder="Ketikkan nama anda" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="forms__container">
                <x-input-label for="email" :value="__('Email')" class="forms__label" />
                <input id="email" class="block mt-1 w-full forms__input" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" placeholder="Masukkan email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="forms__container">
                <x-input-label for="password" :value="__('Password')" class="forms__label" />
                <input id="password" class="block mt-1 w-full forms__input" type="password" name="password" required
                    autocomplete="current-password" placeholder="Masukkan password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="forms__container">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="forms__label" />
                <input id="password_confirmation" class="block mt-1 w-full forms__input" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="Konfirmasi password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <button type="submit" class="btn forms__container">
                {{ __('Daftar') }}
            </button>

            <div class="register__go forms__container">
                <p class="register__desc">Sudah punya akun? <a href="{{ url('/login') }}" class="register__btn">Log
                        In Di
                        Sini</a></p>
            </div>
        </form>
    </section>
</x-guest-layout>

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
