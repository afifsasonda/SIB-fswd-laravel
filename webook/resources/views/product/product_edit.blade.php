@extends('layouts.main')

@section('data')
<h2>Form Edit Product</h2>

<form action="/product-update" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <br>

    <div class="form-group">
        <label>Nama<span>*</span></label>
        <input type="hidden" class="form-control" value="{{ $product->id }}" name="id">
        <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ $product->nama }}" name="nama" placeholder="Masukkan Nama Product">
        @error('nama')
         <div class="alert alert-danger mt-2">
            <p>Min 3 huruf</p>
         </div>
         @enderror
    </div>
    <div class="form-group">
        <label>Deskripsi<span>*</span></label>
         <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ $product->deskripsi }}" name="deskripsi" placeholder="Deskripsi">
         @error('deskripsi')
         <div class="alert alert-danger mt-2">
            <p>Max 100 huruf</p>
         </div>
         @enderror
    </div>
    <div class="form-group">
        <label>Harga<span>*</span></label>
         <input type="text" class="form-control @error('harga') is-invalid @enderror" value="{{ $product->harga }}" name="harga" placeholder="harga">
         @error('harga')
         <div class="alert alert-danger mt-2">
            <p>Harus berupa Integer</p>
         </div>
         @enderror
    </div>
    <div class="form-group">
        {{-- <label>Kategori id<span>*</span></label> --}}
         <input type="hidden" class="form-control" value="{{ $product->categories_id }}" name="categories_id" placeholder="harga">
    </div>
    <div class="form-group">
        <label>Gambar</label>
         <input type="file" class="form-control @error('file') is-invalid @enderror" value="{{ $product->file }}" name="file">
         @error('file')
         <div class="alert alert-danger mt-2">
            <p>Jpg, Png, Jpeg</p>
         </div>
         @enderror
    </div>
    <button type="submit" class="btn btn-primary" id="btn-submit" name="edit">Update</button>
    <a href="{{ url('/product') }}"><button type="submit" class="btn btn-secondary" name="cancel">Cancel</button></a>
</form>

@endsection
