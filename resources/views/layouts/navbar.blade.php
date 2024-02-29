{{-- Navbar --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<nav class="navbar shadow navbar-expand-lg mb-5 py-3 fixed-top bg-white">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('assets/icons/Header.png') }}" height="51" width="238" alt="">
    </a>
    <a class="navbar-mob" href="{{ route('home') }}">
      <img src="{{ asset('assets/icons/logoDA.png') }}" height="51" width="51" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="mob-nav-content collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle show" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tentang
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/dazmi') }}">Profile Ponpes</a></li>
            <li><a class="dropdown-item" href="{{ url('/visi') }}">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="{{ url('/pimpinan') }}">Pimpinan</a></li>
            <li><a class="dropdown-item" href="{{ url('/kurikulum') }}">Pembelajaran</a></li>
            <li><a class="dropdown-item" href="{{ url('/milestone') }}">Milestone</a></li>
            <li><a class="dropdown-item" href="{{ url('/pengajar') }}">Tenaga Pengajar</a></li>
            <li><a class="dropdown-item" href="{{ url('/sarana') }}">Sarana & Prasarana</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/gallery') }}">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/youtube') }}">Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/kontak') }}">Kontak</a>
        </li>
      </ul>
      <!-- SEARCH -->
      <div class="search">
        <form class="d-flex" action="{{ route('search') }}" method="GET">
          <div class="icon"></div>
          <div class="input">
            <input type="text" placeholder="Cari..." id="mysearch" aria-label="Search" name="query">
        </form>
      </div>
      <span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
    </div>
  </div>
  </div>
</nav>
<script>
  const icon = document.querySelector(".icon");
  const search = document.querySelector(".search");
  icon.onclick = function() {
    search.classList.toggle("active");
  };
  document.addEventListener("DOMContentLoaded", function() {
    const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

    dropdownToggles.forEach(function(toggle) {
      toggle.addEventListener("click", function() {
        const parent = this.parentElement;
        const dropdownMenu = parent.querySelector(".dropdown-menu");

        // Toggle visibility of dropdown menu
        if (dropdownMenu.style.display === "block") {
          dropdownMenu.style.display = "none";
        } else {
          dropdownMenu.style.display = "block";
        }
      });
    });
  });
</script>
{{-- Navbar --}}