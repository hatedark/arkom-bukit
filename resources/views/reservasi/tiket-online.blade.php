<x-app-layout>
    {{-- book-meja Section Start --}}
    <section class="book-meja container section">
        <i class="fa-solid fa-receipt fa-2xl" style="font-size: 5rem; color: blue;"></i>
        <span class="book-meja__title">Booking Tiket Online</span>
        <hr style="border-color: black; margin: 3rem auto 0 auto" />
        <img class="bagian1__img" src="https://source.unsplash.com/random/?mountain" alt="foto bukit"
            style="height: 200px" />
        <div class="bagian1__subtitle">
            Di Bukit Panyangrayan, kami telah menyediakan fitur booking tiket online untuk
            kenyamanan Anda. Booking tiket Anda dengan mudah dan kunjungi bukit ini tanpa harus antre atau
            khawatir tiket habis. Nikmati pengalaman kunjungan yang lebih praktis dan lancar di Bukit
            Panyangrayan dengan booking tiket online.
            <br /><br />Harga : Rp. 5.000 / tiket
        </div>
        <div class="reserv-container">
            <a href="{{ url('/pemesanan-tiket') }}" class="reserv-button">Booking Sekarang</a>
            <div class="reserv-text">Atau Mau Booking Meja Kafe Aja Nih?</div>
        </div>
    </section>
    {{-- book-meja Section End --}}
</x-app-layout>