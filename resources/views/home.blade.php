@extends('layouts.app')

@section('content')
    <header class="hero">
        <div class="hero-content">
            <div class="content">
                <h1>Find Your Perfect Stay</h1>
                <p>Discover the best hotels and accommodations for your next trip.</p>
                <a href="#search" class="btn-primary">Pesan Sekarang</a>
            </div>
        </div>
    </header>
    <section class="product my-4">
        <div class="container">
            <h2 class="text-center">Jenis Kamar Hotel</h2>
            <div class="row ">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/standar.webp" class="card-img-top" alt="Kamar Standar">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Standar</h5>
                            <p class="card-text">Fasilitas: TV, AC, Wi-Fi</p>
                            <p class="card-text"><strong>Harga: Rp100.000 / malam</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/deluxe.jpg" class="card-img-top" alt="Kamar Deluxe">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Deluxe</h5>
                            <p class="card-text">Fasilitas: TV, AC, Wi-Fi, Mini Bar</p>
                            <p class="card-text"><strong>Harga: Rp500.000 / malam</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/exercise.jpeg" class="card-img-top" alt="Kamar Eksekutif">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Eksekutif</h5>
                            <p class="card-text">Fasilitas: TV, AC, Wi-Fi, Mini Bar, Jacuzzi</p>
                            <p class="card-text"><strong>Harga: Rp1.000.000 / malam</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
