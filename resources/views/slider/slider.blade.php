<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner" style="margin-top: 90px">

        @php
        $i = 0;
        @endphp
        @foreach ($slider as $slideritem)
        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
            <img src="{{ asset('uploads/slider/'.$slideritem->image) }}" class="d-block w-100" alt="Slider image">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="animasi-top">{{ $slideritem->heading }}</h1>
                <p class="animasi-text-left">{{ $slideritem->description }}</p>
                <a href="{{ $slideritem->link }}">{{ $slideritem->link_name }}</a>
            </div>
        </div>
        @php
        $i++;
        @endphp
        @endforeach

    </div>
    <div class="carousel-indicators">
        @php
        $j = 0;
        @endphp
        @foreach ($slider as $slideritem)
        <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $j }}" class="{{ $j == 0 ? 'active' : '' }}"></div>
        @php
        $j++;
        @endphp
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script>
    $(document).ready(function() {
        $('#carouselExampleIndicators').carousel({
            interval: 4000 // Mengatur waktu putaran otomatis dalam milidetik
        });
    });
</script>