@include('layout.header')
@include('layout.navbar')
<div class="container mt-5 mb-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Congratulation!
                            <div class="d-flex float-end" style="gap: 10px;">
                                <form action="{{route('kelulusan')}}" method="GET" class="d-flex mr-5">
                                    <input name="search" class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                                <a href="{{route('index')}}" class="btn btn-primary">back</a>
                            </div>
                        </h4>
                    </div>
                    <div class="card-body">
                       <table class="table table-border table-striped">
                         <thead>
                            <tr>
                                <th>NO.</th>
                                <th>nama</th>
                                <th>NISN</th>
                                <th>email</th>
                                <th>jurusan</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{($users->currentPage() -1 ) * $users->perPage() + $loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->NISN}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->jurusan}}</td>
                                </tr>
                            @endforeach
                         </tbody>
                       </table>
                       <div>
                        {{$users->links('pagination::bootstrap-5')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layout.footer')