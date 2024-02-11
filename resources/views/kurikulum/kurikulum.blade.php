@extends('layouts.layouts')

@section('content')
<style>
    .kegiatan-table {
        width: 100%;
        border-collapse: collapse;
    }

    .tb-1 {
        color: white;
    }

    .kegiatan-table th,
    .kegiatan-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        /* Warna teks putih */
    }

    .kegiatan-table th {
        background-color: #006bbd;
        /* Background warna biru tua untuk baris kepala tabel */
    }

    .kegiatan-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #heroo {
        background-image: url(../../assets/images/galeri4.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 600px;
        text-shadow: 2px 2px 5px black;
        padding-bottom: 0;
    }
</style>
<section id="heroo">
    <div class="container text-center text-white">
        <div class="hero-title">
            <div class="hero-text">Sistem Pembelajaran</div>
            <h3>Konsentrasi Pembelajaran</h3>
            <h5> Mengacu kepada Kurikulum Merdeka dan Pembekalan materi
                pelajaran Santri, Ponpes Daarul Azmi menerapkan sistem belajar
                tatap muka kelas dengan konsentrasi kepada Kurikulum Agama
                dan Kurikulum Umum</h5>
        </div>
    </div>
</section>

<section id="join" class="pt-5 pb-5 bg-body-tertiary">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h3>Konsentrasi Pembelajaran Agama</h5>
                </div>
                <p class="mb-3 text-justify text-bold">Santri belajar Ilmu Quran, seperti baca dan menghafal, tajwid dan
                    tahsin. <br>
                    Santri belajar ilmu Tasfir, Fiqh, dan Literasi Kitab Kuning lainnya. <br>
                    Santri belajar Bahasa Arab dan Kaidahnya, seperti Nahwu, Jurumiyah, Muhadatsah. <br>
                    Kajian umum kegamaan.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/Talim.jpg') }}" class="img-fluid" alt="" data-aos="fade-left">
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/galeri1.jpeg') }}" class="img-fluid" alt="" data-aos="fade-left">
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h3>Konsentrasi Pembelajaran Umum</h5>
                </div>
                <p class="mb-3 text-justify text-bold"> Santri belajar ilmu bahasa
                    Inggris, seperti english course dan grammar. <br>
                    Santri belajar pelajaran umum yang tercatat dalam
                    kalender pembelajaran tahunan seperti Ilmu Pengetahuan Sosial,
                    Ilmu Pengetahuan Alam, Matematika, Bahasa Indonesia, Teknik Informatika Komputer, Olahraga, dan PKN dan Seni
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <!-- PEMBELAJARAN -->
    <div class="container">
        <div class="text-center">
            <h1 id="dazmi" class=" fw-bold">Kurikulum Pelajaran</h1>
            <h3>Rujukan kitab yang dipelajari</h3>
        </div>
        <div class="card-box">
            <div class="row d-flex align-items-center">
                <div class="text-center py-2">
                    <img src="{{ asset('assets/images/kitab.png') }}" width="550" height="550" class="img-fluid" alt="" data-aos="fade-left">
                </div>
                <p class="mb-3 text-center">
                    Pondok Pesantren Daarul memberikan kurikulum pembelajaran secara
                    lengkap dengan memadukan Sistem Kurikulum Merdeka untuk
                    Pembelajaran Sekolah Umum dengan materi yang sudah disusun dan
                    Sistem Kurikulum Pembelajaran Pesantren seperti penguasaan Bahasa
                    Arab, Inggris, pendalaman Kitab Kuning, diantaranya :
                </p>
            </div>
            <table class="kegiatan-table">
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
    </div>
    </div>
    </div>

    <!-- KEGIATAN SANTRI -->
    <div class="py-5 container">
        <div class="text-center">
            <h1 class="fw-bold">Aktivitas Santri</h1>
            <h3>Jadwal Kegiatan Santri</h3>
            <!-- <div class="garis"></div> -->
            <p> Selain belajar mengajar secara regular, Pondok Pesantren pun
                mengembangkan kegiatan di luar jam belajar, yaitu kegiatan extra
                kulikuler dalam rangka memberikan kesempatan kepada Santri agar
                dapat mengembangkan bakat dan potensi nya seperti Seni Hadroh,
                Seni Pencaksilat, dan lain-lain.</p>
        </div>
        <table class="kegiatan-table">
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
</section>
@endsection