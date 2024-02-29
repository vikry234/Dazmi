@extends('layouts.layouts')
@section('content')
<section id="heroo" style="margin-top: 90px;">
    <div class="container text-center text-white">
        <div class="title">
            <div class="hero-text">Tenaga Pengajar</div>
        </div>
    </div>
</section>

<section class="pengajar py-5">
    <div class="container">
        <div class="col-lg-12 text-center">
            <div class="mx-auto img-bg py-2"> <!-- Center the column with image -->
                <img src="{{ asset('assets/icons/logoDA.png') }}" height="250" width="250" class="img-pengajar" alt="">
            </div>
        </div>

        <!-- TENAGA PENGAJAR -->
        <div class="qualification section text-center py-5">
            <div class="qualification_container container">
                <div class="qualification_tabs">
                </div>

                <!-- PENGAJAR -->
                <div class="qualification_content qualification_active" data-content id="pengajar">
                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Kiyai Ibnu Mubarok, SHI</h3>
                            <span class="qualification_subtitle">Kelahiran di Bogor, Tanggal 19 Desember 1985,</span>
                            <div class="qualification_calender">
                                Jenjang Pendidikan Strata 1
                            </div>
                        </div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                    </div>

                    <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                        <!-- KANAN -->
                        <div>
                            <h3 class="qualification_title">Ustz. Atie Arianie, S.Pd</h3>
                            <span class="qualification_subtitle">Kelahiran di Jakarta, Tanggal 15 Februari 1985</span>
                            <div class="qualification_calender">
                                Jenjang Pendidikan Strata 1
                            </div>
                        </div>
                    </div>

                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Ust. Lukmanul Hakim, SE</h3>
                            <span class="qualification_subtitle">Kelahiran di Bogor, Tanggal 19 Desember 1984,</span>
                            <div class="qualification_calender">
                                Jenjang Pendidikan Strata 1
                            </div>
                        </div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                    </div>

                    <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                        <div>
                            <h3 class="qualification_title">Ustz. Nur Laila</h3>
                            <span class="qualification_subtitle">Kelahiran di Tangerang, Tanggal 04 Juli 2002</span>
                            <div class="qualification_calender">
                                Jenjang Pendidikan Strata 1
                            </div>
                        </div>
                    </div>

                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Ust. Diki Irawan</h3>
                            <span class="qualification_subtitle">Kelahiran di Serang, Tanggal 03 November 2005,</span>
                            <div class="qualification_calender">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                    </div>

                    <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                        <div>
                            <h3 class="qualification_title">Ustz. Putri Maharani</h3>
                            <span class="qualification_subtitle">Kelahiran di Bogor, Tanggal 14 Mei 2003</span>
                            <div class="qualification_calender">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>
                    </div>

                    <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Ust. Syahrul Fahreqzi</h3>
                            <span class="qualification_subtitle">Kelahiran di Bogor, Tanggal 14 Meie 2001,</span>
                            <div class="qualification_calender">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                    </div>

                    <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                        <div>
                            <h3 class="qualification_title">Ustz. Fozah</h3>
                            <span class="qualification_subtitle">Kelahiran di Bogor, Tanggal 02 Maret 1973</span>
                            <div class="qualification_calender  pb-5">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>
                    </div>

                    <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                        <div>
                            <h3 class="qualification_title pt-3">Ustz. Reihanah</h3>
                            <span class="qualification_subtitle">Kelahiran di Bogor, Tanggal 15 Maret 1991</span>
                            <div class="qualification_calender">
                                Jenjang Pendidikan Pondok Pesantren
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection