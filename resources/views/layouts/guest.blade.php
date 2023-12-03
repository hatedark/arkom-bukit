<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/components/login.css', 'resources/js/app.js', 'resources/js/login.js'])
    </head>

    <body class="auth-style">
        {{-- <div class="card">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div> --}}
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="POST" action="{{ route('register') }}">
                    <h1>Buat Akun</h1>
                    <span style="margin-bottom: 1rem">buatlah akun baru jika belum punya</span>
                    <!-- Name -->
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" placeholder="Username" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <!-- Email Address -->
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <!-- Password -->
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <!-- Confirm Password -->
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Confirm Password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                    <x-primary-button class="ms-4">
                        {{ __('Daftar') }}
                    </x-primary-button>
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        id="signIn" style="cursor: pointer;">
                        {{ __('Sudah Terdaftar?') }}
                    </a>

                </form>
            </div>
            <div class="form-container sign-in-container">
                <form method="POST" action="{{ route('login') }}">
                    <h1>Masuk</h1>
                    <span style="margin-bottom: 1rem">gunakan akun yang sudah terdaftar</span>
                    {{-- EMAIL --}}
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    {{-- PASSWORD --}}
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    {{-- REMEMBER ME --}}
                    <label for="remember_me" class="remember-me">
                        <input id="remember_me" type="checkbox" style="width: auto; margin: auto 0" name="remember">
                        <span style="margin: auto 0;">{{ __('Remember me') }}</span>
                    </label>
                    <div class="forgot-pass">
                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Atau lupa password?') }}
                            </a>
                        @endif

                    </div>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Selamat Datang!</h1>
                        <p>Agar dapat terus terhubung, dipersilahkan login dengan akun anda.</p>
                        <button class="ghost" id="signIn">Masuk</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hai Kawan!</h1>
                        <p>Masukkan akun anda dan nikmatilah perjalanan anda!</p>
                        <button href="{{ url('/register') }}" class="ghost" id="signUp">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
