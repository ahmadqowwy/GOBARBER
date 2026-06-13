@extends('layouts.base-admin')

@section('title')
    <title>Data Owner || GoBarberShop</title>
@endsection

@section('content')
    <div class="content-wrapper">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-body">

                        {{-- Header --}}
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">

                            <div>

                                <h4 class="card-title mb-1">

                                    Data Owner ||
                                    {{ $gobarbershop->shop_name }}

                                </h4>

                                <p class="text-muted mb-0">
                                    Detail data owner barber shop
                                </p>

                            </div>

                            {{-- Button Kembali --}}
                            <div class="mt-3 mt-md-0">

                                <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm">

                                    <i class="ti-arrow-left mr-1"></i>
                                    Kembali

                                </a>

                            </div>

                        </div>

                        {{-- Table Responsive --}}
                        <div class="table-responsive">

                            <table id="table-owner" class="table table-bordered table-striped">

                                <thead>

                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th width="15%">Aksi</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        {{-- Nama --}}
                                        <td>{{ $owner->owner_name }}</td>

                                        {{-- Email --}}
                                        <td>{{ $owner->email }}</td>

                                        {{-- Phone --}}
                                        <td>{{ $owner->phone }}</td>

                                        {{-- Aksi --}}
                                        <td>

                                            <div class="d-flex align-items-center justify-content-center">

                                                {{-- Edit --}}
                                                <a href="#" class="btn btn-warning btn-sm mr-2" title="Edit Owner">

                                                    <i class="ti-pencil-alt"></i>

                                                </a>

                                                {{-- Hapus --}}
                                                <form action="#" method="POST" class="form-delete">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Hapus Owner">

                                                        <i class="ti-trash"></i>

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            $('#table-owner').DataTable();

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
