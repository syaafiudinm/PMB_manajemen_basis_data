@include('layout.header')
@include('layout.navbar')
<div class="container mt-5">
    <form action="{{ url('products/create') }}" method="POST">
        @csrf

        <div class="row justify-content-ceter">
            <div class="col md-6">

                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Daftar
                            <a href="{{url('products')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" autocomplete="off" />
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">NISN</label>
                            <textarea name="NISN" rows="3" class="form-control"></textarea>
                            @error('description') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="" for="inputGroupSelect01">Pilih Jurusan</label>
                            <select class="form-select" id="inputGroupSelect01" name="class">
                              <option selected>Pilih sesuai yang diminati!</option>
                              <option value="A">Teknik</option>
                              <option value="B">FKM</option>
                              <option value="C">Kedokteran</option>
                              @error('class')
                              <span class="text text-danger">{{$message}}</span>
                              @enderror
                            </select>
                          </div>
                        <div class="mb-3">
                            <label for="">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" autocomplete="off"/>
                            @error('stock') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Tempat,Tanggal Lahir ex: makassar, 8 desember 2004</label>
                            <input type="text" name="asal_sekolah" class="form-control" autocomplete="off"/>
                            @error('stock') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">No.Handphone</label>
                            <input type="text" name="phone" class="form-control" autocomplete="off"/>
                            @error('stock') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="phone" class="form-control" autocomplete="off"/>
                            @error('stock') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@include('layout.footer')