@include('layoutAdmin.header')
<body id="page-top" class="bg-danger">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                            <div class="">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="{{ route('register.save') }}" class="user" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="name" name="name" class="form-control form-control-user"
                                                placeholder="Enter Your Name...">
                                                @error('name')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                                @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="NISN" class="form-control form-control-user"
                                                placeholder="Enter Your NISN">
                                                @error('NISN')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="jurusan" class="form-control form-control-user"
                                                placeholder="Enter Jurusan">
                                                @error('jurusan')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control form-control-user"
                                                placeholder="Enter your phone number">
                                                @error('phone')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                                @error('password')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-user btn-block">
                                            register
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@include('layoutAdmin.footer')