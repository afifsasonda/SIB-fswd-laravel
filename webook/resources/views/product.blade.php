@extends('layouts.main')

@section('data')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h1>Data Product</h1>
        </div>
        <div class="col-md-2">
            <a href="/product-create"class="btn btn-primary"><i data-feather="plus-square"></i></a>
        </div>
    </div>
</div>

<div class="tabel-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Product</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($product as $a)
            <tr>
                <td>{{ $loop->iteration }}.</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->deskripsi }}</td>
                <td>
                    <a href="/product-edit/{{ $a->id }}" class="btn btn-warning"><i data-feather="edit"></i></a>
                    <a href="/product-delete/{{ $a->id }}" class="btn btn-danger"><i data-feather="trash"></i></a>
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
