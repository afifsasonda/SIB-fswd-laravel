@extends('layouts.main')

@section('data')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h1>Slider Controll</h1>
        </div>
        @if (Auth::user()->roles == 'Admin')
        <div class="col-md-2">
            <a href="/slider-create"class="btn btn-primary"><i data-feather="plus-square"></i></a>
        </div>
        @endif
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ message }}</p>
</div>

@endif

<div class="tabel-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Banner</th>
                <th>Deskripsi</th>
                @if (Auth::user()->roles == 'Admin')
                <th>Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse ($slider as $s)
            <tr>
                <td>{{ $loop->iteration }}.</td>
                <td><img src="/file/{{ $s->banner }}" alt="" style="height: 50px; width: 50px;"></td>
                <td>{{ $s->deskripsi }}</td>
                <td>
                    @if (Auth::user()->roles == 'Admin')
                    <a href="/slider-edit/{{ $s->id }}" class="btn btn-warning"><i data-feather="edit"></i></a>
                    <a href="/slider-delete/{{ $s->id }}" class="btn btn-danger"><i data-feather="trash"></i></a>
                    @endif
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="3">Data Tidak Ada</td>
            </tr>

            @endforelse
        </tbody>

    </table>
</div>

@endsection
