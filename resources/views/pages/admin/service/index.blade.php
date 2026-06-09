@extends('layouts.base-admin')

@section('title')
    <title>Manajemen Service || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Service</h4>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">Tambah Service Baru</a>

                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Toko</th>
                                    <th>Nama Service</th>
                                    <th>Harga</th>
                                    <th>Durasi (Menit)</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($service->photo)
                                            <img src="{{ $service->photo }}" alt="Foto Service" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                        @else
                                            <span class="text-muted">Tidak ada foto</span>
                                        @endif
                                    </td>
                                    <td>{{ $service->shop ? $service->shop->shop_name : '-' }}</td>
                                    <td>{{ $service->service_name }}</td>
                                    <td>Rp {{ number_format($service->price, 0, ',', '.') }}</td>
                                    <td>{{ $service->duration }}</td>
                                    <td>
                                        <a href="{{ route('service.edit', $service->service_id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('service.destroy', $service->service_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
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
