@extends('layouts.base-admin')

@section('title')
    <title>Tambah Toko || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Toko</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample" action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        @if(Auth::user()->admin->role == 'admin')
                        <div class="form-group">
                            <label>Pilih Owner</label>
                            <select name="owner_id" class="form-control" required>
                                <option value="">-- Pilih Owner --</option>
                                @foreach($owners as $owner)
                                    <option value="{{ $owner->owner_id }}">{{ $owner->owner_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>Nama Toko</label>
                            <input type="text" class="form-control" name="shop_name" placeholder="Nama Toko" required>
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="location" placeholder="Lokasi Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="description" rows="4"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Waktu Buka</label>
                                <input type="time" class="form-control" name="open_time" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Waktu Tutup</label>
                                <input type="time" class="form-control" name="close_time" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto Toko</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('shop.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
