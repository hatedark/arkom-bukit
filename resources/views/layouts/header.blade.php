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
                            <form method="POST" action="{{ route('logout') }}" style="padding: 0; margin: 0;">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                    style="padding: 1rem; margin: 0;">
                                    {{ __('Log Out') }}
                                </a>
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
