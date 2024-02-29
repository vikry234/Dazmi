@extends('layouts.layouts')

@section('content')
<style>
    #heroo {
        background-color: #144171;
        width: 100%;
        height: 350px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .title {
        padding-top: 100px;
    }

    @media screen and (min-width: 425px) {
        .hero-text {
            margin-bottom: 0px;
            font-size: 25px;
        }

        .hero-child {
            font-size: 15px;
        }

        h3 {
            font-size: 20px;
        }

        .hero-child h4 {
            font-size: 10px;
        }
    }

    @media screen and (min-width: 550px) {
        .hero-text {
            margin-bottom: 0px;
            font-size: 30px;
        }

        .hero-child {
            font-size: 15px;
        }

        h3 {
            font-size: 20px;
        }

        .hero-child h4 {
            font-size: 15px;
        }
    }

    @media screen and (min-width: 850px) {
        .hero-text {
            margin-bottom: 0px;
            font-size: 50px;
        }

        .hero-child {
            font-size: 15px;
        }

        h3 {
            font-size: 30px;
        }

        .hero-child h4 {
            font-size: 20px;
        }
    }
</style>
<section id="heroo" style="margin-top: 90px;">
    <div class="container col-xxl-6 text-center text-white">
        <div class="title">
            <div class="hero-text">Sistem Pembelajaran</div>
            <div class="hero-child">
                <h3>Konsentrasi Pembelajaran</h3>
                <p> Mengacu kepada Kurikulum Merdeka dan Pembekalan materi
                    pelajaran Santri, Ponpes Daarul Azmi menerapkan sistem belajar
                    tatap muka kelas dengan konsentrasi kepada Kurikulum Agama
                    dan Kurikulum Umum</p>
            </div>
        </div>
    </div>
</section>

<section id="join" class="py-3">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <div class="stripe me-2"></div>
                    <h1 class="fw-bold" style="color: #144171;">Konsentrasi Pembelajaran Agama</h1>
                </div>
                <ol type="a">
                    <li class="py-1">Santri belajar Ilmu Quran, seperti baca dan menghafal, tajwid dan
                        tahsin.</li>
                    <li class="py-1"> Santri belajar ilmu Tasfir, Fiqh, dan Literasi Kitab Kuning lainnya.</li>
                    <li class="py-1"> Santri belajar Bahasa Arab dan Kaidahnya, seperti Nahwu, Jurumiyah, Muhadatsah.</li>
                    <li class="py-1">Kajian umum kegamaan.</li>
                </ol>
            </div>
            <div class="col-lg-6 pb-5">
                <img src="{{ asset('assets/images/Talim.jpg') }}" class="img-fluid" alt="">
            </div>
            <p class="rounded"></p>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 pb-5">
                <img src="{{ asset('assets/images/galeri1.jpeg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h1 class="fw-bold" style="color: #144171;">Konsentrasi Pembelajaran Umum</h1>
                </div>
                <ol type="a">
                    <li class="pb-1">Santri belajar ilmu bahasa
                        Inggris, seperti english course dan grammar.</li>
                    <li> Santri belajar pelajaran umum yang tercatat dalam
                        kalender pembelajaran tahunan seperti Ilmu Pengetahuan Sosial,
                        Ilmu Pengetahuan Alam, Matematika, Bahasa Indonesia, Teknik Informatika Komputer, Olahraga, dan PKN dan Seni.</li>
                </ol>
            </div>
            <p class="rounded"></p>
        </div>
    </div>
</section>

<!-- PEMBELAJARAN -->
<style>
    .rounded {
        font-size: 20px;
        border-bottom: 2px solid #144171;
        /* Warna garis vertical */
        padding-bottom: 5px;
        /* Jarak antara teks dan garis vertical */
        border-radius: 8px;
        /* Sudut yang dibulatkan */
        display: inline-block;
        /* Membuat elemen h3 menjadi inline block */
        position: relative;
        /* Menambahkan posisi relatif */
    }
