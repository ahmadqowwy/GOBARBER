@extends('layouts.base-admin')

@section('title')
    <title>Manajemen Produk || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Produk</h4>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('manage-produk.create') }}" class="btn btn-primary mb-3">Tambah Produk Baru</a>

                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Toko</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produks as $produk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($produk->photo)
                                            <img src="{{ $produk->photo }}" alt="Foto Produk" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                        @else
                                            <span class="text-muted">Tidak ada foto</span>
                                        @endif
                                    </td>
                                    <td>{{ $produk->shop ? $produk->shop->shop_name : '-' }}</td>
                                    <td>{{ $produk->name_product }}</td>
                                    <td>Rp {{ number_format($produk->price, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('manage-produk.edit', $produk->produk_id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('manage-produk.destroy', $produk->produk_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
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
