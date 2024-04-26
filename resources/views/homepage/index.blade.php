@include('layout.header')
@include('layout.navbar')

<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Halo, calon Mahasiswa Baru!</h1>
        <p class="lead">selamat datang di web pendaftaran mahasiswa baru unhas!</p>
        <hr class="my-4">
        {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
    </div> 
</div>

<div class="container mb-bawah">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="/img/ftuh.jpg" class="d-block w-100 rounded-4 c-img" alt="">
      </div>
      <div class="carousel-item c-item">
        <img src="/img/rektorat.jpg" class="d-block w-100 rounded-4 c-img" alt="">
      </div>
      <div class="carousel-item c-item">
        <img src="/img/unhas.jpeg" class="d-block w-100 rounded-4 c-img" alt="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
{{-- <div class="container mt-5 d-flex" style="gap: 18rem;">
  <img src="/img/ftuh.jpg" alt="" width="500" class="rounded-4">
  <img src="/img/rektorat.jpg" alt="" width="500" class="rounded-4">
</div> --}}

@include('layout.footer')
