@extends('layouts.main')

@section('data')

<h2>Form Create Slider</h2>
@if ($errors->any())
    <div class="alert alert-danger mb-3 m-auto" role="alert">Whoops! <strong>There were some problems with your input. </strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/slider-create-post" method="post" enctype="multipart/form-data">
    @csrf
    <br>

    <div class="form-group">
        <label>Banner<span>*</span></label>
        <input type="file" class="form-control @error('banner') is-invalid @enderror" name="banner" value="{{ old('banner') }}">
        @error('banner')
        <div class="alert alert-danger mt-2">
            <p>Jpg, Png, Jpeg</p>
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
    <button type="submit" class="btn btn-primary" id="btn-submit" name="tambah">Tambahkan</button>
    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
    <a href="/slider" class="btn btn-secondary">Cancel</a>
</form>

@endsection
