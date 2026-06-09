@extends('layouts.base-admin')

@section('title')
    <title>Manajemen Toko || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Toko</h4>
                    <p class="card-description">
                        Kelola data toko Anda.
                    </p>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('shop.create') }}" class="btn btn-primary mb-3">Tambah Toko Baru</a>

                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama Toko</th>
                                    <th>Lokasi</th>
                                    <th>Waktu Buka</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shops as $shop)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($shop->photo)
                                            <img src="{{ $shop->photo }}" alt="Foto Toko" style="width: 70px; height: 50px; object-fit: cover; border-radius: 5px;">
                                        @else
                                            <span class="text-muted">Tidak ada foto</span>
                                        @endif
                                    </td>
                                    <td>{{ $shop->shop_name }}</td>
                                    <td>{{ $shop->location }}</td>
                                    <td>{{ \Carbon\Carbon::parse($shop->open_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($shop->close_time)->format('H:i') }}</td>
                                    <td>
                                        <a href="{{ route('shop.edit', $shop->shop_id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('shop.destroy', $shop->shop_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
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
