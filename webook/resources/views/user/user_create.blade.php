@extends('layouts.main')

@section('data')
<h2>Form Create User</h2>

<form action="/user-create-post" method="post" name="form2">
    @csrf
    <br>

    <div class="form-group">
        <label>Name<span>*</span></label>
        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Anda">
    </div>
    <div class="form-group">
        <label>Email<span>*</span></label>
         <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
    </div>
    <div class="form-group">
        <label>Alamat<span>*</span></label>
         <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
    </div>
    <div class="form-group">
        <label>Password<span>*</span></label>
         <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
    </div>
    <button type="submit" class="btn btn-primary" id="btn-submit" name="tambah">Tambahkan</button>
</form>

@endsection
