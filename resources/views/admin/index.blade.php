@extends('layouts.layouts')
@section('content')
<section style="margin-top: 100px">
    <div class="container py-5">
        <h3 class="fw-bold mb-4">
            Halaman Dashboard Admin
        </h3>
        <p>Selamat datang di halaman dashboard admin</p>

        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="{{ asset('assets/images/banner2.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Blog Artikel</h5>
                        <p class="card-text">Atur dan kelola artikel kegiatan pesantren.</p>
                        <div class="text-center">
                            <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="{{ asset('assets/images/banner4.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Foto Kegiatan</h5>
                        <p class="card-text">Atur dan kelola Foto kegiatan pesantren.</p>
                        <div class="text-center">
                            <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="{{ asset('assets/images/banner3.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Video Kegiatan</h5>
                        <p class="card-text">Atur dan kelola Video kegiatan pesantren.</p>
                        <div class="text-center">
                            <a href="{{ route('video') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="{{ asset('assets/images/banner1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Banner Carousel</h5>
                        <p class="card-text">Atur dan kelola Banner Carousel pesantren.</p>
                        <div class="text-center">
                            <a href="{{ url('home-slider') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="{{ asset('assets/images/banner1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Sarana</h5>
                        <p class="card-text">Atur dan kelola Sarana Carousel pesantren.</p>
                        <div class="text-center">
                            <a href="{{ route('saranas') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection