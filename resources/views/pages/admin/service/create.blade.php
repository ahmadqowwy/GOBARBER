@extends('layouts.base-admin')

@section('title')
    <title>Tambah Service || GoBarberShop</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Service</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="forms-sample" action="{{ route('service.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Pilih Toko</label>
                                <select name="shop_id" class="form-control" required>
                                    <option value="">-- Pilih Toko --</option>
                                    @foreach ($shops as $shop)
                                        <option value="{{ $shop->shop_id }}">{{ $shop->shop_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nama Service</label>
                                <input type="text" class="form-control" name="service_name" required>
                            </div>
                            <div class="form-group">
                                <label>Harga (Rp)</label>
                                <input type="number" class="form-control" name="price" step="0.01" placeholder="0.00"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Durasi (Menit)</label>
                                <input type="number" class="form-control" name="duration" required>
                            </div>
                            <div class="form-group">
                                <label>Foto Service</label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="description" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ route('service.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
