<x-app-layout>
    {{-- book-meja Section Start --}}
    <section class="book-meja container section">
        <i class="fa-solid fa-receipt fa-2xl" style="font-size: 5rem; color: blue;"></i>
        <span class="book-meja__title">Riwayat</span>
        <hr style="border-color: black; margin: 3rem auto 0 auto" />
        <h1 class="title" style="margin: 0; padding: 0;">Tiket Online</h1>
        <div class="news-container">
            @forelse ($tikets as $tiket)
                @if ($tiket->user_id == auth()->id())
                    <div class="riwayat-card">
                        <i class="fa-solid fa-file-invoice fa-2xl" style="align-self: center"></i>
                        <div class="news__desc-wrapper" style="padding: 2rem">
                            <h1 class="news__desc-title">Invoice - #{{ $tiket->id }}</h1>
                            <h2 class="news__desc-subtitle">Atas Nama : {{ $tiket->nama }}</h2>
                            <p class="news__desc-content" style="padding: 0">Jumlah Tiket yang Dibeli :
                                {{ $tiket->jumlah_tiket }}</p>
                        </div>
                        <div class="news__desc-wrapper" style="padding: 2rem">
                            <h3 class="news__desc-title">Tanggal Kunjungan : {{ $tiket->tanggal }}</h3>
                            <h5 class="news__desc-subtitle">Dibeli pada : {{ $tiket->created_at }}</h5>
                            <p class="news__desc-content" style="padding: 0">Nomor yang bisa dihubungi :
                                {{ $tiket->nomor_hp }}</p>
                        </div>
                        <i class="fa-solid fa-chevron-right fa-2xl news-logo"></i>
                        <a href="{{ route('riwayat.show', $tiket->id) }}" class="card-h__link"></a>
                    </div>
                @endif
            @empty
                <h1 class="see-al">Kosong</h1>
            @endforelse
        </div>
        <h1 class="title" style="margin: 5rem auto 0 auto; padding: 0;">Meja Kafe</h1>
        <div class="news-container">
            @forelse ($reservs as $reserv)
                @if ($reserv->user_id == auth()->id())
                    <div class="riwayat-card">
                        <i class="fa-solid fa-file-invoice fa-2xl" style="align-self: center"></i>
                        <div class="news__desc-wrapper" style="padding: 2rem">
                            <h1 class="news__desc-title">Invoice - #{{ $reserv->id }}</h1>
                            <h2 class="news__desc-subtitle">Atas Nama : {{ $reserv->nama }}</h2>
                            <p class="news__desc-content" style="padding: 0">Jumlah Tiket yang Dibeli :
                                {{ $reserv->jumlah_tiket }}</p>
                        </div>
                        <div class="news__desc-wrapper" style="padding: 2rem">
                            <h3 class="news__desc-title">Tanggal Kunjungan : {{ $reserv->tanggal }}</h3>
                            <h5 class="news__desc-subtitle">Dibeli pada : {{ $reserv->created_at }}</h5>
                            <p class="news__desc-content" style="padding: 0">Nomor yang bisa dihubungi :
                                {{ $reserv->nomor_hp }}</p>
                        </div>
                        <i class="fa-solid fa-chevron-right fa-2xl news-logo"></i>
                        <a href="{{ route('riwayat.show', $reserv->id) }}" class="card-h__link"></a>
                    </div>
                @endif
            @empty
                <h1 class="see-al">Kosong</h1>
            @endforelse
        </div>
        <img class="bagian1__img" src="image/IMg (20).jpg" alt="foto bukit" style="height: 300px" />
    </section>
    {{-- book-meja Section End --}}
</x-app-layout>
