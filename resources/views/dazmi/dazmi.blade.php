@extends('layouts.layouts')

@section('content')
<!-- hero -->
<section id="heroo" style="margin-top: 90px;">
    <div class="container text-center text-white">
        <div class="title">
            <div class="hero-text">Tentang Ponpes Daarul Azmi</div>
        </div>
    </div>
</section>
{{-- Profile DA --}}
<section id="profile" class="py-5 bg-light">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12 text-center">
                <div class="img-bg"> <!-- Center the column with image -->
                    <img src="{{ asset('assets/images/awiyah_rev.png') }}" width="350" height="350" class="img-awiyah justify-content-center" alt="image-logo">
                </div>
                {{-- PROFILE DAARUL AZMI --}}
                <div class="text-bio card-box py-2 shadow-sm border-0">
                    <p class="text-justify mt-3">
                        Pondok Pesantren Daarul Azmi adalah Lembaga Pendidikan Islam yang
                        memiliki visi dan misi dalam pembentukan akhlak dan mental terhadap
                        generasi penerus dengan pembekalan pengajaran yang terpadu, yaitu
                        Pendidikan Islam yang berlandaskan pada Ahlussunnah wal Jamaah
                        dengan asas pondasi Al-Quran dan Sunnah, Ijma dan Qiyas, dan
                        berpedoman kepada nilai-nilai Pancasila Indonesia, dan Undang-Undang
                        Dasar 1945.
                    </p>
                    <p class="text-justify mt-3">
                        Pondok Pesantren Daarul Azmi saat ini sudah beroperasi pada Tahun
                        Ajaran 2023/2024 Angkatan Pertama. Sebagai Lembaga Pendidikan
                        formal dan non-formal belajar mengajar untuk anak didik siswa/I mulai
                        dari tingkat Sekolah Menengah Pertama (SMPI) sampai Menengah Atas
                        (SMA) dari Santri Muqim (santri menetap) dan Santri Non-Muqim.
                    </p>
                    <p class="text-justify mt-3">
                        Pondok Pesantren dibawah naungan Yayasan Pendidikan Awiyah
                        Tsaniyah yang didirikan pada Tanggal 07 Desember 2022 dan berlokasi
                        di Kp. Rawalembang RT 03/11, Desa Cibinong, Kec. Gunung Sindur, Kab.
                        Bogor, sebagaimana tertuang dalam S.K. Menteri Hukim dan Hak Asasi
                        Manusia Republik Indonesia Nomor AHU-0037258.AH.01.12.Tahun 2022
                        dan Nomor NPWP : 61.027.512.5-403.000.
                    </p>
                    <p class="text-justify mt-3">
                        Pondok Pesantren Daarul Azmi memberikan warna tersendiri dalam
                        dunia ke-pesantrenan dimana diajarkan pembelajaran dengan
                        kurikulum yang mengacu pada kurikulum pesantren modern dan
                        memadukannya dengan sistem pembelajaran pesantren tradisional
                        salafiyah dengan literasi kitab kuning, agar santri didik dapat memahami
                        dengan baik secara tulis dan lisan.
                    </p>
                </div>
                {{-- PROFILE DAARUL AZMI --}}

            </div>
        </div>
    </div>
</section>
{{-- Profile DA --}}


<!-- STRUKTUR  -->
<section class="bg-light">
    <h1 id="dazmi" class="fw-bold text-center" style="color: #144171;">
        Struktur Organisasi
    </h1>
    <h4 class="text-center" style="color: #144171;"> Yayasan Pendidikan Awiyah Tsanawiyah</h4>
    <div class="container text-center">
        <div class="">
            <div class="shadow-sm border-0 card-box text-bio">

                <div class="garis">
                    <h1 class="name"><b>Ibnu Mubarok, SHI</b></h1>
                    <p class="rounded">Kepala Pendidikan Kesetaraan
                        <span class="qualification__rounder"></span>
                        <span class="qualification__garis"></span>
                    </p>
                </div>
                <div>
                    <div class="row content-2">
                        <div class="garis col-md-6 col-6">
                            <h1 style="font-size: 20px;"><b>Lukamanul Hakim</b></h1>
                            <p class="rounded pt-1" style="font-size: 15px;">Dewan Pembina
                            </p>
                        </div>
                        <div class="garis col-md-6 col-6">
                            <h1 style="font-size: 20px;"><b>P Gunawansyah</b></h1>
                            <p class="rounded pt-1" style="font-size: 15px;">Dewan Pengawas
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row content-2">
                        <div class="garis col-6">
                            <h1 style="font-size: 20px;"><b> Ikhwan Fardliansyah</b></h1>
                            <p class="rounded pt-1" style="font-size: 15px;">Bendahara Umum
                            </p>
                        </div>
                        <div class="garis col-6">
                            <h1 style="font-size: 20px;"><b>Hendra Suhendra</b></h1>
                            <p class="rounded pt-1" style="font-size: 15px;">Wakil Ketua
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <h1 style="font-size: 20px;"><b>Haryoto</b></h1>
                        <p class="rounded pt-1" style="font-size: 15px;">Sektretaris Umum
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light pb-5">
    <h1 id="dazmi" class="fw-bold text-center" style="color: #144171;">
        Struktur Organisasi
    </h1>
    <h4 class="text-center" style="color: #144171;">Pondok Pesantren Daarul Azmi</h4>
    <div class="container text-center">
        <div class="">
            <div class="shadow-sm border-0 card-box text-bio">
                <div class="garis">
                    <div>
                        <h1 class="name"><b>Ibnu Mubarok, SHI</b></h1>
                        <p class="rounded">Kiyai Pimpinan Ponpes
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </p>
                    </div>
                </div>
                <div class="garis">
                    <h1 class="name"><b>Ustz. Atie Arianie, S.Pd</b></h1>
                    <p class="rounded">Kepala Pendidikan Kesetaraan
                        <span class="qualification__rounder"></span>
                        <span class="qualification__line"></span>
                    </p>
                </div>
                <div>
                    <div class="garis">
                        <h1 style="font-size: 20px;"><b>Diki Irawan</b></h1>
                        <p class="rounded pt-1">wali Asrama
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </p>
                    </div>
                    <div class="row content-2">
                        <div class="garis col-md-6 col-6">
                            <h1 style="font-size: 15px;"><b>Syahrul Fahrezqi</b></h1>
                            <p class="rounded pt-1">wali Asrama Putra
                            </p>
                        </div>
                        <div class="garis col-md-6 col-6">
                            <h1 style="font-size: 15px;"><b>Putri Maharani</b></h1>
                            <p class="rounded pt-1">wali Asrama Putri
                            </p>
                        </div>
                    </div>
                </div>
                <div class="garis">
                    <h1 style="font-size: 20px;">- <b>Muhammad Sufyan <br></b> - <b>Mustofa Riyadi</b></h1>
                    <p class=" rounded pt-1">Tata Usaha</p>
                </div>
                <div>
                    <div class="garis">
                        <h1 style="font-size: 20px;"><b>Iyus Yusro</b></h1>
                        <p class="rounded pt-1">Tenaga Dapur dan Kebersihan
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </p>
                    </div>
                    <div class="row content-2">
                        <div class="garis col-md-6 col-6">
                            <h1 style="font-size: 15px;"><b>Habibah</b></h1>
                            <p class="rounded pt-1">Tenaga Dapur
                            </p>
                        </div>
                        <div class="garis col-md-6 col-6">
                            <h1 style="font-size: 15px;"><b>Iyas</b></h1>
                            <p class="rounded pt-1">Tenaga Kebersihan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
@endsection