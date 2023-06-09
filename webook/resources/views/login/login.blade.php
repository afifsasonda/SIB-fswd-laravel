<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- cdn Boostrap -->

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="container-fluid navigasi-top">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <h2 class="logo-login"><b>We<span>BOOK</span></b></h2>
            </div>
        </div>
    </div>
    <div class="container body">
        <h1 class="text-center mt-5 title-login"><span><b>Selamat Datang di WeBOOK Store</b></span></h1>
        <div class="row justify-content-center">
            <div class="card">
                <h4 class="text-center">Masuk ke Akun</h4>
                <p class="center"><b>Sudah punya akun WeBOOK Store? Yuk masuk untuk mengakses halaman store</b></p>
                @if ($errors->any())
                    <div class="alert alert-danger mb-3 m-auto" role="alert">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </div>
                @endif
                <form action="{{ url('/login') }}" method="POST">
                    {{-- wajib csrf untuk form laravel untuk keamanan --}}
                    @csrf
                    <br>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="remember">
                        <div class="form-group form-check cek">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                        </div>
                        <a href="#">Lupa Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-submit" name="masuk">Masuk</button>
                    <p>Belum punya akun? <a href="{{ url('/register') }}"><b>Daftar</b></a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
