@extends('layouts.layouts')

<style>
    .timeline-sm {
        padding-left: 110px;
    }

    .text-muted {
        color: #1A3257 !important;
    }

    .timeline-sm .timeline-sm-item .timeline-sm-date {
        position: absolute;
        left: -100px;
    }

    .timeline-sm .timeline-sm-item {
        color: #1A3257;
        position: relative;
        padding-bottom: 50px;
        padding-left: 40px;
        border-left: 2px solid #dee2e6;
    }

    .timeline-sm .timeline-sm-item:after {
        content: "";
        display: block;
        position: absolute;
        top: 3px;
        left: -7px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #1A3257;
    }
</style>

@section('content')
<section class="bg-light">
    <div class="section-foto parallax">
        <h1 id="dazmi" class="dazmi fw-bold">MILESTONE</h1>
    </div>
    <p class="container text-center fw-bold" style="font-size: 25px"> Perjalanan Pondok Pesantren Daarul
        Azmi <br> dimulai dari tahun ke tahun</p>
    <div class=" container pt-2 pb-5">
        <div class="shadow-sm border-0 card-box text-bio">
            <ul class="list-unstyled text-muted timeline-sm">
                <li class="timeline-sm-item" data-asw-orgfontsize="16">
                    <span class="timeline-sm-date">2020</span>
                    <p>
                        Sejak tahun 2020, Pimpinan Pondok Pesantren memberikan
                        talim pembelajaran kepada santri non muqim (santri ngalong)
                        untuk ikut belajar membaca Quran, dan belajar kaidah bahasa
                        Arab mulai Nahwu Wadih dan Jurumiyah secara individu.
                    </p>
                </li>
                <li class="timeline-sm-item" data-asw-orgfontsize="16">
                    <span class="timeline-sm-date">2022</span>
                    <p>
                        Mendirikan Yayasan Pendidikan Awiyah Tsaniyah (SK
                        Kemenhukam Nomor AHU-0037258.AH.01.12.Tahun 2022,
                        NPWP 61.027.512.5-403.000) sebagai wadah untuk
                        mengembangkan sistem pendidikan yang kemudian
                        melahirkan sarana pendidikan Pondok Pesantren Daarul Azmi.
                    </p>
                </li>
                <li class="timeline-sm-item" data-asw-orgfontsize="16">
                    <span class="timeline-sm-date">2023</span>
                    <p>
                        Tepatnya ada tanggal 17 Desember 2023, disepakati untuk
                        diresmikan dan dibukanya Pondok Pesantren Daarul Azmi
                        untuk Angkatan Pertama Tahun Ajaran 2023/2024 Jenjang
                        Sekolah Menengah Pertama Islam.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection