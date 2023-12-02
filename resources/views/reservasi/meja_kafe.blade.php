<x-app-layout>
    {{-- book-meja Section Start --}}
    <section class="book-meja container section">
        <i class="fa-solid fa-receipt fa-2xl" style="font-size: 5rem; color: blue;"></i>
        <span class="book-meja__title">Booking Meja Kafe</span>
        <hr style="border-color: black; margin: 3rem auto 0 auto" />
        <img class="bagian1__img" src="https://source.unsplash.com/random/?mountain" alt="foto bukit"
            style="height: 200px" />
        <div class="bagian1__subtitle">
            Dengan fitur booking kafe di situs web Bukit Panyangrayan, Anda bisa dengan
            mudah memesan meja kafe sesuai dengan keinginan Anda. Ini sangat berguna ketika Anda ingin
            mengadakan pertemuan, acara spesial, atau hanya ingin menikmati waktu santai di kafe kami tanpa
            harus khawatir tentang ketersediaan meja.
            <br /><br />Harga : -
        </div>
        <div class="reserv-container">
            <a href="{{ url('/reservasi-meja') }}" class="reserv-button">Booking Sekarang</a>
            <div class="reserv-text">Atau Mau Booking Tiket Online Aja Nih?</div>
        </div>
    </section>
    {{-- book-meja Section End --}}
</x-app-layout>
