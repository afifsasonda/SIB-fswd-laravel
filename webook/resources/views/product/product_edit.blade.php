@extends('layouts.main')

@section('data')
<h2>Form Edit Product</h2>

<form action="/product-update" method="post" name="form2">
    @method('put')
    @csrf
    <br>

    <div class="form-group">
        <label>Nama<span>*</span></label>
        <input type="hidden" class="form-control" value="{{ $product->id }}" name="id">
        <input type="text" class="form-control" value="{{ $product->nama }}" name="nama" placeholder="Masukkan Nama Product">
    </div>
    <div class="form-group">
        <label>Deskripsi<span>*</span></label>
         <input type="text" class="form-control" value="{{ $product->deskripsi }}" name="deskripsi" placeholder="Deskripsi">
    </div>
    <div class="form-group">
        <label>Harga<span>*</span></label>
         <input type="text" class="form-control" value="{{ $product->harga }}" name="harga" placeholder="harga">
    </div>
    <div class="form-group">
        {{-- <label>Kategori id<span>*</span></label> --}}
         <input type="hidden" class="form-control" value="{{ $product->categories_id }}" name="categories_id" placeholder="harga">
    </div>
    <button type="submit" class="btn btn-primary" id="btn-submit" name="edit">Edit</button>
</form>

@endsection
