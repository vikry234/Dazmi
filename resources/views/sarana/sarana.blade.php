@extends('layouts.layouts')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<style>
    .card-box {
        height: 90%;
        width: 100%;
    }

    .card-box .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .zoomable {
        overflow: hidden;
        position: relative;
        display: inline-block;
    }

    .zoomable img {
        transition: transform 0.3s ease;
    }

    .zoomable:hover img {
        transform: scale(1.1);
    }

    @media screen and (max-width: 767px) {

        .col-xl-3,
        .col-lg-4,
        .head,
        .p {
            font-size: 15px;
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
</style>

<div class="container-fluid">
    <div class="text-center py-5">
        <h1 id="dazmi" class="dazmi fw-bold">Sarana dan Prasana</h1>
    </div>
    <div class="px-lg-5">
        <div class="row">
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('assets/denah/Kamar Santri.jpeg') }}" data-lightbox="gallery" class="zoomable">
                        <img src="{{ asset('assets/denah/Kamar Santri.jpeg') }}" alt="" class="img-fluid card-img-top">
                    </a>
                    <div class="p-4">
                        <h5 class="head">Asrama santirawan dan santriawati</h5>
                        <p class="small text-muted mb-0">Terdiri dari asrama santi laki-laki dan perempuan</p>
                    </div>
                </div>
            </div>
            <!-- End --><!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('assets/images/galeri2.jpeg') }}" data-lightbox="gallery" class="zoomable">
                        <img src="{{ asset('assets/images/galeri2.jpeg') }}" alt="" class="img-fluid card-img-top">
                    </a>
                    <div class="p-4">
                        <h5 class="head">Ruang Kelas & Ruang Guru</h5>
                        <p class="small text-muted mb-0">Ruang kelas untuk belajar mengajar formal</p>
                    </div>
                </div>
            </div>
            <!-- End --><!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('assets/denah/Ruang Musolla.jpeg') }}" data-lightbox="gallery" class="zoomable">
                        <img src="{{ asset('assets/denah/Ruang Musolla.jpeg') }}" alt="" class="img-fluid card-img-top">
                    </a>
                    <div class="p-4">
                        <h5 class="head">Musholla</h5>
                        <p class="small text-muted mb-0">Tempat dan sarana ibadah</p>
                    </div>
                </div>
            </div>
            <!-- End --><!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('assets/denah/Kamarmandi.jpeg') }}" data-lightbox="gallery" class="zoomable">
                        <img src="{{ asset('assets/denah/Kamarmandi.jpeg') }}" alt="" class="img-fluid card-img-top">
                    </a>
                    <div class="p-4">
                        <h5 class="head">Toilet dan Kamar Mandi</h5>
                        <p class="small text-muted mb-0">Dimanfaatkan untuk sarana kebersihan santri dan guru</p>
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('assets/denah/Kamar Santri.jpeg') }}" data-lightbox="gallery" class="zoomable">
                        <img src="{{ asset('assets/denah/Kamar Santri.jpeg') }}" alt="" class="img-fluid card-img-top">
                    </a>
                    <div class="p-4">
                        <h5 class="head">Dapur dan Tempat Makan</h5>
                        <p class="small text-muted mb-0">Ruang untuk fasilitas memasak dan tempat makan santri dan guru</p>
                    </div>
                </div>
            </div>
            <!-- End --><!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('assets/denah/lapang.jpeg') }}" data-lightbox="gallery" class="zoomable">
                        <img src="{{ asset('assets/denah/lapang.jpeg') }}" alt="" class="img-fluid card-img-top">
                    </a>
                    <div class="p-4">
                        <h5 class="head">Area Lapang</h5>
                        <p class="small text-muted mb-0">Dimanfaatkan untuk fasilitas olahraga santri</p>
                    </div>
                </div>
            </div>
            <!-- End --><!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('assets/denah/Kamar Santri.jpeg') }}" data-lightbox="gallery" class="zoomable">
                        <img src="{{ asset('assets/denah/Kamar Santri.jpeg') }}" alt="" class="img-fluid card-img-top">
                    </a>
                    <div class="p-4">
                        <h5 class="head">Kantin</h5>
                        <p class="small text-muted mb-0">Dimanfaatkan untuk santri mencukupi kebutuhan sehari-hari tanpa perlu keluar
                            dari area pondok
                        </p>
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('assets/denah/lab.jpeg') }}" data-lightbox="gallery" class="zoomable">
                        <img src="{{ asset('assets/denah/lab.jpeg') }}" alt="" class="img-fluid card-img-top">
                    </a>
                    <div class="p-4">
                        <h5 class="head">Lab Komputer</h5>
                        <p class="small text-muted mb-0">Dimanfaatkan untuk para siswa-siswi prakitkum komputer
                        </p>
                    </div>
                </div>
            </div>
            <!-- End -->
        </div>
    </div>
    <script>
        // Ini akan menerapkan Lightbox ke semua elemen yang memiliki atribut data-lightbox
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    </script>
    @endsection