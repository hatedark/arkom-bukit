@php
$fotoData = get_gallery_data('FOTO');
$videoData = get_gallery_data('VIDEO');
@endphp

<x-app-layout>
    <!-- Hero Section start -->
    <section class="hero container">
        <div class="hero__img-wrapper">
            <img loading="lazy" src="https://source.unsplash.com/random/?green-nature" alt="location" class="hero__img">
        </div>
        <div class="hero__desc" style="padding: 0; align-items: center;">
            <h1 class="hero__title">Galeri</h1>
        </div>
    </section>
    <!-- Hero Section End -->

    {{-- Foto Section Start --}}
    <section class="galeri container">
        <div class="galeri__title title">Foto</div>
        <div class="galeri-container">
            @foreach ($fotoData as $item)
            <img loading="lazy" src="{{ asset('storage/' . $item->Files) }}" alt="area keluarga"
                class="foto__img galeri__img" />
            @endforeach
        </div>
       
        <div class="see-al">Lihat lainnya...</div>
    </section>
    {{-- Foto Section End --}}

    {{-- Video Section Start --}}
    <section class="galeri container">
        <div class="galeri__title title">Video</div>
        <div class="galeri-container">
            @foreach ($videoData as $item)
            {{--<img loading="lazy" src="https://source.unsplash.com/random/?family" alt="area keluarga"
                class="foto__img" />
            <img loading="lazy" src="https://source.unsplash.com/random/?camera" alt="area foto"
                class="video__img galeri__img" />
            <img loading="lazy" src="https://source.unsplash.com/random/?cafe" alt="area kafe"
                class="video__img galeri__img" />
            <img loading="lazy" src="https://source.unsplash.com/random/?camp" alt="area camping"
                class="video__img galeri__img" />--}}
                <video controls width="1280" height="720">
                    <source src="{{ asset('storage/' . $item->Files) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
             @endforeach
        </div>
        <div class="see-al">Lihat lainnya...</div>
    </section>
    {{-- Video Section End --}}
</x-app-layout>

{{-- @php
    $fotoData = get_gallery_data('FOTO');
    $videoData = get_gallery_data('VIDEO');
@endphp --}}


{{-- <x-app-layout>
    <div class="bg-cover bg-center h-80 flex items-center justify-center"
        style="background-image: url('{{ asset('storage/bg_gallery.jpg') }}');">
        <h1 class="text-4xl font-bold text-white">Galeri</h1>
    </div>

    <div class="container mx-auto p-8 mt-4">
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-center">Foto</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 mx-auto">
                @foreach ($fotoData as $item)
                    <div class="overflow-hidden bg-gray-200 rounded-lg shadow-md">
                        <img src="{{ asset('storage/' . $item->Files) }}" alt="Foto" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <p class="text-lg font-semibold mb-2">{{ $item->description }}</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-full">Lihat Detail</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-4 text-center">Video</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 mx-auto">
                @foreach ($videoData as $item)
                    <div class="overflow-hidden bg-gray-200 rounded-lg shadow-md">
                        <div class="relative" style="padding-top: 56.25%;">
                            <iframe src="{{ asset('storage/' . $item->Files) }}"
                                class="absolute top-0 left-0 w-full h-full" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <p class="text-lg font-semibold mb-2">{{ $item->description }}</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-full">Tonton Sekarang</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</x-app-layout> --}}
