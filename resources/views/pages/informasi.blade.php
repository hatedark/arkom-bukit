@php
$dataBerita =  get_news_data();
@endphp

<x-app-layout>
    <!-- Hero Section start -->
    <section class="hero container">
        <div class="hero__img-wrapper">
            <img loading="lazy" src="https://source.unsplash.com/random/?green-nature" alt="informasi" class="hero__img">
        </div>
        <div class="hero__desc" style="padding: 0; align-items: center;">
            <h1 class="hero__title">Informasi</h1>
        </div>
    </section>
    <!-- Hero Section End -->

    {{-- News Section Start --}}
    <section class="news container">
        <div class="new__title title">Berita</div>
        <div class="news-container">
            @foreach ($dataBerita as $news)
            <div class="news-card">
                <img loading="lazy" src="{{ asset('storage/' . $news->thumbnail) }}" alt="family-lounge"
                    class="news__img">
                <div class="news__desc-wrapper">
                    <h3 class="news__desc-title">{!! $news->title !!}</h3>
                    <p class="news__desc-subtitle">{!! $news->content !!}</p>
                </div>
                <i class="fa-solid fa-chevron-right fa-2xl news-logo"></i>
            </div>
            @endforeach
        </div
        
            {{--<div class="news-card">
                <img loading="lazy" src="https://source.unsplash.com/random/500x500/?dinner" alt="family-lounge"
                    class="news__img">
                <div class="news__desc-wrapper">
                    <h3 class="news__desc-title">Berita</h3>
                    <p class="news__desc-subtitle">Saya dengar ada berita, gimana beritanya?</p>
                </div>
                <i class="fa-solid fa-chevron-right fa-2xl news-logo"></i>
            </div>
            <div class="news-card">
                <img loading="lazy" src="https://source.unsplash.com/random/500x500/?dinner" alt="family-lounge"
                    class="news__img">
                <div class="news__desc-wrapper">
                    <h3 class="news__desc-title">Berita</h3>
                    <p class="news__desc-subtitle">Saya dengar ada berita, gimana beritanya?</p>
                </div>
                <i class="fa-solid fa-chevron-right fa-2xl news-logo"></i>
            </div>
            <div class="see-al">Lihat lainnya...</div>
        </div>--}}
    </section>
    {{-- News Section End --}}
</x-app-layout>

{{-- @php
$dataBerita =  get_news_data();
@endphp

<x-app-layout>
    <div class="bg-cover bg-center h-80 flex items-center justify-center" style="background-image: url('path/to/cover-image.jpg');">
        <h1 class="text-4xl font-bold text-white">Berita</h1>
    </div>

    <div class="container mx-auto p-8 mt-4">
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-center">Berita</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 mx-auto">
                @foreach ($dataBerita as $news)
                    <div class="overflow-hidden bg-gray-200 rounded-lg shadow-md">
                        <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="Foto" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <p class="text-lg font-semibold mb-2">{!! $news->content !!}</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-full">Lihat Selengkapnya</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</x-app-layout> --}}
