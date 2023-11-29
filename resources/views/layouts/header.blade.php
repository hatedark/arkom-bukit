<img src="logo.png" alt="Logo Bukit Parangyangan" href="#" class="header__logo" />
<nav>
    <ul class="header__menu">
        <li>
            <a class="header__link" href="#">
                Home
            </a>
        </li>
        <li class="dropdown">
            <button class="dropbtn">Jelajahi</button>
            <p class="droplogo">&#129171;</p>
            <div class="dropdown-content">
                <a href="#">Jelajah Bukit</a>
                <a href="{{ url ('/galeri')}}">Galeri</a>
                <a href="#">Rekomendasi</a>
                <a href="#">Profil</a>
            </div>
        </li>
        <li class="dropdown">
            <button class="dropbtn">Reservasi</button>
            <p class="droplogo">&#129171;</p>
            <div class="dropdown-content">
                <a href="#">Tiket Masuk</a>
                <a href="#">Meja Kafe</a>
                <a href="#">Riwayat</a>
            </div>
        </li>
        <li>
            <a class="header__link" href="#">
                Informasi
            </a>
        </li>
        <li>
            <a class="header__link" href="#">
                Login
            </a>
            <span>/</span>
            <a class="header__link" href="#">
                Register
            </a>
        </li>
    </ul>
</nav>
