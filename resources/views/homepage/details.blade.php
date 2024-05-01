@include('layout.header')
@include('layout.navbar')

<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Halo, {{Auth::user()->name}}!</h1>
        <p class="lead">berikut ini adalah data anda</p>
        <hr class="my-4">
        {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
    </div> 
</div>

<div class="container mt-5">
    <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Nama Lengkap</div>
            {{$users->name}}
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Email Aktif</div>
            {{$users->email}}
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">NISN</div>
            {{$users->NISN}}
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">No. Telepon</div>
            {{$users->phone}}
          </div>
        </li>
    </ol>
</div>

@include('layout.footer')