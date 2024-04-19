@include('layout.header')

<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/img/logounhas.png" width="40" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Fakultas & Prodi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Daftar Mahasiswa Lulus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">UKT</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Halo, calon Mahasiswa Baru!</h1>
        <p class="lead">selamat datang di web pendaftaran mahasiswa baru unhas!</p>
        <img src="{{asset('img/logounhas.png')}}" alt="img" width="100" class="">
        <hr class="my-4">
        {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
    </div>
</div>

@include('layout.footer')
