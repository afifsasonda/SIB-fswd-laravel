@extends('layouts.main')

@section('data')
<h2>Form Create User</h2>

<form action="/user-create-post" method="post" name="form2">
    @csrf
    <br>

    <div class="form-group">
        <label>Name<span style="color: red">*</span></label>
        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Anda">
    </div>
    <div class="form-group">
        <label>Email<span style="color: red">*</span></label>
         <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
    </div>
    <div class="form-group">
        <label><b>Role</b><span style="color: red">*</span></label>
        {{-- <input type="text" class="form-control" name="role_id" placeholder="Pilih Role"> --}}
        <select name="roles" class="form-control">
            <option selected aria-label="Disabled">Pilih Role</option>
            <option>Admin</option>
            <option>Staff</option>
            <option>User</option>
        </select>
    </div>
    <div class="form-group">
        <label>Alamat<span style="color: red">*</span></label>
         <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
    </div>
    <div class="form-group">
        <label>Password<span style="color: red">*</span></label>
         <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
    </div>
    <button type="submit" class="btn btn-primary" id="btn-submit" name="tambah">Tambahkan</button>
</form>

@endsection
