@extends('layouts.main')

@section('dataproduct')
<h1>Data</h1>

<div class="tabel-responsive">
    <table id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Product</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($nama as $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a }}</td>
                <td>-</td>
            </tr>

            @empty
            <tr>
                <td colspan="3">Data Tidak Ada</td>
            </tr>

            @endforelse
        </tbody>

    </table>
</div>

{{-- <p>nama product : {{ $nama }}</p> --}}

@endsection
