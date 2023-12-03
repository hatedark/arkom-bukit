<x-app-layout>
    <!-- reserv-meja Section Start -->
    <section class="reserv-meja book-meja container section">
        <i class="fa-solid fa-receipt fa-2xl" style="font-size: 5rem; color: red;"></i>
        <span class="book-meja__title">Booking Meja Kafe</span>
        <hr style="border-color: black; margin: 3rem auto 0 auto" />
        <img class="bagian1__img" src="image/IMG (16).jpg" alt="foto bukit"
            style="height: 200px" />
    </section>
    <!-- reserv-meja Section End -->

    {{-- forms-meja Section Start --}}
    <!-- Start The Form -->
    <form id="survey-form" class="container form-meja" action="{{ route('submit_reservation') }}" method="POST">
        @csrf
        <!-- Name, Email and Number(Age) -->
        <div class="form-group">
            <label id="name-label" for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group">
            <label id="email-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
        </div>
        <div class="form-group">
            <label id="number-label" for="nomor_hp">No. HP<span class="op">(optional)</span></label>
            <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" min="13" max="120"
                placeholder="Masukkan no.HP">
        </div>
        <div class="form-group">
            <label id="tanggal_reservasi-label" for="tanggal_kunjungan">Tanggal Kunjungan</label>
            <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" placeholder="Pilih Tanggal" required>
        </div>
        <div class="form-group">
            <label id="jam_booking-label" for="jam_booking">Jam Booking</label>
            <input type="time" class="form-control" id="jam_booking" name="jam_booking" placeholder="Pilih Waktu" required>
        </div>

        <!-- Dropdown -->
        <div class="form-group">
            <label for="meja_id">No. Meja</label>
            <select id="meja_id" name="meja_id" class="form-control">
                <option disabled selected value="">Silahkan pilih</option>
                @foreach($availableTables as $table)
                    <option value="{{ $table->id }}">{{ $table->nomor_meja }}</option>
                @endforeach
            </select>
        </div>

        <!-- Text Area -->
        <div class="form-group">
            <label for="catatan">Ada catatan?</label>
            <textarea class="form-textarea" id="catatan" name="catatan" rows="3" cols="30" placeholder="Tuliskan di sini..."></textarea>
        </div>

        <!-- Submit -->
        <div class="form-group">
            <button id="submit" type="submit" class="button-submit">Submit</button>
        </div>
    </form>
    {{-- forms-meja Section End --}}
</x-app-layout>
