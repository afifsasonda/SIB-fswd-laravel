@extends('layouts.main')

@section('data')
<h2>Form Create Product</h2>
@if ($errors->any())
    <div class="alert alert-danger mb-3 m-auto" role="alert">Whoops! <strong>There were some problems with your input. </strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/product-create-post" method="post" enctype="multipart/form-data">
    @csrf
    <br>

    <div class="form-group">
        <label>Nama<span>*</span></label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Product">
        @error('nama')
         <div class="alert alert-danger mt-2">
            <p>Min 3 karakter</p>
         </div>
         @enderror
    </div>

    <div class="form-group">
        <label>Deskripsi<span>*</span></label>
         <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" name="deskripsi" placeholder="Deskripsi">
         @error('deskripsi')
         <div class="alert alert-danger mt-2">
            <p>Max 100 huruf</p>
         </div>
         @enderror
    </div>

    <div class="form-group">
        <label>Harga<span>*</span></label>
         <input type="text" class="form-control  @error('harga') is-invalid @enderror" value="{{ old('harga') }}" name="harga" placeholder="harga">
         @error('harga')
         <div class="alert alert-danger mt-2">
            <p>Harus berupa Integer</p>
         </div>
         @enderror

    </div>
    <div class="form-group">
        {{-- <label>Kategori id<span>*</span></label> --}}
         <input type="hidden" class="form-control" name="categories_id" placeholder="harga">
    </div>

    <div class="form-group">
        <label>Gambar</label>
         <input type="file" class="form-control-file @error('file') is-invalid @enderror" name="file">
         <!--error message untuk title -->
         @error('file')
         <div class="alert alert-danger mt-2">
            <p>Jpg, Png, Jpeg</p>
         </div>
         @enderror
    </div>
    <button type="submit" class="btn btn-primary" id="btn-submit" name="tambah">Tambahkan</button>
    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
    <a href="/slider" class="btn btn-secondary">Cancel</a>
</form>

@endsection
