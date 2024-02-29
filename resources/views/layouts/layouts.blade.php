<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="{{ asset('assets/icons/logoDA.png') }}">

  <title>Pondok Pesantren Daarul Azmi</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- magnific -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
  {{-- Summernote CSS di antara Head--}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

</head>

<body>

  {{-- NAVBAR --}}
  @include('layouts.navbar')

  {{-- CONTENT --}}
  @yield('content')

  <!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
  <footer class="text-center text-lg-start text-white" style="background-color: #144171">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between">
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-5">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <a href="{{ route('home') }}">
              <img src="{{ asset('assets/icons/logoDA.png') }}" height="110" width="110" alt="">
            </a>
            <h6 class="text-uppercase fw-bold">Daarul Azmi</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              Daarul Azmi merupakan lembaga pendidikan Islam unggulan dengan sistem
              pembelajaran terpadu meliputi pembelajaran akademik,
              pengembangan karakter dan pengajaran Al-Quran.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Sosial Media -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Ikuti Kami</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <ul class="nav flex-column">
              <li>
                <div class=" mb-2">
                  <a href="https://www.instagram.com/ponpes_daarulazmi/" target="_blank" class="text-center text-decoration-none text-white">
                    <i class="fab fa-instagram nav-icon"></i>
                    Instagram
                  </a>
                </div>
              </li>
              <li>
                <div class=" mb-2">
                  <a href="https://www.tiktok.com/@ngajisantrichannel?_t=8a5EjNWrjAf&_r=1" target="_blank" class="text-decoration-none text-white">
                    <i class="fab fa-tiktok nav-icon"></i>
                    Tiktok
                  </a>
                </div>
              </li>
              <li>
                <div>
                  <a href="https://www.youtube.com/@NgajiSantriChannel" target="_blank" class="text-decoration-none text-white">
                    <i class="fab fa-youtube nav-icon"></i>
                    Youtube
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Kontak</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <ul class="nav flex-column">
              <li>
                <div class=" mb-2">
                  <a href="mailto:ponpesdaarulazmiofficial@gmail.com" class="text-decoration-none text-white">
                    <i class="fas fa-envelope nav-icon"></i>
                    Gmail</a>
                </div>
              </li>
              <li>
                <div>
                  <a href="https://api.whatsapp.com/send?phone=6288292044237" class="text-decoration-none text-white">
                    <i class="fab fa-whatsapp nav-icon"></i>
                    Whatsapp</a>
                </div>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-5">Alamat Ponpes</h6>
            <iframe class="maps-footer" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15859.927881038822!2d106.6901608!3d-6.3963247!3m2!1i1024!2i768!4f13.1
                !3m3!1m2!1s0x2e69e7bf53f36d41%3A0xb415aedd8993b720!2sPondok%20Pesantr
                en%20Daarul%20Azmi!5e0!3m2!1sid!2sid!4v1707360168810!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="maps"></iframe>
            <p>
              <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
              Kp. Rawalembang RT 03/11, Desa Cibinong Kecamatan Gunungsindur, Kabupaten Bogor 16340
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      &#169; Pondok Pesantren DaarulAzmi. All right reserved 2024
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- End of .container -->

  <style>
    /* Style untuk button scroll to top */
    #scrollToTopBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 99;
      background-color: #144171;
      color: white;
      border: none;
      border-radius: 10%;
      cursor: pointer;
      padding: 10px;
      font-size: 20px;
      transition: opacity 0.5s;
    }

    #scrollToTopBtn:hover {
      background-color: #0056b3;
    }

    /* Animasi fade */
    .fade-in {
      opacity: 1;
      transition: opacity 0.5s ease-in-out;
    }

    .fade-out {
      opacity: 0;
    }
  </style>
  <button onclick="scrollToTop()" id="scrollToTopBtn" title="Kembali ke Atas"><i class="fas fa-arrow-up"></i></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  {{-- JQUERY --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  {{-- Summernote JS --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
  <script src="{{ asset('assets/js/magnific.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote({
        height: 200,
      });
    });
    // Fungsi untuk mengecek apakah halaman sudah discroll setengah bagian
    function isHalfwayScrolled() {
      var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      var scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
      var clientHeight = document.documentElement.clientHeight || document.body.clientHeight;
      return scrollTop > (scrollHeight / 2) - clientHeight;
    }

    // Fungsi untuk menampilkan atau menyembunyikan button "Scroll to Top"
    function toggleScrollToTopButton() {
      var button = document.getElementById("scrollToTopBtn");
      if (isHalfwayScrolled()) {
        button.classList.add("fade-in");
        button.classList.remove("fade-out");
        button.style.display = "block";
      } else {
        button.classList.remove("fade-in");
        button.classList.add("fade-out");
        setTimeout(function() {
          button.style.display = "none";
        }, 500);
      }
    }

    // Fungsi untuk melakukan scroll ke atas
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }

    // Event listener untuk mengontrol tampilan button saat scrolling
    window.addEventListener("scroll", toggleScrollToTopButton);
  </script>

</body>

</html>