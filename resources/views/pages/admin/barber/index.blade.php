@extends('layouts.base-admin')

@section('title')
    <title>Manajemen Barber || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Barberman</h4>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('barber.create') }}" class="btn btn-primary mb-3">Tambah Barberman Baru</a>

                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Toko</th>
                                    <th>Nama Barber</th>
                                    <th>Keahlian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barbers as $barber)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($barber->photo)
                                            <img src="{{ $barber->photo }}" alt="Foto Barber" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                        @else
                                            <span class="text-muted">Tidak ada foto</span>
                                        @endif
                                    </td>
                                    <td>{{ $barber->shop ? $barber->shop->shop_name : '-' }}</td>
                                    <td>{{ $barber->barber_name }}</td>
                                    <td>{{ $barber->specialty }}</td>
                                    <td>
                                        <a href="{{ route('barber.edit', $barber->barber_id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('barber.destroy', $barber->barber_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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
        $('#dataTable').DataTable();
    });
</script>
@endsection
