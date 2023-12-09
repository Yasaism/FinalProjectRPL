@extends('layouts.app')

@section('content')
<div class="container-fluid p-0 text-center" style="margin-top: 80px; border-radius: 25%">
    <div class="row g-0">
        <div class="col-md-7">
            <div id="carouselControl" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active">
                        <img src="asset/GHST.jpg" class="d-block w-100 h-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/GW.jpg" class="d-block w-100 h-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/Tekken.jpg" class="d-block w-100 h-100" alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselControl" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselControl" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-5 d-flex align-items-center">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Lorem Ipsum</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="section-heading"><strong>Cara Pemesanan</strong></h2>
        <p class="mb-5 mt-2">Langkah yang mudah untuk menyewa mobil</p>

        <div class="row mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">1. Pilih Device</h5>
                        <p class="card-text">tentukan device yang akan dimainkan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">2. Isi Form</h5>
                        <p class="card-text">Isi form pendaftaran sesuai petunjuk</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">3. Berikan KTM</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="asset/PS.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">PS5 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="asset/PS2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">PS5 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="asset/PCFIX.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Komputer</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="asset/Xbox.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Xbox 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="asset/Xbox2Fix.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Xbox 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="asset/PUMP.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Pump Dance</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #carouselControl {
        max-width: 100%;
        margin: auto;
        height: 100%;
    }
</style>
@endsection
