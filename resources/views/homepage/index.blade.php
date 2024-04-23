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

<div class="container mt-5 d-flex" style="gap: 18rem;">
  <img src="/img/ftuh.jpg" alt="" width="500" class="rounded-4">
  <img src="/img/rektorat.jpg" alt="" width="500" class="rounded-4">
</div>

@include('layout.footer')
