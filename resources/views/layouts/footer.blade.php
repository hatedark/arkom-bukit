<div class="footer__container">

    <div class="logo__container">
        <img src="logo.png" alt="footer" class="footer__logo" />
        <i class="fa-brands fa-instagram fa-2xl"></i>
        <i class="fa-brands fa-facebook fa-2xl"></i>
        <i class="fa-brands fa-whatsapp fa-2xl"></i>
    </div>

    <div class="info__container">
        <div class="iconsb">
            <i class="fa-solid fa-location-dot fa-xl icon"></i>
            <span>Kecamatan Sukaraja, Kabupaten Tasikmalaya, Jawa - Barat, 46183 </span>
        </div>
        <div class="iconsb">
            <i class="fa-solid fa-envelope fa-xl icon"></i>
            <span>bukit@panyangrayan.com</span>
        </div>
        <div class="iconsb">
            <i class="fa-solid fa-phone fa-xl icon"></i>
            <span>+62 815-1094-1558</span>
        </div>
    </div>

    <div class="links">
        <h2>Mari Berjelajah</h2>
        <li><a href="{{ url('/area-keluarga') }}">Area Keluarga</a></li>
        <li><a href="{{ url('/area-kafe') }}">Area Kafe</a></li>
        <li><a href="{{ url('/area-foto') }}">Area Foto</a></li>
        <li><a href="{{ url('/camping-ground') }}">Camping Ground</a></li>
        <li><a href="{{ url('/galeri') }}">Galeri</a></li>
    </div>

    <div class="links">
        <h2>Reservasi</h2>
        <li><a href="{{ url('/tiket-online') }}">Booking Ticket</a></li>
        <li><a href="{{ url('/reservasi-kafe') }}">Booking Kafe</a></li>
    </div>

    {{-- <div class="links">
        <h2>Informasi</h2>
        <li><a href="{{ url('/news') }}">Berita</a></li>
    </div> --}}

    <div class="links">
        <h2>Tentang Kami</h2>
        <li><a href="{{ url('/news') }}">Informasi</a></li>
        <li><a href="{{ url('/profil') }}">Profile</a></li>
    </div>
    {{-- <div class="links6">
        <h4>Rekomendasi</h4>
        <li><a href="#">Hotel</a></li>
        <li><a href="#">Restaurant</a></li>
        <li><a href="#">Wisata</a></li>
    </div> --}}
</div>
