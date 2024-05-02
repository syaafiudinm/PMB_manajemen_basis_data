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
                <a class="nav-link {{Route::is('ukt') ? 'active' : ''}}" href="{{route('ukt')}}">Cek UKT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('kelulusan') ? 'active' : ''}}" href="{{route('kelulusan')}}">Kelulusan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('fakultas') ? 'active' : ''}}" href="{{route('fakultas')}}">Fakultas</a>
            </li>
            </ul>

            
            
            @auth
            <a href="{{route('show')}}" class="btn btn-success" style="margin-right: 6px;">my Account</a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                @method('delete')
                <button onclick="return confirm('apakah anda ingin logout?')" class="btn btn-primary  mr-2 d-none d-lg-inline" type="submit">
                    <i class="d-none d-lg-inline fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </button>
            </form>

            @else
            <a href="{{route('login')}}" class="btn btn-primary" style="margin-right: 8px;">login</a>
            @endauth
            
            
            {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
        </div>
    </nav>