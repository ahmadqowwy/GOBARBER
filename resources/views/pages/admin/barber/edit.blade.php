@extends('layouts.base-admin')

@section('title')
    <title>Edit Barber || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Barberman</h4>
                    <form class="forms-sample" action="{{ route('barber.update', $barber->barber_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label>Pilih Toko</label>
                            <select name="shop_id" class="form-control" required>
                                <option value="">-- Pilih Toko --</option>
                                @foreach($shops as $shop)
                                    <option value="{{ $shop->shop_id }}" {{ $barber->shop_id == $shop->shop_id ? 'selected' : '' }}>{{ $shop->shop_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama Barberman</label>
                            <input type="text" class="form-control" name="barber_name" value="{{ $barber->barber_name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Keahlian (Specialty)</label>
                            <input type="text" class="form-control" name="specialty" value="{{ $barber->specialty }}">
                        </div>
                        <div class="form-group">
                            <label>Foto Barberman (Biarkan kosong jika tidak ingin mengubah)</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ route('barber.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
