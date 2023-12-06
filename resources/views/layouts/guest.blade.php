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
        <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400&f[]=general-sans@400&f[]=pencerio@50&display=swap"
            rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/modern-normalizes.css', 'resources/css/var.css', 'resources/css/components/header.css', 'resources/css/components/login.css', 'resources/js/app.js'])
    </head>

    <body>
        <header x-data="{ open: false }" class="bg-header">
            <div class="header container">
                <img src="logo.png" alt="Logo Bukit Parangyangan" href="#" class="header__logo" />
                <nav>
                    <ul class="header__menu">
                        <li>
                            <a class="header__link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="dropdown">
                            <button class="dropbtn">Jelajahi</button>
                            <p class="droplogo">&#129171;</p>
                            <div class="dropdown-content">
                                <a href="{{ url('/jelajah-bukit') }}">Jelajah Bukit</a>
                                <a href="{{ url('/galeri') }}">Galeri</a>
                                <a href="{{ url('/rekomendasi') }}">Rekomendasi</a>
                                <a href="{{ url('/profil') }}">Profil</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <button class="dropbtn">Reservasi</button>
                            <p class="droplogo">&#129171;</p>
                            <div class="dropdown-content">
                                <a href="{{ url('/tiket-online') }}">Tiket Masuk</a>
                                <a href="{{ url('/reservasi-kafe') }}">Meja Kafe</a>
                                <a href="{{ url('/riwayat') }}">Riwayat</a>
                            </div>
                        </li>
                        <li>
                            <a class="header__link" href="{{ url('/informasi') }}">
                                Informasi
                            </a>
                        </li>

                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <li class="dropdown">
                                        <button class="dropbtn">Logged in</button>
                                        <p class="droplogo">&#129171;</p>
                                        <div class="dropdown-content">
                                            <a href="{{ url('/profile') }}">Profile</a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <a href="{{ route('login') }}" class="header__link">Log in</a>

                                    @if (Route::has('register'))
                                        <span>/</span>
                                        <a href="{{ route('register') }}" class="header__link">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        {{ $slot }}
        {{-- <div class="container" id="container">
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
        {{-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            autofocus autocomplete="username" placeholder="Email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}

        {{-- PASSWORD --}}
        {{-- <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="current-password" placeholder="Password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}

        {{-- REMEMBER ME --}}
        {{-- <label for="remember_me" class="remember-me">
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
        </div> --}}
    </body>

</html>
