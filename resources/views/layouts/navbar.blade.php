{{-- Navbar --}}
<style>
  .nav-link {
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
  }
</style>

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


<nav class="navbar shadow navbar-expand-lg mb-5 py-3 fixed-top bg-white">
  <div class="container" style="font-family: Arial, Helvetica, sans-serif;">
    <a class="navbar-brand" href="{{ route('welcome') }}">
      <img src="{{ asset('assets/icons/Header.png') }}" height="51" width="250" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle show" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profil
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/dazmi') }}">Profile Ponpes</a>
            <a class="dropdown-item" href="{{ url('/pimpinan') }}">Pimpinan</a>
            <a class="dropdown-item" href="{{ url('/kurikulum') }}">Pembelajaran</a>
            <a class="dropdown-item" href="{{ url('/milestone') }}">Milestone</a>
            <a class="dropdown-item" href="{{ url('/pengajar') }}">Tenaga Pengajar</a>
            <a class="dropdown-item" href="{{ url('/sarana') }}">Sarana & Prasarana</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Prestasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/gallery') }}">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/kontak') }}">Kontak & Alamat</a>
        </li>

      </ul>
      <div class="d-flex">
        @auth
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-dark">Logout</button>
        </form>
        @else
        <button class="btn btn-danger">Login</button>
        @endauth
      </div>
    </div>
  </div>
</nav>



<!-- <section>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="{{ asset('assets/icons/logoDA.png') }}" height="55" width="55" alt="Logo">
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <input type="checKbox" name="checkbox" id="toggle-menu">
        <label for="toggle-menu" type="button" class="toggle-btn">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </label>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">HOME</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="drop_cases" role="button" data-bs-toggle="dropdown">CASES</a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a href="#" class="dropdown-item">WEB DEVELOPMENT</a>
              </li>
              <li class="nav-item">
                <a href="#" class="dropdown-item">WEB DEVELOPMENT</a>
              </li>
              <li class="nav-item">
                <a href="#" class="dropdown-item">WEB DEVELOPMENT</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">PRICING</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <img src="{{ asset('assets/icons/logoDA.png') }}" height="50" width="50" alt="logo">
        </div>
        <div class="modal-body">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="#" class="nav-link" aria-current="page">
                HOME
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="drop_cases" role="button" data-bs-toggle="dropdown">CASES</a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a href="#" class="dropdown-item">WEB DEVELOPMENT</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="dropdown-item">WEB DEVELOPMENT</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="dropdown-item">WEB DEVELOPMENT</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">PRICING</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">CONTACT</a>
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <label for="toggle-menu">
              Close
            </label>
          </button>
        </div>
      </div>
    </div>
  </div>
</section> -->
{{-- Navbar --}}