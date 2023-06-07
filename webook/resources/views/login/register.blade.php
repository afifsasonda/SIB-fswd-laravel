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
                <h4 class="text-center">Daftarkan Akun</h4>
                {{-- <p class="center"><b>Sudah punya akun WeBOOK Store? Yuk masuk untuk mengakses halaman store</b></p> --}}

                <form action="{{ url('/register') }}" method="POST" enctype="multipart/form-data">
                    {{-- wajib csrf untuk form laravel untuk keamanan --}}
                    @csrf
                    <br>
                    <div class="form-group">
                        <label>Username<span>*</span></label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label>Email<span>*</span></label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    {{-- <div class="form-group">
                        <label>Role<span>*</span></label>
                        <input type="text" class="form-control" name="role_id">
                    </div> --}}
                    <div class="form-group">
                        <label><b>Role</b><span>*</span></label>
                        {{-- <input type="text" class="form-control" name="role_id" placeholder="Pilih Role"> --}}
                        <select name="role_id" class="form-control">
                            <option selected aria-label="Disabled">Pilih Role</option>
                            <option>Admin</option>
                            <option>Staff</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><b>Unggah Foto</b></label>
                        <input class="form-control" type="file" id="avatar" name="avatar">
                    </div>
                    <div class="form-group">
                        <label type-h>Alamat</label>
                        <input type="text" name="alamat" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password<span>*</span></label>
                         <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-submit" name="masuk">Daftar</button>
                    <p>Sudah punya akun? <a href="{{ url('/login') }}"><b>Login</b></a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
