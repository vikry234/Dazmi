@extends('layouts.layouts')

@section('content')
<section id="heroo" style="margin-top: 90px;">
    <div class="container col-xxl-6 text-center text-white">
        <div class="title">
            <div class="hero-text">Gallery</div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container-fluid">
        <!-- SEKOLAH -->
        <div class="px-lg-5">
            <div class="row">
                @foreach ($photos as $photo)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white shadow-sm">
                        <a href="{{ asset('/storage/photo/' . $photo->image) }}" style="width: 100%;" data-fancybox="gallery" class="zoomable">
                            <img src="{{ asset('/storage/photo/' . $photo->image) }}" alt="" class="img-fluid card-img-top">
                        </a>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
                                <h5 style="color: #144171;" class="gbr">{{ $photo->judul }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{ $photos->links('pagination::bootstrap-4') }}
</section>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- JavaScript Fancybox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@endsection