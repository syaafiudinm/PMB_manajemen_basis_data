@include('layout.header')
@include('layout.navbar')

<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Halo, mahasiswa baru Universitas Hasanuddin!</h1>
        <p class="lead">kenalan sama fakultas yang ada di Unhas Yuk!</p>
        <hr class="my-4">
        {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
    </div> 
</div>

<div class="container d-flex gap-5">
    @foreach ($fakultas as $fakultas)
    <div class="mt-5">
        <div class="card" style="width: 18rem;">
            <img src="/img/ftuh.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$fakultas->name}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@include('layout.footer')