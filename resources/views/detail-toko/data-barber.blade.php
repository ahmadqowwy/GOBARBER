@extends('layouts.app')

@section('title', 'Data Barber')

@section('content')

<style>
    .barber-section{
        padding:70px 0;
        background:#f5f5f5;
    }

    .barber-title{
        font-size:40px;
        font-weight:bold;
        margin-bottom:40px;
        color:#14005c;
    }

    .barber-card{
        background:white;
        border-radius:20px;
        overflow:hidden;
        text-align:center;
        box-shadow:0 5px 20px rgba(0,0,0,0.08);
        transition:0.3s;
    }

    .barber-card:hover{
        transform:translateY(-5px);
    }

    .barber-card img{
        width:100%;
        height:320px;
        object-fit:cover;
    }

    .barber-body{
        padding:20px;
    }

    .barber-name{
        font-size:24px;
        font-weight:700;
    }

    .barber-specialty{
        color:gray;
        margin:8px 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon{
        background-color:black;
        border-radius:50%;
        padding:20px;
    }
</style>

<section class="barber-section">

    <div class="container">

        <h1 class="barber-title">
            Barber
        </h1>

        <div id="barberCarousel"
             class="carousel slide"
             data-bs-ride="carousel">

            <div class="carousel-inner">

                @foreach($barbers->chunk(3) as $chunk)

                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                    <div class="row g-4 justify-content-center">

                        @foreach($chunk as $barber)

                        <div class="col-md-4">

                            <div class="barber-card">

                                <img
                                    src="https://picsum.photos/400/500?random={{ $barber->barber_id }}"
                                    alt="{{ $barber->barber_name }}">

                                <div class="barber-body">

                                    <div class="barber-name">
                                        {{ $barber->barber_name }}
                                    </div>

                                    <div class="barber-specialty">
                                        {{ $barber->specialty }}
                                    </div>

                                </div>

                            </div>

                        </div>

                        @endforeach

                    </div>

                </div>

                @endforeach

            </div>

            <!-- tombol kiri -->
            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#barberCarousel"
                    data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

            </button>

            <!-- tombol kanan -->
            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#barberCarousel"
                    data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

            </button>

        </div>

    </div>

</section>

@endsection