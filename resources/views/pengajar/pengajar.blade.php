@extends('layouts.layouts')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

<section class="pengajar bg-light py-5">
    <div class="container">
        <div class="col-lg-12 text-center">
            <div class="">
                <h1 class="dazmi fw-bold">Tenaga Pengajar</h1>
            </div>
            <div class="mx-auto img-bg py-2"> <!-- Center the column with image -->
                <img src="{{ asset('assets/icons/logoDA.png') }}" class="img-pengajar" alt="">
            </div>
        </div>

        <!-- TENAGA PENGAJAR -->
        <div class="qualification section text-center card-box py-5">
            <div class="qualification__container container">
                <div class="qualification__tabs">
                </div>

                <!-- PENGAJAR -->
                <div class="qualification__content qualification__active" data-content id="pengajar">
                    <div class="qualification__data">
                        <div>
                            <h3 class="qualification__title">Kiyai Ibnu Mubarok, SHI</h3>
                            <span class="qualification__subtitle">Kelahiran di Bogor, Tanggal 19 Desember 1985,</span>
                            <div class="qualification__calender">
                                Jenjang Pendidikan Strata 1
                            </div>
                        </div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                    </div>

                    <div class="qualification__data">
                        <div></div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                        <!-- KANAN -->
                        <div>
                            <h3 class="qualification__title">Ustz. Atie Arianie, S.Pd</h3>
                            <span class="qualification__subtitle">Kelahiran di Jakarta, Tanggal 15 Februari 1985</span>
                            <div class="qualification__calender">
                                Jenjang Pendidikan Strata 1
                            </div>
                        </div>
                    </div>

                    <div class="qualification__data">
                        <div>
                            <h3 class="qualification__title">Ust. Lukmanul Hakim, SE</h3>
                            <span class="qualification__subtitle">Kelahiran di Bogor, Tanggal 19 Desember 1984,</span>
                            <div class="qualification__calender">
                                Jenjang Pendidikan Strata 1
                            </div>
                        </div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                    </div>

                    <div class="qualification__data">
                        <div></div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                        <div>
                            <h3 class="qualification__title">Ustz. Nur Laila</h3>
                            <span class="qualification__subtitle">Kelahiran di Tangerang, Tanggal 04 Juli 2002</span>
                            <div class="qualification__calender">
                                Jenjang Pendidikan Strata 1
                            </div>
                        </div>
                    </div>

                    <div class="qualification__data">
                        <div>
                            <h3 class="qualification__title">Ust. Diki Irawan</h3>
                            <span class="qualification__subtitle">Kelahiran di Serang, Tanggal 03 November 2005,</span>
                            <div class="qualification__calender">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                    </div>

                    <div class="qualification__data">
                        <div></div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                        <div>
                            <h3 class="qualification__title">Ustz. Putri Maharani</h3>
                            <span class="qualification__subtitle">Kelahiran di Bogor, Tanggal 14 Mei 2003</span>
                            <div class="qualification__calender">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>
                    </div>

                    <div class="qualification__data">
                        <div>
                            <h3 class="qualification__title">Ust. Syahrul Fahreqzi</h3>
                            <span class="qualification__subtitle">Kelahiran di Bogor, Tanggal 14 Meie 2001,</span>
                            <div class="qualification__calender">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                    </div>

                    <div class="qualification__data">
                        <div></div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                        <div>
                            <h3 class="qualification__title">Ustz. Fozah</h3>
                            <span class="qualification__subtitle">Kelahiran di Bogor, Tanggal 02 Maret 1973</span>
                            <div class="qualification__calender  pb-5">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>
                    </div>

                    <div class="qualification__data">
                        <div></div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                        <div>
                            <h3 class="qualification__title pt-3">Ustz. Reihanah</h3>
                            <span class="qualification__subtitle">Kelahiran di Bogor, Tanggal 15 Maret 1991</span>
                            <div class="qualification__calender">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</section>
@endsection