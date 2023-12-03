<x-app-layout>
    <!-- reserv-meja Section Start -->
    <section class="reserv-meja book-meja container section">
        <i class="fa-solid fa-receipt fa-2xl" style="font-size: 5rem; color: red;"></i>
        <span class="book-meja__title">Pesan Tiket Online </span>
        <hr style="border-color: black; margin: 3rem auto 0 auto" />
        <img class="bagian1__img" style="margin: 1rem auto; height: 200px"
            src="https://source.unsplash.com/random/?mountain" alt="foto bukit" />
    </section>
    <!-- reserv-meja Section End -->

    {{-- forms-meja Section Start --}}
    <!-- Start The Form -->
    <form id="survey-form" class="container form-meja" action="{{ route('submit_tiket') }}" method="POST">
        @csrf
        <!-- Name, Email and Number(Age) -->
        <div class="form-group">
            <label id="name-label" for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama"
                required>
        </div>
        <div class="form-group">
            <label id="email-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email"
                required>
        </div>
        <div class="form-group">
            <label id="number-label" for="nomor_hp">No. HP<span class="op">(optional)</span></label>
            <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" min="13" max="120"
                placeholder="Masukkan no.HP">
        </div>
        <div class="form-group">
            <label id="tanggal-label" for="tanggal">Tanggal Kunjungan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Pilih Tanggal"
                required>
        </div>
        <div class="form-group">
            <label id="jumlah-label" for="jumlah_tiket">Jumlah Tiket</label>
            <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" max="10"
                placeholder="Pilih Jumlah Tiket" required>
        </div>

        <!-- Text Area -->
        <div class="form-group">
            <label for="keterangan">Ada catatan?</label>
            <textarea class="form-textarea" id="keterangan" name="keterangan" rows="3" cols="30"
                placeholder="Tuliskan di sini..."></textarea>
        </div>

        <!-- Submit -->
        <div class="form-group">
            <button type="submit" id="submit" class="button-submit">Submit</button>
        </div>
    </form>

</x-app-layout>
