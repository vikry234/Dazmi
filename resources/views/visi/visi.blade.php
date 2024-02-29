@extends('layouts.layouts')

@section('content')
<section id="heroo" style="margin-top: 90px;">
    <div class="container text-center text-white">
        <div class="title">
            <div class="hero-text">Visi & Misi</div>
        </div>
    </div>
</section>
<div class="container py-5">
    <div class="card-body d-flex align-items-center">
        <div class="col-md-6 m-0">
            <img src="{{ asset('assets/images/Group_1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-5 p-1">
            <div class="card mb-4 border-0">
                <div class="row g-0">
                    <div class="col-md-12 rounded-3">
                        <div class="card-body">
                            <h1 id="dazmi" class="fw-bold text-center" style="color: #144171;">
                                VISI
                            </h1>
                            <h5 style="font-size: 15;" class="card-title visi">
                                Pondok Pesantren Daarul Azmi memiliki visi Terwujudnya insan
                                Ahlusunnah Wal Jama’ah, yang berkahlak, berdisiplin tinggi, berwawasan
                                luas dan tangguh dalam kompetisi global.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card mb-4 border-0">
                <div class="row g-0">
                    <div class="col-md-12 rounded-3">
                        <div class="card-body">
                            <h1 id="dazmi" class="fw-bold text-center" style="color: #144171;">
                                MISI
                            </h1>
                            <h5 style="font-size: 15;" class="card-title visi">
                                Mendidik Santri memiliki Kesadaran Ketuhanan (spiritual makrifat)
                                Membentuk santri yang berkepribadian dan berkarakter dengan
                                faham Ahlussunnah Wal Jama’ah.
                            </h5>
                            <h5 style="font-size: 15;" class="card-title visi">
                                Mengedepankan akhlak dengan membudayakan berkata sopan,
                                tawadhu, qana’ah, saling menghargai dan saling membantu terhadap
                                sesama.
                            </h5>
                            <h5 style="font-size: 15;" class="card-title visi">
                                Memberikan santri Pendidikan agar mampu melayani umat dengan
                                nilai dakwah islam.
                            </h5>
                            <h5 style="font-size: 15;" class="card-title visi">
                                Meningkatkan kemauan dan kemampuan intelektual.
                            </h5>
                            <h5 style="font-size: 15;" class="card-title visi">
                                Melatih berbahasa Arab dan Inggris dengan baik.
                            </h5>
                            <h5 style="font-size: 15;" class="card-title visi">
                                Mempersiapkan santri yang memiliki disiplin tinggi dalam segala hal.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection