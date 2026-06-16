<x-layout :title="$title">
 
<style>
    .booking-bg {
        background-color: #0f172a;
        color: #fff;
        min-height: 100vh;
        padding: 100px 40px 40px 40px;
        font-family: Arial, sans-serif;
    }
 
    .container {
        display: flex;
        gap: 40px;
    }
 
    .kiri { flex: 2; }
    .kanan { flex: 1; }
 
    h2 { margin-bottom: 30px; }
 
    /* TANGGAL */
    .tanggal {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }
 
    .tgl-radio, .jam-radio { display: none; }
 
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
 
    .card-tanggal:hover { transform: translateY(-3px); border-color: #3b82f6; }
    .tgl-radio:checked + .card-tanggal {
        background: #253349;
        border-color: #3b82f6;
        transform: scale(1.05);
    }
 
    /* JAM GRID */
    .jam {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        margin-bottom: 30px;
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
 
    .card-jam:hover { transform: translateY(-3px); border-color: #3b82f6; }
 
    .jam-radio:checked + .card-jam {
        background: #253349;
        border-color: #3b82f6;
        transform: scale(1.05);
    }
 
    .card-jam small { color: #94a3b8; font-size: 12px; }
 
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
    .step-item.active { color: #3b82f6; font-weight: bold; }
    .step-item.done  { color: #10b981; }
 
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
        flex-shrink: 0;
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
 
    /* INPUT FORM */
    .form-title { margin-top: 30px; margin-bottom: 15px; font-size: 18px; font-weight: bold; }
 
    .input-diri {
        margin-bottom: 15px;
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #334155;
        background-color: #1e293b;
        color: #fff;
        font-size: 15px;
        box-sizing: border-box;
        outline: none;
        transition: border-color .2s;
    }
    .input-diri:focus { border-color: #3b82f6; }
    .input-diri::placeholder { color: #64748b; }

    /* RESPONSIVE */
    @media (max-width: 991px) {
        .container { flex-direction: column; gap: 20px; }
        .kiri, .kanan { flex: 1; width: 100%; }
        .step-panel { position: static !important; }
        .jam { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 576px) {
        .jam { grid-template-columns: repeat(2, 1fr); }
        .booking-bg { padding: 100px 15px 20px 15px; }
    }
</style>
 
<section class="booking-bg">
 
    <form method="POST" action="{{ route('booking.konfirmasi') }}">
        @csrf
 
        {{-- Bawa data dari langkah sebelumnya --}}
        <input type="hidden" name="shop_id" value="{{ request('shop_id') }}">
        <input type="hidden" name="layanan_id" value="{{ request('layanan_id') }}">
        <input type="hidden" name="barber_id"  value="{{ request('barber_id') }}">
 
        <h2>Pilih Tanggal dan Jam</h2>
 
        <div class="container">
 
            <!-- ===== KIRI: TANGGAL, JAM, DATA DIRI ===== -->
            <div class="kiri">
 
                <!-- TANGGAL -->
                <div class="tanggal">
 
                    @php
                        $hariId = ['Min','Sen','Sel','Rab','Kam','Jum','Sab'];
                        $bulanId = ['','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
                    @endphp

                    @for ($i = 0; $i < 7; $i++)
                        @php
                            $tgl      = now()->addDays($i);
                            $namaHari = $hariId[$tgl->dayOfWeek];
                            $tanggal  = $tgl->day;
                            $bulan    = $bulanId[(int)$tgl->month];
                            $value    = $tgl->format('Y-m-d');
                        @endphp
                        <label>
                            <input type="radio" name="tanggal" value="{{ $value }}"
                                   class="tgl-radio" {{ $i === 0 ? 'required' : '' }}>
                            <div class="card-tanggal">{{ $namaHari }}<br>{{ $bulan }} {{ $tanggal }}</div>
                        </label>
                    @endfor

                    {{-- Kartu "More Dates" — value diisi JS setelah user pilih dari datepicker --}}
                    <label>
                        <input type="radio" name="tanggal" value="" id="moreDates" class="tgl-radio">
                        <div class="card-tanggal" id="moreDatesCard" data-bs-toggle="modal" data-bs-target="#dateModal">
                            <i class="bi bi-calendar"></i><br>More<br>Dates
                        </div>
                    </label>
 
                </div>
 
                <!-- JAM -->
                <div class="jam">
                    @foreach([
                        '12.00 - 12.45','13.00 - 13.45','14.00 - 14.45','15.00 - 15.45',
                        '16.00 - 16.45','17.00 - 17.45','18.00 - 18.45','19.00 - 19.45',
                        '20.00 - 20.45','21.00 - 22.00',
                    ] as $slot)
                    <label>
                        <input type="radio" name="jam" value="{{ $slot }}" class="jam-radio"
                               {{ $loop->first ? 'required' : '' }}>
                        <div class="card-jam">{{ $slot }}<br><small>Tersedia</small></div>
                    </label>
                    @endforeach
                </div>
 
                <!-- DATA DIRI -->
                <h3 class="form-title">Masukkan Data Diri</h3>
                <input type="text" name="nama_pelanggan" class="input-diri"
                       placeholder="Nama lengkap" required autocomplete="off">
                <input type="email" name="email" class="input-diri"
                       placeholder="Email aktif" required autocomplete="off">
                <input type="text" name="no_hp" class="input-diri"
                       placeholder="No HP (contoh: 08123456789)" required autocomplete="off">
 
            </div>
 
            <!-- ===== KANAN: LANGKAH & TOMBOL ===== -->
            <div class="kanan">
                <div class="step-panel position-sticky" style="top: 20px;">
                    <h5 class="fw-bold mb-4">Langkah Reservasi</h5>
 
                    <div class="step-item done">
                        <div class="step-num"><i class="bi bi-check"></i></div>
                        <span>Pilih Layanan</span>
                    </div>
 
                    <div class="step-item done">
                        <div class="step-num"><i class="bi bi-check"></i></div>
                        <span>Pilih Barber</span>
                    </div>
 
                    <div class="step-item active">
                        <div class="step-num">3</div>
                        <span>Pilih Jadwal</span>
                    </div>
 
                    <div class="step-item">
                        <div class="step-num">4</div>
                        <span>Konfirmasi</span>
                    </div>
 
                    <hr>
 
                    <button type="submit" id="btnNext"
                            class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-lg"
                            disabled>
                        Selanjutnya <i class="bi bi-arrow-right ms-2"></i>
                    </button>
 
                    {{-- Pesan validasi kecil --}}
                    <p id="msgValidasi" class="text-warning mt-3 mb-0" style="font-size:13px; display:none;">
                        Lengkapi tanggal, jam, nama, email, dan no HP terlebih dahulu.
                    </p>
 
                </div>
            </div>
 
        </div>
    </form>
 
</section>
 
<!-- ===== MODAL TANGGAL LAIN ===== -->
<div class="modal fade" id="dateModal" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
 
            <div class="modal-header">
                <h5 class="modal-title" id="dateModalLabel">Pilih Tanggal Lain</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
 
            <div class="modal-body">
                <label class="form-label text-secondary mb-2" for="customDate">Pilih tanggal:</label>
                <input type="date" class="form-control" id="customDate"
                       min="{{ date('Y-m-d', strtotime('+1 day')) }}">
            </div>
 
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="btnSelectDate">Pilih Tanggal</button>
            </div>
 
        </div>
    </div>
</div>
 
<!-- ===== SCRIPT ===== -->
<script>
(function () {
    const btn         = document.getElementById('btnNext');
    const msgVal      = document.getElementById('msgValidasi');
    const moreDates   = document.getElementById('moreDates');
    const moreDatesCard = document.getElementById('moreDatesCard');
 
    /* ---- Cek semua field terisi ---- */
    function cekForm() {
        const tgl  = document.querySelector('input[name="tanggal"]:checked');
        const jm   = document.querySelector('input[name="jam"]:checked');
        const nama = document.querySelector('input[name="nama_pelanggan"]').value.trim();
        const email = document.querySelector('input[name="email"]').value.trim();
        const hp   = document.querySelector('input[name="no_hp"]').value.trim();
 
        // Tanggal valid: radio terceklis DAN valuenya tidak kosong
        const tglValid = tgl && tgl.value !== '';
 
        const allFilled = tglValid && jm && nama && email && hp;
 
        btn.disabled = !allFilled;
        msgVal.style.display = allFilled ? 'none' : 'block';
    }
 
    /* ---- Listener Radio Tanggal ---- */
    document.querySelectorAll('input[name="tanggal"]').forEach(function (r) {
        r.addEventListener('change', cekForm);
    });
 
    /* ---- Listener Radio Jam ---- */
    document.querySelectorAll('input[name="jam"]').forEach(function (j) {
        j.addEventListener('change', cekForm);
    });
 
    /* ---- Listener Input Teks ---- */
    document.querySelector('input[name="nama_pelanggan"]').addEventListener('input', cekForm);
    document.querySelector('input[name="email"]').addEventListener('input', cekForm);
    document.querySelector('input[name="no_hp"]').addEventListener('input', cekForm);
 
    /* ---- Tombol "Pilih Tanggal" di Modal ---- */
    document.getElementById('btnSelectDate').addEventListener('click', function () {
        const dateVal = document.getElementById('customDate').value;
        if (!dateVal) {
            alert('Silakan pilih tanggal terlebih dahulu.');
            return;
        }
 
        // Set value radio "More Dates" ke tanggal yang dipilih
        moreDates.value   = dateVal;
        moreDates.checked = true;
 
        // Update tampilan kartu
        const d     = new Date(dateVal);
        const bulan = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
        const hari  = ['Min','Sen','Sel','Rab','Kam','Jum','Sab'];
        moreDatesCard.innerHTML =
            hari[d.getDay()] + '<br>' + d.getDate() + ' ' + bulan[d.getMonth()];
 
        // Tutup modal
        bootstrap.Modal.getInstance(document.getElementById('dateModal')).hide();
 
        cekForm();
    });
 
    /* ---- Jika user buka modal lalu tutup tanpa pilih, uncheck moreDates ---- */
    document.getElementById('dateModal').addEventListener('hidden.bs.modal', function () {
        if (moreDates.checked && moreDates.value === '') {
            moreDates.checked = false;
            moreDatesCard.innerHTML = '<i class="bi bi-calendar"></i><br>More<br>Dates';
            cekForm();
        }
    });
 
    /* ---- Jalankan sekali saat halaman load ---- */
    cekForm();
})();
</script>
 
</x-layout>