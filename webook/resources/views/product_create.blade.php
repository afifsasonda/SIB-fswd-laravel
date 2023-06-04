@extends('layouts.main')

@section('data')
<h2>Form Create Product</h2>

<form action="/product-create-post" method="post" name="form2">
    @csrf
    <br>

    <div class="form-group">
        <label>Nama<span>*</span></label>
        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Product">
    </div>
    <div class="form-group">
        <label>Deskripsi<span>*</span></label>
         <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
    </div>
    <div class="form-group">
        <label>Harga<span>*</span></label>
         <input type="text" class="form-control" name="harga" placeholder="harga">
    </div>
    <button type="submit" class="btn btn-primary" id="btn-submit" name="tambah">Tambahkan</button>
</form>

@endsection
