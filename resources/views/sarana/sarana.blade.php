@extends('layouts.layouts')

@section('content')
<section id="heroo" style="margin-top: 90px;">
    <div class="container text-center text-white">
        <div class="title">
            <div class="hero-text">Sarana dan Prasarana</div>
        </div>
    </div>
</section>

<div class="container-fluid py-5">
    <div class="px-lg-5">
        <div class="row" style="color: #144171;">
            @foreach ($saranas as $item)
            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-box">
                    <a href="{{ asset('storage/saranas/' . $item->image) }}" data-fancybox="gallery" class="zoomable">
                        <img src="{{ asset('storage/saranas/' . $item->image) }}" width="100%" alt="" class="pb-3 img-fluid card-img-top">
                    </a>
                    <div class="d-flex justify-content-center rounded-pill bg-light pt-2">
                        <h5 class="gbr">{{ $item->judul }}</h5>
                    </div>
                    <p class="small pt-3 text-center mb-2">{{ $item->desc }}</p>
                </div>
            </div>
            @endforeach
        </div>
        {{ $saranas->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection