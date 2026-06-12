# Log Perubahan Project GoBarber

> Framework: **Laravel** | Panel Admin: **Skydash Template**

---

## Sesi 1 — Implementasi Panel Admin & RBAC

### Role-Based Access Control (RBAC)
- Tabel `admins` memiliki kolom `role` dengan dua nilai: `admin` (adminutama) dan `pengguna` (owner).
- Setiap controller menggunakan helper `getAccessibleShopIds($admin)` untuk membatasi data yang dapat diakses berdasarkan role.
- Role `admin` dapat mengakses semua data lintas toko.
- Role `pengguna` hanya dapat mengakses data toko yang terhubung ke akun Owner mereka.

### Fitur yang Diimplementasikan

| Fitur | Role Admin | Role Pengguna |
|---|---|---|
| Manajemen User | ✅ CRUD | ❌ |
| Manajemen Toko | ✅ CRUD | ✅ CRUD (toko sendiri) |
| Manajemen Barberman | ✅ CRUD | ✅ CRUD (toko sendiri) |
| Manajemen Service | ✅ CRUD | ✅ CRUD (toko sendiri) |
| Data Customer | ✅ View | ✅ View (toko sendiri) |
| Data Booking | ✅ View + Update Status | ✅ View + Update Status (toko sendiri) |
| Data Payment | ✅ View | ✅ View (toko sendiri) |
| Dashboard Statistik | ✅ Semua toko | ✅ Toko sendiri |

### File yang Dibuat / Dimodifikasi
- `app/Http/Controllers/ShopController.php` — CRUD toko
- `app/Http/Controllers/BarberController.php` — CRUD barberman
- `app/Http/Controllers/ServiceController.php` — CRUD service
- `app/Http/Controllers/CustomerController.php` — View customer + booking
- `app/Http/Controllers/BookingController.php` — View + update status booking
- `app/Http/Controllers/PaymentController.php` — View payment
- `app/Http/Controllers/DashboardController.php` — Statistik dinamis per role
- `resources/views/pages/admin/` — Semua halaman view (index, create, edit, show)
- `resources/views/layouts/partials/admin/sidebar-admin.blade.php` — Sidebar navigasi

---

## Sesi 2 — Penambahan Fitur Foto (Base64)

### Latar Belakang
Foto disimpan sebagai string **Base64** di database (bukan file di server) untuk mengurangi beban server.

### Perubahan pada Barberman
- **Migration** `2026_05_16_124050_create_barbers_table.php`: Kolom `photo` diubah dari `string` menjadi `longText()->nullable()`.
- **Model** `app/Models/Barber.php`: `photo` ditambahkan ke `$fillable`.
- **Controller** `BarberController.php`: Fungsi `store` dan `update` memproses upload gambar menjadi Base64.
- **Views** `barber/index.blade.php`, `barber/create.blade.php`, `barber/edit.blade.php`: Ditambahkan input file dan tampilan gambar.

### Perubahan pada Toko (Shop)
- **Migration** `2026_05_16_124008_create_go_barber_shops_table.php`: Kolom `photo` diubah dari `string` menjadi `longText()->nullable()`.
- **Controller** `ShopController.php`: Fungsi `store` dan `update` diubah dari `Storage::disk('public')` menjadi proses encode Base64.
- **View** `shop/index.blade.php`: Tampilan gambar menggunakan `src="{{ $shop->photo }}"` langsung (bukan `asset('storage/...')`).

### Perubahan pada Service
- **Migration** `2026_05_16_124109_create_services_table.php`: Kolom `photo` diubah dari `string` menjadi `longText()->nullable()`.
- **Model** `app/Models/Service.php`: `photo` ditambahkan ke `$fillable`.
- **Controller** `ServiceController.php`: Fungsi `store` dan `update` memproses upload gambar menjadi Base64.
- **Views** `service/index.blade.php`, `service/create.blade.php`, `service/edit.blade.php`: Ditambahkan input file, tampilan gambar, placeholder harga (`0.00`), dan `step="0.01"`.

> **Catatan:** Setelah perubahan migration ini, wajib menjalankan:
> ```bash
> php artisan migrate:fresh --seed
> ```

---

## Sesi 3 — Perbaikan Bug & Otorisasi

### Bug: Role Pengguna Tidak Bisa Tambah & Update Toko
**Penyebab:**
1. Saat `pengguna` mencoba tambah toko, sistem gagal menemukan `owner_id` karena profil Owner belum ada di database untuk akun tersebut.
2. Tidak ada proteksi otorisasi yang lengkap di fungsi `edit()`, `update()`, dan `destroy()`.

**Solusi yang Diterapkan di `ShopController.php`:**
- Fungsi `store()`: Menggunakan `Owner::firstOrCreate()` — jika profil Owner belum ada, akan dibuat otomatis dari data User yang login.
- Fungsi `edit()`, `update()`, `destroy()`: Ditambahkan pengecekan bahwa `pengguna` hanya bisa mengakses toko yang merupakan miliknya.

### Penambahan Tampilan Error Validasi
Sebelumnya, jika form gagal validasi (misal foto terlalu besar), halaman tidak menampilkan pesan error apapun. Blok `@if ($errors->any())` ditambahkan pada halaman:
- `shop/create.blade.php`, `shop/edit.blade.php`
- `barber/create.blade.php`
- `service/create.blade.php`, `service/edit.blade.php`

---

## Sesi 4 — Upgrade Tabel ke DataTables

### Halaman yang Diubah
Semua tabel pada panel admin diubah menjadi **DataTables** (v1.13.6, sudah tersedia di layout `base-admin.blade.php`) untuk mendapatkan fitur:
- **Pencarian** otomatis
- **Pengurutan** kolom
- **Paginasi** otomatis

| Halaman | ID Tabel |
|---|---|
| `shop/index.blade.php` | `#dataTable` |
| `barber/index.blade.php` | `#dataTable` |
| `service/index.blade.php` | `#dataTable` |
| `customer/index.blade.php` | `#dataTable` |
| `customer/show.blade.php` | `#dataTable` |
| `booking/index.blade.php` | `#dataTable` |
| `payment/index.blade.php` | `#dataTable` |

> *Halaman `user/index.blade.php` sudah menggunakan DataTables (`#table-user`) sebelumnya.*

Setiap halaman ditambahkan blok `@section('js')` dengan inisialisasi:
```javascript
$(document).ready(function() {
    $('#dataTable').DataTable();
});
```

---

## Sesi 5 — Pembersihan Dashboard

- Pengguna menghapus elemen-elemen template bawaan Skydash yang tidak relevan dari `dashboard.blade.php`:
  - Widget cuaca (kota Bangalore)
  - Bagian *Order Details* & *Sales Report*
  - Bagian *Detailed Reports* (carousel)
  - Tabel *Top Products*
  - Daftar *To Do List*
- Dashboard sekarang menampilkan hanya kartu statistik yang relevan (jumlah service, barberman, customer, booking) sesuai role.

---

## Catatan Penting untuk Developer

1. **Jalankan `php artisan migrate:fresh --seed`** setiap kali ada perubahan struktur migration (terutama setelah perubahan tipe kolom `photo`).
2. **Foto disimpan sebagai Base64** — kolom foto pada tabel `go_barber_shops`, `barbers`, dan `services` menggunakan tipe `longText` di database.
3. **CDN DataTables** sudah terintegrasi di `layouts/base-admin.blade.php` — tidak perlu instalasi NPM tambahan.
4. **SweetAlert2** sudah terintegrasi di layout untuk notifikasi `session('success')` dan `session('error')`.
