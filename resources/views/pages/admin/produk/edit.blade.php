@extends('layouts.base-admin')

@section('title')
    <title>Edit Produk || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Produk</h4>
                    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('manage-produk.update', $produk->produk_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="shop_id">Toko</label>
                            <select class="form-control" id="shop_id" name="shop_id" required>
                                <option value="">-- Pilih Toko --</option>
                                @foreach($shops as $shop)
                                    <option value="{{ $shop->shop_id }}" {{ $produk->shop_id == $shop->shop_id ? 'selected' : '' }}>{{ $shop->shop_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name_product">Nama Produk</label>
                            <input type="text" class="form-control" id="name_product" name="name_product" value="{{ old('name_product', $produk->name_product) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Harga (Rp)</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $produk->price) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $produk->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="photo">Foto Produk</label>
                            @if($produk->photo)
                                <div class="mb-2">
                                    <img src="{{ $produk->photo }}" alt="Foto Produk" style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;">
                                </div>
                            @endif
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ route('manage-produk.index') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
