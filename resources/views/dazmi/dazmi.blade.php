@extends('layouts.layouts')

@section('content')
{{-- Profile DA --}}
<section id="profile" class="py-5 bg-light mt-2">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12 text-center"> <!-- Use the entire width for centering -->
                <div class="header-berita">
                    <h2 id="dazmi" class="dazmi fw-bold">Tentang Ponpes Daarul Azmi</h2>
                </div>
                <div class="img-bg"> <!-- Center the column with image -->
                    <img src="{{ asset('assets/images/awiyah_rev.png') }}" width="350" height="350" class="img-awiyah justify-content-center" alt="image-logo">
                </div>
                {{-- PROFILE DAARUL AZMI --}}
                <div class="text-bio card-box py-2 shadow-sm border-0 mt-5">
                    <p class="text-justify first-line-indent mt-3">
                        Pondok Pesantren Daarul Azmi adalah Lembaga Pendidikan Islam yang
                        memiliki visi dan misi dalam pembentukan akhlak dan mental terhadap
                        generasi penerus dengan pembekalan pengajaran yang terpadu, yaitu
                        Pendidikan Islam yang berlandaskan pada Ahlussunnah wal Jamaah
                        dengan asas pondasi Al-Quran dan Sunnah, Ijma dan Qiyas, dan
                        berpedoman kepada nilai-nilai Pancasila Indonesia, dan Undang-Undang
                        Dasar 1945.
                    </p>
                    <p class="text-justify first-line-indent mt-3">
                        Pondok Pesantren Daarul Azmi saat ini sudah beroperasi pada Tahun
                        Ajaran 2023/2024 Angkatan Pertama. Sebagai Lembaga Pendidikan
                        formal dan non-formal belajar mengajar untuk anak didik siswa/I mulai
                        dari tingkat Sekolah Menengah Pertama (SMPI) sampai Menengah Atas
                        (SMA) dari Santri Muqim (santri menetap) dan Santri Non-Muqim.
                    </p>
                    <p class="text-justify first-line-indent mt-3">
                        Pondok Pesantren dibawah naungan Yayasan Pendidikan Awiyah
                        Tsaniyah yang didirikan pada Tanggal 07 Desember 2022 dan berlokasi
                        di Kp. Rawalembang RT 03/11, Desa Cibinong, Kec. Gunung Sindur, Kab.
                        Bogor, sebagaimana tertuang dalam S.K. Menteri Hukim dan Hak Asasi
                        Manusia Republik Indonesia Nomor AHU-0037258.AH.01.12.Tahun 2022
                        dan Nomor NPWP : 61.027.512.5-403.000.
                    </p>
                    <p class="text-justify first-line-indent mt-3">
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

{{-- VISI DAN MISI --}}
<section class="bg-light">
    <h1 id="dazmi" class="fw-bold text-center">
        VISI DAN MISI
    </h1>
    <div class="container">
        <div class="row d-flex">
            <div>
                <div class="shadow-sm border-0 card-box text-bio">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card-body">
                                <h3 class="text-center">
                                    <b>VISI</b>
                                </h3>
                                <p class="card-title visi text-justify">
                                    Pondok Pesantren Daarul Azmi memiliki visi Terwujudnya insan
                                    Ahlusunnah Wal Jama’ah, yang berkahlak, berdisiplin tinggi, berwawasan
                                    luas dan tangguh dalam kompetisi global.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card-body">
                                <h3 class="text-center">
                                    <b>MISI</b>
                                </h3>
                                <p class="text-justify">
                                    1. Mendidik Santri memiliki Kesadaran Ketuhanan (spiritual makrifat)
                                    Membentuk santri yang berkepribadian dan berkarakter dengan
                                    faham Ahlussunnah Wal Jama’ah.
                                </p>
                                <p class="text-justify">
                                    2. Mengedepankan akhlak dengan membudayakan berkata sopan,
                                    tawadhu, qana’ah, saling menghargai dan saling membantu terhadap
                                    sesama.
                                </p>
                                <p class="text-justify">
                                    3. Memberikan santri Pendidikan agar mampu melayani umat dengan
                                    nilai dakwah islam.
                                </p>
                                <p class="text-justify">
                                    4. Meningkatkan kemauan dan kemampuan intelektual.
                                </p>
                                <p class="text-justify">
                                    5. Melatih berbahasa Arab dan Inggris dengan baik.
                                </p>
                                <p class="text-justify">
                                    6. Mempersiapkan santri yang memiliki disiplin tinggi dalam segala hal.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- STRUKTUR  -->
    <style>
        /* Gaya untuk elemen h3 */
        .name {
            font-size: 25px;
        }

        .content-2 {
            margin-top: -10px;
        }

        .rounded {
            font-size: 20px;
            border-bottom: 2px solid #007BFF;
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

        .strip {
            background-color: #007BFF;
            width: 300px;
            height: 2px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Gaya untuk card-box */
        .garis {
            border-radius: 15px;
            /* Sudut yang dibulatkan pada card-box */
            padding: 20px;
            /* Jarak antara konten dan batas card-box */
            position: relative;
            /* Menambahkan posisi relatif */
        }

        /* Gaya untuk rounder dan line */
        .qualification__rounder {
            display: inline-block;
            width: 13px;
            height: 13px;
            background-color: #007BFF;
            border-radius: 50%;
            position: absolute;
            /* Menambahkan posisi absolut */
            left: 50%;
            /* Posisikan pada tengah horizontal */
            bottom: -6px;
            /* Sesuaikan dengan padding-bottom */
            transform: translateX(-50%);
            /* Koreksi untuk posisi horizontal tengah */
        }

        .qualification__garis {
            display: block;
            width: 1px;
            height: 300%;
            background-color: #007BFF;
            position: absolute;
            /* Menambahkan posisi absolut */
            left: 50%;
            /* Posisikan pada tengah horizontal */
            transform: translateX(-50%);
            /* Koreksi untuk posisi horizontal tengah */
        }

        .qualification__line {
            display: block;
            width: 1px;
            height: 150%;
            background-color: #007BFF;
            position: absolute;
            /* Menambahkan posisi absolut */
            left: 50%;
            /* Posisikan pada tengah horizontal */
            transform: translateX(-50%);
            /* Koreksi untuk posisi horizontal tengah */
        }
    </style>
    <section class="bg-light py-5">
        <h1 id="dazmi" class="fw-bold text-center">
            Struktur Organisasi
        </h1>
        <h4 class="text-center"> Yayasan Pendidikan Awiyah Tsanawiyah</h4>
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
    <section class="bg-light py-5">
        <h1 id="dazmi" class="fw-bold text-center">
            Struktur Organisasi
        </h1>
        <h4 class="text-center">Pondok Pesantren Daarul Azmi</h4>
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

    @endsection