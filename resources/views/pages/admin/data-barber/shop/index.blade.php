@extends('layouts.base-admin')

@section('title')
    <title>Data BarberShop || GoBarberShop</title>
@endsection

@section('content')
    <div class="content-wrapper">

        <div class="card">

            <div class="card-body">

                <h4 class="card-title">
                    Manajemen BarberShop
                </h4>

                <div class="table-responsive">

                    <table id="table-user" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Data Owner</th>
                                <th>Foto</th>
                                <th>Nama BarberShop</th>
                                <th>Lokasi</th>
                                <th>Jam Buka</th>
                                <th>Jam Tutup</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($gobarbershop as $item)
                                <tr>

                                    {{-- Nomor --}}
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- Button Lihat Toko --}}
                                    <td>
                                        <a href="{{ route('admin.owner.index', $item->owner_id) }}"
                                            class="btn btn-info btn-sm">

                                            Lihat

                                        </a>
                                    </td>

                                    <td>

                                        <img src="{{ $item->photo }}" class="img-fluid rounded shadow w-100"
                                            style="cursor:pointer; transition:0.3s;" onmouseover="this.style.opacity='0.8'"
                                            onmouseout="this.style.opacity='1'" data-toggle="modal"
                                            data-target="#imageModal{{ $item->shop_id }}">

                                    </td>

                                    {{-- Nama Shop --}}
                                    <td>{{ $item->shop_name }}</td>

                                    {{-- Lokasi --}}
                                    <td>{{ $item->location }}</td>

                                    {{-- Jam Buka --}}
                                    <td>
                                        {{ \Carbon\Carbon::parse($item->open_time)->format('H:i') }}
                                    </td>

                                    {{-- Jam Tutup --}}
                                    <td>
                                        {{ \Carbon\Carbon::parse($item->close_time)->format('H:i') }}
                                    </td>

                                    {{-- Deskripsi --}}
                                    <td>
                                        {{ $item->description }}
                                    </td>

                                    {{-- Aksi --}}
                                    <td>

                                        <div class="d-flex align-items-center">

                                            {{-- Button Edit --}}
                                            <a href="#" class="btn btn-warning btn-sm mr-2" title="Edit BarberShop">

                                                <i class="ti-pencil-alt"></i>

                                            </a>

                                            {{-- Button Hapus --}}
                                            <form action="#" method="POST" class="form-delete">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Hapus BarberShop">

                                                    <i class="ti-trash"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="8" class="text-center">
                                        Data barber shop belum tersedia
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
    {{-- Modal Preview Foto --}}
    <div class="modal fade" id="imageModal{{ $item->shop_id }}" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">

            <div class="modal-content border-0 bg-transparent">

                {{-- Tombol Close --}}
                <div class="text-right mb-2">

                    <button type="button" class="btn btn-light" data-dismiss="modal">

                        ✕

                    </button>

                </div>

                {{-- Gambar --}}
                <img src="{{ $item->photo }}" alt="Foto BarberShop" class="img-fluid rounded shadow">

            </div>

        </div>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            $('#table-user').DataTable();

        });
    </script>
    <script>
        $('.form-delete').submit(function(e) {

            e.preventDefault();

            let form = this;

            Swal.fire({
                title: 'Hapus Data?',
                text: "Data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {

                if (result.isConfirmed) {
                    form.submit();
                }

            });

        });
    </script>
@endsection
