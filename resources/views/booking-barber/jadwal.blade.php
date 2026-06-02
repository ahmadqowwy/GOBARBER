<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pilih Jadwal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
    background-color:#0f172a;
    color:#fff;
    padding:40px;
    font-family:Arial,sans-serif;
}

.container{
    display:flex;
    gap:40px;
}

.kiri{ flex:2; }
.kanan{ flex:1; }

h2{
    margin-bottom:30px;
}

/* TANGGAL */
.tanggal{
    display:flex;
    gap:15px;
    margin-bottom:30px;
}

.tgl-radio,
.jam-radio{
    display:none;
}

.card-tanggal{
    width:90px;
    background:#1e293b;
    color:#fff;
    text-align:center;
    padding:15px;
    border-radius:12px;
    cursor:pointer;
    border:1px solid #334155;
    transition:.25s;
}

.card-tanggal:hover{
    transform:translateY(-3px);
    border-color:#3b82f6;
}

.tgl-radio:checked + .card-tanggal{
    background:#253349;
    border-color:#3b82f6;
    transform:scale(1.05);
}

/* JAM (TIDAK DIUBAH SAMA SEKALI) */
.jam{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
}

.card-jam{
    background:#1e293b;
    color:#e2e8f0;
    padding:14px;
    text-align:center;
    border-radius:12px;
    cursor:pointer;
    border:1px solid #334155;
    transition:.25s;
}

.card-jam:hover{
    transform:translateY(-3px);
    border-color:#3b82f6;
}

.jam-radio:checked + .card-jam{
    background:#253349;
    border-color:#3b82f6;
    transform:scale(1.05);
}

/* STEP — SAMA PERSIS PUNYAMU */
.step-panel {
    background-color: #1e293b;
    border-radius: 16px;
    padding: 30px;
}

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
    color: #10b981;
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
/* Memberi jarak atas agar judul tidak menempel dengan elemen di atasnya */
.form-title {
    margin-top: 30px; 
    margin-bottom: 15px; /* Jarak antara judul dan input */
    font-size: 18px;
    font-weight: bold;
}

/* Memberi jarak antar input agar tidak menempel */
input {
    margin-bottom: 15px; 
    width: 100%;
    padding: 10px;
}
.card-jam small{
    color:#94a3b8;
    font-size:12px;
}

</style>
</head>

<body>

<form method="POST" action="{{ route('booking.konfirmasi') }}">
    @csrf

    <input type="hidden" name="layanan_id" value="{{ request('layanan_id') }}">
    <input type="hidden" name="barber_id" value="{{ request('barber_id') }}">

    <h2>Pilih Tanggal dan Jam</h2>

    <div class="container">

        <div class="kiri">

            <!-- TANGGAL -->
            <div class="tanggal">

    <label>
        <input type="radio" name="tanggal" value="2026-09-09" class="tgl-radio" required>
        <div class="card-tanggal">Sen<br>Sep 9</div>
    </label>

    <label>
        <input type="radio" name="tanggal" value="2026-09-10" class="tgl-radio">
        <div class="card-tanggal">Sel<br>Sep 10</div>
    </label>

    <label>
        <input type="radio" name="tanggal" value="2026-09-11" class="tgl-radio">
        <div class="card-tanggal">Rab<br>Sep 11</div>
    </label>

    <label>
        <input type="date" id="customDate" style="display:none;">
        <input type="radio" name="tanggal" value="" id="moreDates" class="tgl-radio">
        <div class="card-tanggal" onclick="document.getElementById('customDate').showPicker()">
            <i class="bi bi-calendar"></i><br>
            More Dates
        </div>
    </label>

</div>
            <!-- JAM -->
            <div class="jam">

    <label><input type="radio" name="jam" value="12.00 - 12.45" class="jam-radio" required><div class="card-jam">12.00 - 12.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="13.00 - 13.45" class="jam-radio"><div class="card-jam">13.00 - 13.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="14.00 - 14.45" class="jam-radio"><div class="card-jam">14.00 - 14.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="15.00 - 15.45" class="jam-radio"><div class="card-jam">15.00 - 15.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="16.00 - 16.45" class="jam-radio"><div class="card-jam">16.00 - 16.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="17.00 - 17.45" class="jam-radio"><div class="card-jam">17.00 - 17.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="18.00 - 18.45" class="jam-radio"><div class="card-jam">18.00 - 18.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="19.00 - 19.45" class="jam-radio"><div class="card-jam">19.00 - 19.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="20.00 - 20.45" class="jam-radio"><div class="card-jam">20.00 - 20.45<br><small>Tersedia</small></div></label>

    <label><input type="radio" name="jam" value="21.00 - 22.00" class="jam-radio"><div class="card-jam">21.00 - 22.00<br><small>Tersedia</small></div></label>

</div>

            <h3 class="form-title">Masukkan Data Diri</h3>

            <input
                type="text"
                name="nama"
                class="form-control mb-3"
                placeholder="Nama Lengkap"
                required
            >

            <input
                type="text"
                name="no_hp"
                class="form-control mb-3"
                placeholder="No HP"
                required
            >

        </div>

        <div class="kanan">

            <div class="step-panel">

                <h5 class="fw-bold mb-4">Langkah Reservasi</h5>

                <div class="step-item done">
                    <div class="step-num">
                        <i class="bi bi-check"></i>
                    </div>
                    <span>Pilih Layanan</span>
                </div>

                <div class="step-item done">
                    <div class="step-num">
                        <i class="bi bi-check"></i>
                    </div>
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

                <button
                    type="submit"
                    id="btnNext"
                    class="btn btn-primary w-100"
                >
                    Selanjutnya
                </button>

            </div>

        </div>

    </div>

</form>

<!-- MODAL -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

const tanggal = document.querySelectorAll('input[name="tanggal"]');
const jam = document.querySelectorAll('input[name="jam"]');
const btn = document.getElementById('btnNext');

function cekForm(){
    let tgl = document.querySelector('input[name="tanggal"]:checked');
    let jm = document.querySelector('input[name="jam"]:checked');
    btn.disabled = !(tgl && jm);
}

tanggal.forEach(t => t.addEventListener('change', cekForm));
jam.forEach(j => j.addEventListener('change', cekForm));

document.getElementById('selectDate').addEventListener('click', function(){

    let date = document.getElementById('customDate').value;
    if(!date) return;

    document.querySelectorAll('input[name="tanggal"]').forEach(r => r.checked = false);

    document.getElementById('moreDates').checked = true;

    let modal = bootstrap.Modal.getInstance(document.getElementById('dateModal'));
    modal.hide();

    cekForm();
});

</script>
<script>

document.getElementById('customDate').addEventListener('change', function(){

    const date = new Date(this.value);

    const bulan = [
        'Jan','Feb','Mar','Apr','Mei','Jun',
        'Jul','Agu','Sep','Okt','Nov','Des'
    ];

    document.querySelector('#moreDates + .card-tanggal').innerHTML =
        date.getDate() + '<br>' + bulan[date.getMonth()];

    document.getElementById('moreDates').value = this.value;
    document.getElementById('moreDates').checked = true;
});

</script>

</body>
</html> 