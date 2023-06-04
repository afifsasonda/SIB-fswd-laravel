@extends('layouts.main')

@section('data')
<h2>Edit User</h2>

<form action="/user-update" method="post" name="form2">
    @method('put')
    @csrf
    <br>

    <div class="form-group">
        <label>Name<span>*</span></label>
        <input type="hidden" class="form-control" value="{{ $user->id }}" name="id">
        <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Masukkan Nama Anda">
    </div>
    <div class="form-group">
        <label>Email<span>*</span></label>
         <input type="text" class="form-control" value="{{ $user->email }}" name="email" placeholder="Masukkan Email">
    </div>
    <div class="form-group">
        <label>Alamat<span>*</span></label>
         <input type="text" class="form-control" value="{{ $user->alamat }}" name="alamat" placeholder="Masukkan Alamat">
    </div>
    <div class="form-group">
        <label>Password<span>*</span></label>
         <input type="password" class="form-control" value="{{ $user->password }}" name="password" placeholder="Masukkan Password">
    </div>
    <button type="submit" class="btn btn-primary" id="btn-submit" name="edit">Edit</button>
</form>

@endsection
