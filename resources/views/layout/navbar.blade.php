    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
        <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="/img/logounhas.png" width="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{Route::is('index') ? 'active' : ''}}" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fakultas & Prodi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('pendaftaran') ? 'active' : ''}}" href="{{route('pendaftaran')}}">Pendaftaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">UKT</a>
            </li>
            </ul>

            <a href="#" class="" style="text-decoration: none;">My Account</a>
            {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
        </div>
    </nav>