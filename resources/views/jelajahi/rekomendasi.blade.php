<x-app-layout>
    <!-- Hero Section start -->
    <section class="hero container">
        <div class="hero__img-wrapper">
            <img loading="lazy" src="https://source.unsplash.com/random/?green-nature" alt="location" class="hero__img">
        </div>
        <div class="hero__desc" style="padding: 0; align-items: center;">
            <h1 class="hero__title">Rekomendasi</h1>
        </div>
    </section>
    <!-- Hero Section End -->

    {{-- Hotel Section Start --}}
    <section class="destination container">
        <div class="destination__title title">Hotel Terdekat Buat Kamu</div>
        <div class="destination-container" style="grid-template-rows: 1fr;">
            <div class="destination__img-container">
                <div class="destination__img-wrapper">
                    <img loading="lazy" src="https://source.unsplash.com/random/?family" alt="area keluarga"
                        class="galeri__img" />
                </div>
                <div class="destination__desc-container">
                    <h1 class="destionation__desc-title">Hotel Horison Tasikmalaya</h1>
                    <p class="destionation__desc-subtitle">Hotel Horison Tasikmalaya adalah sebuah hotel yang terletak
                        di kota Tasikmalaya, Indonesia ...</p>
                </div>
            </div>
            <div class="destination__img-container">
                <div class="destination__img-wrapper">
                    <img loading="lazy" src="https://source.unsplash.com/random/?camera" alt="area foto"
                        class="galeri__img" />
                </div>
                <div class="destination__desc-container">
                    <h1 class="destionation__desc-title">Amaris Hotel Tasikmalaya</h1>
                    <p class="destionation__desc-subtitle">Hotel ini merupakan bagian Grup Santika Indonesia yang
                        mengoperasikan sejumlah hotel di Indonesia ...</p>
                </div>
            </div>
        </div>
        <div class="see-al">Cari yang lain...</div>
    </section>
    {{-- Hotel Section End --}}

    {{-- Restoran Section Start --}}
    <section class="destination container">
        <div class="destination__title title">Restoran Terdekat Buat Kamu</div>
        <div class="destination-container" style="grid-template-rows: 1fr;">
            <div class="destination__img-container">
                <div class="destination__img-wrapper">
                    <img loading="lazy" src="https://source.unsplash.com/random/?family" alt="area keluarga"
                        class="galeri__img" />
                </div>
                <div class="destination__desc-container">
                    <h1 class="destionation__desc-title">Saung Rangon</h1>
                    <p class="destionation__desc-subtitle">Jika sedang berada di Tasikmalaya dan ingin masakan Sunda,
                        Saung Ranggon sangat direkomendasikan ...</p>
                </div>
            </div>
            <div class="destination__img-container">
                <div class="destination__img-wrapper">
                    <img loading="lazy" src="https://source.unsplash.com/random/?camera" alt="area foto"
                        class="galeri__img" />
                </div>
                <div class="destination__desc-container">
                    <h1 class="destionation__desc-title">Saung Gunung Jati</h1>
                    <p class="destionation__desc-subtitle">Makanan sunda yang sangat sekali dinikmati bersama dengan
                        rasa nikmat dan juga tempatnya nyaman ...</p>
                </div>
            </div>
        </div>
        <div class="see-al">Cari yang lain...</div>
    </section>
    {{-- Restoran Section End --}}

    {{-- Wisata Section Start --}}
    <section class="destination container">
        <div class="destination__title title">Rekomendasi Wisata Lain</div>
        <div class="destination-container" style="grid-template-rows: 1fr;">
            <div class="destination__img-container">
                <div class="destination__img-wrapper">
                    <img loading="lazy" src="https://source.unsplash.com/random/?family" alt="area keluarga"
                        class="galeri__img" />
                </div>
                <div class="destination__desc-container">
                    <h1 class="destionation__desc-title">Situ Gede</h1>
                    <p class="destionation__desc-subtitle">Tasikmalaya memiliki danau besar alami yang menawarkan
                        pemandangan elok nan indah ...</p>
                </div>
            </div>
            <div class="destination__img-container">
                <div class="destination__img-wrapper">
                    <img loading="lazy" src="https://source.unsplash.com/random/?camera" alt="area foto"
                        class="galeri__img" />
                </div>
                <div class="destination__desc-container">
                    <h1 class="destionation__desc-title">Kawah Gunung Galunggung</h1>
                    <p class="destionation__desc-subtitle">Gunung Galunggung termasuk kedalam kategori gunung favorit
                        pendaki pemula ...</p>
                </div>
            </div>
        </div>
        <div class="see-al">Cari yang lain...</div>
    </section>
    {{-- Wisata Section End --}}
</x-app-layout>
