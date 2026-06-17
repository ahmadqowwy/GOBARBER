@extends('layouts.base-admin')

@section('title')
    <title>Tambah Produk || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Produk Baru</h4>
                    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('manage-produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="shop_id">Toko</label>
                            <select class="form-control" id="shop_id" name="shop_id" required>
                                <option value="">-- Pilih Toko --</option>
                                @foreach($shops as $shop)
                                    <option value="{{ $shop->shop_id }}">{{ $shop->shop_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name_product">Nama Produk</label>
                            <input type="text" class="form-control" id="name_product" name="name_product" value="{{ old('name_product') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Harga (Rp)</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="photo">Foto Produk</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="{{ route('manage-produk.index') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
