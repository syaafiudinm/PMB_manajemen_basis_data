@include('layout.header')
@include('layout.navbar')

<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Berikut adalah jumlah UKT</h1>
        <p class="lead">selamat datang calon mahasiswa baru unhas!</p>
        <hr class="my-4">
        {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
    </div> 
</div>

<div class="container mt-5 mb-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Biaya Ukt Tahun 2024!
                            <div class="d-flex float-end" style="gap: 10px;">
                                <a href="{{route('index')}}" class="btn btn-primary">back</a>
                            </div>
                        </h4>
                    </div>
                    <div class="card-body">
                       <table class="table table-border table-striped">
                         <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Golongan</th>
                                <th>Biaya</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($ukts as $ukt)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$ukt->golongan}}</td>
                                    <td>{{$ukt->biaya}}</td>
                                </tr>
                            @endforeach
                         </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')