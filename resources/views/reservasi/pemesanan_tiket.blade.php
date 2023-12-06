<x-app-layout>
    <!-- reserv-meja Section Start -->
    <section class="reserv-meja book-meja container section">
        <i class="fa-solid fa-receipt fa-2xl" style="font-size: 5rem; color: red;"></i>
        <span class="book-meja__title">Pesan Tiket Online </span>
        <hr style="border-color: black; margin: 3rem auto 0 auto" />
        <img class="bagian1__img" src="image/IMG (20).jpg" alt="foto bukit" style="margin: 2rem auto; height: 200px" />
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
            <label id="number-label" for="nomor_hp">No. HP<div class="op">(optional)</div></label>
            <input type="tel" class="form-control" id="nomor_hp" name="nomor_hp" pattern="[0-9]{1,15}"
                placeholder="Masukkan no.HP">
        </div>
        <div class="form-group">
            <label id="tanggal-label" for="tanggal">Tanggal Kunjungan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="form-group">
            <label id="jumlah-label" for="jumlah_tiket">Jumlah Tiket</label>
            <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" max="10"
                placeholder="Pilih Jumlah Tiket" required>
        </div>

        <!-- Text Area -->
        <div class="form-group">
            <label for="keterangan">Ada catatan?</label>
            <textarea class="form-textarea form-control" id="keterangan" name="keterangan" rows="3" cols="30"
                placeholder="Tuliskan di sini..."></textarea>
        </div>

        <!-- Submit -->
        <button type="submit" id="submit" class="button-submit">Submit</button>
    </form>

</x-app-layout>
