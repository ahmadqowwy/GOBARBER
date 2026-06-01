<x-layout :title="$title">

<style>
    /* Background Deep Blue */
    .booking-bg {
        background-color: #0f172a;
        color: #fff;
        min-height: 100vh;
    }

    .container {
        display: flex;
        gap: 40px;
    }

    .kiri { flex: 2; }
    .kanan { flex: 1; }

    h2 {
        margin-bottom: 30px;
    }

    /* TANGGAL */
    .tanggal {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
    }

    .tgl-radio {
        display: none;
    }

    .card-tanggal {
        width: 90px;
        background: #1e293b;
        color: #fff;
        text-align: center;
        padding: 15px;
        border-radius: 12px;
        cursor: pointer;
        border: 1px solid #334155;
        transition: .25s;
    }

    .card-tanggal:hover {
        transform: translateY(-3px);
        border-color: #3b82f6;
    }

    /* Jika dipilih, border biru */
    .tgl-radio:checked + .card-tanggal {
        background: #253349;
        border-color: #3b82f6;
        transform: scale(1.05);
    }

    /* JAM (GRID) */
    .jam {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* Penting untuk 4 kolom sebaris */
        gap: 15px;
    }

    .card-jam {
        background: #1e293b;
        color: #e2e8f0;
        padding: 14px;
        text-align: center;
        border-radius: 12px;
        cursor: pointer;
        border: 1px solid #334155;
        transition: .25s;
    }

    .card-jam:hover {
        transform: translateY(-3px);
        border-color: #3b82f6;
    }

    .jam-radio:checked + .card-jam {
        background: #253349;
        border-color: #3b82f6;
        transform: scale(1.05);
    }

    /* STEP PANEL */
    .step-panel {
        background-color: #1e293b;
        border-radius: 16px;
        padding: 30px;
    }

    /* STEP INDICATORS */
    .step-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        color: #64748b;
    }

    .step-item.active {
        color: #3b82f6;
        font-weight: bold;
    }

    .step-item.done {
        color: #10b981; /* Hijau */
    }

    .step-num {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 2px solid currentColor;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 12px;
        font-size: 14px;
    }

    .step-item.active .step-num {
        background-color: #3b82f6;
        border-color: #3b82f6;
        color: #fff;
    }

    .step-item.done .step-num {
        background-color: #10b981;
        border-color: #10b981;
        color: #fff;
    }

    /* FORM INPUT */
    .form-title {
        margin-top: 30px;
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: bold;
    }

    input[type="text"] {
        margin-bottom: 15px;
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #334155;
        background-color: #1e293b;
        color: #fff;
    }
    input[type="text"]:focus {
        outline: none;
        border-color: #3b82f6;
    }
</style>

