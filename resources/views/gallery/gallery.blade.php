@extends('layouts.layouts')

@section('content')
<style>
    .img-fluid.card-img-top {
        width: 100%;
        height: 220px;
    }

    .card-img-top {
        width: 100%;
        height: 200px;
        /* Tinggi gambar pada grid */
        object-fit: cover;
        /* Memastikan gambar mempertahankan aspek rasio */
    }


    @media screen and (max-width: 767px) {

        .col-xl-3,
        .col-lg-4 {
            flex: 0 0 50%;
            max-width: 50%;
        }
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

    @media screen and (min-width: 425) {
        .gbr {
            font-size: 10px;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">


<section class="py-5">
    <div class="container-fluid">
        <div class="text-center">
            <h1 id="dazmi" class="dazmi fw-bold">Gallery</h1>
        </div>
        <!-- SEKOLAH -->
        <div class="px-lg-5">
            <h3>Kegiatan Sekolah</h3>
            <div class="row">
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/galeri2.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/galeri2.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Kegiatan belajar di kelas</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/olahraga.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/olahraga.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Kegiatan olahraga</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/tik.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/tik.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Kegiatan belajar komputer</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/galeri1.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/galeri1.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Kegiatan belajar di kelas</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>

        <!-- PONDOK -->
        <div class="px-lg-5">
            <h3>Kegiatan Pondok</h3>
            <div class="row">
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/Talimsantri1.jpg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/Talimsantri1.jpg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Talim Santri</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/Talimsantri2.jpg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/Talimsantri2.jpg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Talim Santri</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/Talimsantri3.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/Talimsantri3.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Talim Santri</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/Talimsantri4.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/Talimsantri4.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Talim Santri</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>

        <!-- PONDOK -->
        <div class="px-lg-5">
            <div class="row">
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/khataman.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/khataman.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Khataman <i class="ri-hand-sanitizer-fill"></i></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/pentasseni.jpg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/pentasseni.jpg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 class="gbr">Pentas seni santri</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/pentasseni2.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/pentasseni2.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5>Pentas seni santri</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <a href="{{ asset('assets/images/muhadastah.jpeg') }}" data-lightbox="gallery" class="zoomable">
                            <img src="{{ asset('assets/images/muhadastah.jpeg') }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5>Muhadastah santri</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
</section>

<script>
    // Ini akan menerapkan Lightbox ke semua elemen yang memiliki atribut data-lightbox
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
</script>

@endsection