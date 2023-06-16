@extends('layouts.main')

@section('data')
<h2>Edit User</h2>

<form action="/user-update" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <br>

    <div class="form-group">
        <label><b>Name</b><span style="color: red">*</span></label>
        <input type="hidden" class="form-control" value="{{ $user->id }}" name="id">
        <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Masukkan Nama Anda">
    </div>
    {{-- <div class="form-group">
        <label><b>Email</b><span style="color: red">*</span></label>
         <input type="text" class="form-control" value="{{ $user->email }}" name="email" placeholder="Masukkan Email">
    </div> --}}
    <div class="form-group">
        <label><b>Role</b><span style="color: red">*</span></label>
        <select name="roles" class="form-control">
            <option selected aria-label="Disabled">{{ $user->roles }}</option>
            <option>Admin</option>
            <option>Staff</option>
            <option>User</option>
        </select>
    </div>
    <div class="form-group">
        <label>Avatar</label>
         <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" name="avatar" value="{{ $user->avatar }}">
         <!--error message untuk title -->
         @error('avatar')
         <div class="alert alert-danger mt-2">
            <p>Jpg, Png, Jpeg</p>
         </div>
         @enderror
    </div>
    <div class="form-group">
        <label><b>Alamat</b><span style="color: red">*</span></label>
         <input type="text" class="form-control" value="{{ $user->alamat }}" name="alamat" placeholder="Masukkan Alamat">
    </div>
    {{-- <div class="form-group">
        <label><b>Password</b><span style="color: red">*</span></label>
         <input type="password" class="form-control" value="{{ $user->password }}" name="password" placeholder="Masukkan Password">
    </div> --}}
    <button type="submit" class="btn btn-primary" id="btn-submit" name="edit">Edit</button>
</form>

@endsection
