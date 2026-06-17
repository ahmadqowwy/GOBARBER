<x-layout :title="$title">
    <style>
        .booking-bg {
            background: #0f172a;
            min-height: 100vh;
            color: white;
            padding-top: 100px;
            padding-bottom: 50px;
        }

        .receipt-card {
            background: #1e293b;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            margin: 0 auto;
            max-width: 500px;
            position: relative;
        }

        /* Receipt zig-zag effect at bottom */
        .receipt-card::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            height: 10px;
            background-size: 20px 20px;
            background-image: radial-gradient(circle at 10px 10px, transparent 12px, #1e293b 13px);
            background-position: 0 -10px;
        }

        .receipt-header {
            text-align: center;
            border-bottom: 2px dashed #334155;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .receipt-header h3 {
            font-weight: bold;
            color: #3b82f6;
            margin-bottom: 5px;
        }

        .receipt-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 15px;
        }

        .receipt-item .label {
            color: #94a3b8;
        }

        .receipt-item .value {
            font-weight: 600;
            text-align: right;
        }

        .receipt-total {
            border-top: 2px dashed #334155;
            padding-top: 15px;
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            font-size: 18px;
            font-weight: bold;
            color: #10b981;
        }

        .btn-download {
            margin-top: 40px;
            border-radius: 8px;
        }

        .success-icon {
            font-size: 60px;
            color: #10b981;
            text-align: center;
            margin-bottom: 20px;
        }

        @media (max-width: 576px) {
            .booking-bg {
                padding-top: 100px;
                padding-bottom: 30px;
            }

            .receipt-card {
                padding: 25px 20px;
            }

            .success-icon {
                font-size: 50px;
            }

            .receipt-header h3 {
                font-size: 20px;
            }

            .btn-download {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>

    <section class="booking-bg">
        <div class="container">

            <div class="success-icon">
                <i class="bi bi-check-circle-fill"></i>
            </div>

            <h2 class="text-center fw-bold mb-4">Booking Berhasil!</h2>
            <p class="text-center text-secondary mb-5">Terima kasih telah melakukan reservasi. Struk Anda akan diunduh
                secara otomatis.</p>

            <!-- Bagian ini yang akan di-capture oleh html2canvas -->
            <div id="receipt" class="receipt-card">
                <div class="receipt-header">
                    <h3>{{ $booking->shop->shop_name ?? 'Barbershop' }}</h3>
                    <p class="mb-0 text-secondary">Booking ID: #{{ str_pad($booking->booking_id, 6, '0', STR_PAD_LEFT) }}
                    </p>
                </div>

                <div class="receipt-item">
                    <span class="label">Nama Pelanggan</span>
                    <span class="value">{{ $booking->customer->name ?? '-' }}</span>
                </div>

                <div class="receipt-item">
                    <span class="label">Barber</span>
                    <span class="value">{{ $booking->barber->barber_name ?? '-' }}</span>
                </div>

                <div class="receipt-item">
                    <span class="label">Layanan</span>
                    <span class="value">{{ $booking->service->service_name ?? '-' }}</span>
                </div>

                <div class="receipt-item">
                    <span class="label">Tanggal</span>
                    <span class="value">{{ date('d M Y', strtotime($booking->booking_date)) }}</span>
                </div>

                <div class="receipt-item">
                    <span class="label">Jam Booking</span>
                    <span class="value">{{ $booking->time_slot }}</span>
                </div>

                <div class="receipt-item">
                    <span class="label">Status Booking</span>
                    <span class="value text-warning">{{ ucfirst($booking->status) }}</span>
                </div>

                <div class="receipt-total">
                    <span>Total</span>
                    <span>Rp {{ number_format($booking->payment->amount ?? 0, 0, ',', '.') }}</span>
                </div>

                <div class="text-center mt-4">
                    <small class="text-secondary">Tunjukkan struk ini saat datang ke barbershop.</small>
                </div>
            </div>

            <div class="text-center mt-5">
                <button id="btnDownload" class="btn btn-outline-primary btn-download px-4 py-2 me-2">
                    <i class="bi bi-download me-2"></i> Unduh Ulang Struk
                </button>
                <a href="{{ route('home') }}" class="btn btn-primary btn-download px-4 py-2">
                    Kembali ke Beranda
                </a>
            </div>

        </div>
    </section>

    <!-- html2canvas CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fungsi untuk mendownload struk
            function downloadReceipt() {
                const receiptElement = document.getElementById("receipt");

                html2canvas(receiptElement, {
                    backgroundColor: "#1e293b", // Warna background disamakan dengan card
                    scale: 2 // Kualitas lebih tinggi
                }).then(canvas => {
                    // Convert canvas ke image url
                    let image = canvas.toDataURL("image/png");

                    // Buat elemen anchor (link) sementara
                    let a = document.createElement("a");
                    a.href = image;
                    a.download = "Booking_{{ $booking->shop->shop_name }}_{{ $booking->booking_id }}.png";
                    a.click();
                });
            }

            // Jalankan otomatis setelah delay sedikit agar font/CSS ter-load sempurna
            setTimeout(downloadReceipt, 1500);

            // Trigger manual via tombol
            document.getElementById("btnDownload").addEventListener("click", function() {
                downloadReceipt();
            });
        });
    </script>
</x-layout>
