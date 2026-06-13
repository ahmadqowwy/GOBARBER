@extends('layouts.base-admin')

@section('title')
    <title>Edit Service || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Service</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample" action="{{ route('service.update', $service->service_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label>Pilih Toko</label>
                            <select name="shop_id" class="form-control" required>
                                <option value="">-- Pilih Toko --</option>
                                @foreach($shops as $shop)
                                    <option value="{{ $shop->shop_id }}" {{ $service->shop_id == $shop->shop_id ? 'selected' : '' }}>{{ $shop->shop_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama Service</label>
                            <input type="text" class="form-control" name="service_name" value="{{ $service->service_name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Harga (Rp)</label>
                            <input type="number" class="form-control" name="price" value="{{ $service->price }}" step="0.01" placeholder="0.00" required>
                        </div>
                        <div class="form-group">
                            <label>Durasi (Menit)</label>
                            <input type="number" class="form-control" name="duration" value="{{ $service->duration }}" required>
                        </div>
                        <div class="form-group">
                            <label>Foto Service (Biarkan kosong jika tidak ingin mengubah)</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ route('service.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