<!-- WRAPPER UTAMA -->
<div class="booking-bg">

    <!-- FORM MENUJU KE LANGKAH 4 (KONFIRMASI) -->
    <form action="{{ route('booking.konfirmasi') }}" method="POST">
        @csrf 

        <!-- HIDDEN INPUTS: Membawa data dari Langkah 1 & 2 -->
        <input type="hidden" name="layanan_id" value="{{ request('layanan_id') }}">
        <input type="hidden" name="barber_id" value="{{ request('barber_id') }}">

        <h2>Pilih Tanggal dan Jam</h2>

        <div class="container">

            <!-- KIRI: TANGGAL & JAM -->
            <div class="kiri">

                <!-- TANGGAL (Horizontal List) -->
                <div class="tanggal">

                    <label>
                        <input type="radio" name="tanggal" class="tgl-radio">
                        <div class="card-tanggal">Sen<br>Sep 9</div>
                    </label>

                    <label>
                        <input type="radio" name="tanggal" class="tgl-radio">
                        <div class="card-tanggal">Sel<br>Sep 10</div>
                    </label>

                    <label>
                        <input type="radio" name="tanggal" class="tgl-radio">
                        <div class="card-tanggal">Rab<br>Sep 11</div>
                    </label>

                    <label>
                        <input type="radio" name="tanggal" class="tgl-radio" id="moreDates">
                        <div class="card-tanggal" data-bs-toggle="modal" data-bs-target="#dateModal">
                            More<br>Dates
                        </div>
                    </label>

                </div>

                <!-- JAM (GRID 4 KOLOM) -->
                <div class="jam">

                    <label>
                        <input type="radio" name="jam" class="jam-radio">
                        <div class="card-jam">17.00 - 17.45<br><small>Tersedia</small></div>
                    </label>

                    <label>
                        <input type="radio" name="jam" class="jam-radio">
                        <div class="card-jam">18.00 - 18.45<br><small>Tersedia</small></div>
                    </label>

                    <label>
                        <input type="radio" name="jam" class="jam-radio">
                        <div class="card-jam">19.00 - 19.45<br><small>Tersedia</small></div>
                    </label>

                    <label>
                        <input type="radio" name="jam" class="jam-radio">
                        <div class="card-jam">20.00 - 20.45<br><small>Tersedia</small></div>
                    </label>

                    <label>
                        <input type="radio" name="jam" class="jam-radio">
                        <div class="card-jam">21.00 - 22.00<br><small>Tersedia</small></div>
                    </label>
                </div>

                <!-- FORM INPUT NAMA & HP -->
                <h3 class="form-title">Masukkan Data Diri</h3>
                <input type="text" name="nama_pelanggan" placeholder="Nama lengkap">
                <input type="text" name="no_hp" placeholder="No HP">
            </div>

            <!-- KANAN: LANGKAH RESERVASI -->
            <div class="kanan">

                <div class="step-panel">

                    <h5 class="fw-bold mb-4">Langkah Reservasi</h5>

                    <!-- STEP 1 & 2: SELESAI -->
                    <div class="step-item done">
                        <div class="step-num"><i class="bi bi-check"></i></div>
                        <span>Pilih Layanan</span>
                    </div>

                    <div class="step-item done">
                        <div class="step-num"><i class="bi bi-check"></i></div>
                        <span>Pilih Barber</span>
                    </div>

                    <!-- STEP 3: SEDANG AKTIF -->
                    <div class="step-item active">
                        <div class="step-num">3</div>
                        <span>Pilih Jadwal</span>
                    </div>

                    <!-- STEP 4: BELUM AKTIF -->
                    <div class="step-item">
                        <div class="step-num">4</div>
                        <span>Konfirmasi</span>
                    </div>

                    <hr>

                    <!-- TOMBOL LANJUT -->
                    <button type="submit" id="btnNext" class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-lg" disabled>
                        Selanjutnya <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>
            </div>

        </div>
    </form>

</div>

<!-- MODAL UNTUK TANGAL LAIN -->
<div class="modal fade" id="dateModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content bg-dark text-white">

      <div class="modal-header">
        <h5 class="modal-title">Pilih Tanggal Lain</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <input type="date" class="form-control" id="customDate">
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" id="selectDate">Pilih</button>
      </div>

    </div>
  </div>
</div>

<!-- SCRIPT LOGIC (VALIDASI & MODAL) -->
<script>
const tanggal = document.querySelectorAll('input[name="tanggal"]');
const jam = document.querySelectorAll('input[name="jam"]');
const btn = document.getElementById('btnNext');

function cekForm(){
    let tgl = document.querySelector('input[name="tanggal"]:checked');
    let jm = document.querySelector('input[name="jam"]:checked');
    
    // Ambil data Nama & HP
    let nama = document.querySelector('input[name="nama_pelanggan"]').value;
    let hp = document.querySelector('input[name="no_hp"]').value;

    // Tombol akan aktif jika Tanggal, Jam, Nama, dan HP diisi
    btn.disabled = !(tgl && jm && nama && hp);
}

// Listener pada setiap perubahan input
tanggal.forEach(t => t.addEventListener('change', cekForm));
jam.forEach(j => j.addEventListener('change', cekForm));
document.querySelectorAll('input[type="text"]').forEach(i => i.addEventListener('input', cekForm));

// Logika Pilih Tanggal via Modal
document.getElementById('selectDate').addEventListener('click', function(){

    let date = document.getElementById('customDate').value;
    if(!date) return; // Jika kosong, jangan lakukan apa-apa

    // Uncheck semua tanggal yang ada
    document.querySelectorAll('input[name="tanggal"]').forEach(r => r.checked = false);

    // Check tombol "More Dates" agar terlihat dipilih
    document.getElementById('moreDates').checked = true;

    // Tutup Modal
    let modal = bootstrap.Modal.getInstance(document.getElementById('dateModal'));
    modal.hide();

    // Cek form agar tombol lanjut aktif
    cekForm();
});
</script>

</x-layout>