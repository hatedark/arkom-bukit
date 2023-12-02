<x-app-layout>
    <!-- reserv-meja Section Start -->
    <section class="reserv-meja book-meja container section">
        <i class="fa-solid fa-receipt fa-2xl" style="font-size: 5rem; color: red;"></i>
        <span class="book-meja__title">Booking Meja Kafe</span>
        <hr style="border-color: black; margin: 3rem auto 0 auto" />
        <img class="bagian1__img" src="https://source.unsplash.com/random/?mountain" alt="foto bukit"
            style="height: 200px" />
    </section>
    <!-- reserv-meja Section End -->

    {{-- forms-meja Section Start --}}
    <!-- Start The Form -->
    <form id="survey-form" class="container form-meja">

        <!-- Name, Email and Number(Age) -->
        <div class="form-group">
            <label id="name-label" for="name">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan nama" required>
        </div>
        <div class="form-group">
            <label id="email-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
        </div>
        <div class="form-group">
            <label id="number-label" for="number">No. HP<span class="op">(optional)</span></label>
            <input type="number" class="form-control" id="number" min="13" max="120"
                placeholder="Masukkan no.HP">
        </div>
        <div class="form-group">
            <label id="number-label" for="number">Tanggal Kunjungan</label>
            <input type="date" class="form-control" id="number" placeholder="Pilih Tanggal" required>
        </div>
        <div class="form-group">
            <label id="number-label" for="number">Jam Booking</label>
            <input type="time" class="form-control" id="number" placeholder="Pilih Waktu" required>
        </div>

        <!-- Dropdown -->
        <div class="form-group">
            <label>No. Meja</label>
            <select id="dropdown" name="conditions" class="form-control">
                <option disabled selected value="">Silahkan pilih</option>
                <option value="meja-1">Meja 1</option>
                <option value="meja-2">Meja 2</option>
                <option value="meja-3">Meja 3</option>
                <option value="meja-4">Meja 4</option>
                <option value="meja-5">Meja 5</option>
            </select>
        </div>

        <!-- Text Area -->
        <div class="form-group">
            <label for="">Ada catatan?</label>
            <textarea class="form-textarea" id="bio" rows="3" cols="30" placeholder="Tuliskan di sini..."></textarea>
        </div>

        <!-- Submit -->
        <div class="form-group">
            <button id="submit" value="Submit" class="button-submit">Submit</button>
        </div>
    </form>
    {{-- forms-meja Section End --}}
</x-app-layout>
