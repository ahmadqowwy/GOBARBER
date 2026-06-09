@extends('layouts.base-admin')

@section('title')
    <title>Data User || GoBarberShop</title>
@endsection

@section('content')
    <div class="content-wrapper">

        <div class="card">

            <div class="card-body">

                <h4 class="card-title">
                    Manajemen User
                </h4>

                <div class="table-responsive">

                    <table id="table-user" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($user as $item)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->username }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>{{ $item->role }}</td>

                                    {{-- Aksi --}}
                                    <td>

                                        <div class="d-flex align-items-center">

                                            {{-- Button Edit --}}
                                            <a href="#" class="btn btn-warning btn-sm mr-2">
                                                <i class="ti-pencil-alt"></i>

                                            </a>
                                            {{-- Button Hapus --}}
                                            <form action="{{ route('user.delete', $item->admin_id) }}" method="POST"
                                                class="form-delete">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus User">

                                                    <i class="ti-trash"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="text-center">
                                        Data user belum tersedia
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

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