</style>
<section id="join">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <div class="stripe me-2"></div>
                    <h1 class="fw-bold" style="color: #144171;">Kurikulum Pelajaran</h1>
                </div>
                <h3 style="color: #144171;">Rujukan kitab yang dipelajari</h3>
                <p class="text-justify mb-3">
                    Pondok Pesantren Daarul memberikan kurikulum pembelajaran secara
                    lengkap dengan memadukan Sistem Kurikulum Merdeka untuk
                    Pembelajaran Sekolah Umum dengan materi yang sudah disusun dan
                    Sistem Kurikulum Pembelajaran Pesantren seperti penguasaan Bahasa
                    Arab, Inggris, pendalaman Kitab Kuning, diantaranya :
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/kitab.png') }}" class="img-fluid" alt="">
            </div>
            <div class="py-5">
                <table class="kegiatan-table" style="color: #144171;">
                    <thead>
                        <tr class="tb-1">
                            <th>Pelajaran Agama</th>
                            <th>Pelajara Umum</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold">
                        <tr>
                            <td>Durusullughah</td>
                            <td>Bahasa Inggris</td>
                        </tr>
                        <tr>
                            <td>Ilmu Quran, Ilmu Tajwid</td>
                            <td>Ilmu Pengetahuan Alam <br> (IPA)</td>
                        </tr>
                        <tr>
                            <td>Kitab Ushuludin</td>
                            <td>Ilmu Pengetahuan Sosial <br> (IPS)</td>
                        </tr>
                        <tr>
                            <td>Ilmu Aqoid</td>
                            <td>Teknik Informatika <br> dan Komunikasi (TIK)</td>
                        </tr>
                        <tr>
                            <td>Mukhtasar Ilmu Shorf</td>
                            <td>Matematika</td>
                        </tr>
                        <tr>
                            <td>Kitab Fatul Mu'in</td>
                            <td>Pendidikan Kewarganegaraan <br> (PKN)</td>
                        </tr>
                        <tr>
                            <td>Kitab Al-Ajurumiyah</td>
                            <td>Bahasa Indonesia</td>
                        </tr>
                        <tr>
                            <td>Kitab Fathul Qorib</td>
                            <td>Seni Budaya</td>
                        </tr>
                        <tr>
                            <td>Kitab Aqidatul Awam</td>
                            <td>Olahraga</td>
                        </tr>
                        <tr>
                            <td>Kitab Tafsir Jalalain</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tarikh Islam</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kitab Safinatunnajah</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kitab Ta’lim Muta’allim</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kitab Muthola'ah</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Imla & Insya</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mufrodat & Muhadasah</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dan banyak lagi</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="rounded"></p>
        </div>
    </div>
</section>
<!-- PEMBELAJARAN -->
<section id="join">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/Talim.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <div class="stripe me-2"></div>
                    <h1 class="fw-bold" style="color: #144171;">Aktivitas Santri</h1>
                </div>
                <h3 style="color: #144171;">Jadwal Kegiatan Santri</h3>
                <p class="text-justify mb-3">
                    Selain belajar mengajar secara regular, Pondok Pesantren pun
                    mengembangkan kegiatan di luar jam belajar, yaitu kegiatan extra
                    kulikuler dalam rangka memberikan kesempatan kepada Santri agar
                    dapat mengembangkan bakat dan potensi nya seperti Seni Hadroh,
                    Seni Pencaksilat, dan lain-lain.
                </p>
            </div>
            <div class="pt-5">
                <table class="kegiatan-table" style="color: #144171;">
                    <thead>
                        <tr class="tb-1">
                            <th>No.</th>
                            <th>Nama Kegiatan</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold">
                        <tr>
                            <td>1</td>
                            <td>04.00 - 06.00 WIB</td>
                            <td>Sholat Subuh <br>
                                Dzikir Berjamaah <br>
                                Baca Quran Berjamaah <br>
                                Muhadatsah dan Mufrodat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>06.00 - 07.00 WIB</td>
                            <td> Sarapan Pagi <br>
                                Kebersihan dan Mandi <br>
                                Persiapan Sekolah</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td> 07.00 - 12.00 WIB</td>
                            <td>Sholat Dhuha Berjamaah <br>
                                Masuk Kelas Tatap Muka</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>12.00 - 14.00 WIB</td>
                            <td> Sholat Dzuhur Berjamaah <br>
                                Makan Siang <br>
                                Istirahat</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td> 14.00 - 15.30 WIB</td>
                            <td> Kajian Kitab Muthola’ah <br>
                                Muroja’ah Pelajaran</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td> 15.30 - 18.00 WIB</td>
                            <td> Olahraga <br>
                                Seni Hadroh <br>
                                Kebersihan <br>
                                Mandi <br>
                                Makan Sore</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td> 18.00 - 19.30 WIB</td>
                            <td> Sholat Magrib Berjamaah <br>
                                Dzikir Berjamaah <br>
                                Ngaji Quran <br>
                                Hafalan Quran <br>
                                Sholat Isya Berjamaah</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td> 19.30 - 22.00 WIB</td>
                            <td> Durusullughoh <br>
                                Nahwu <br>
                                Shorof <br>
                                Kitab Kuning</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection