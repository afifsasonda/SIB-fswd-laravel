@extends('layouts.main')

@section('data')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h1>Data Users</h1>
        </div>
        @if (Auth::user()->roles == 'Admin')
        <div class="col-md-2">
            <a href="/user-create" class="btn btn-primary"><i data-feather="user-plus"></i></a>
        </div>
        @endif
    </div>
</div>

<div class="tabel-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pengguna</th>
                <th>Role</th>
                @if (Auth::user()->roles == 'Admin')
                <th>Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse ($user as $u)
            <tr>
                <td>{{ $loop->iteration }}.</td>
                <td>{{ $u->name }} <br>
                    {{-- apakah relasi ke order ada? jika ya tampilkan --}}
                    @if ($u ->orders != null)
                    @foreach ( $u ->orders as $o )
                        Tanggal Order : {{ $o ->tanggal_order }}

                    @endforeach
                    @else
                        -
                    @endif
                </td>
                <td>{{ $u->roles }}</td>
                <td>
                    @if (Auth::user()->roles == 'Admin')
                    <a href="/user-edit/{{ $u->id }}" class="btn btn-warning"><i data-feather="edit"></i></a>
                    <a href="/user-delete/{{ $u->id }}" class="btn btn-danger"><i data-feather="trash"></i></a>
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

{{-- <p>nama product : {{ $nama }}</p> --}}
<p>
    Keterangan:
   <p>
    @if (count($user)== 1)
        saya memiliki 1 user
    @elseif (count($user)>1)
        Saya memiliki banyak user
    @else
        saya tidak memiliki user
    @endif
   </p>
</p>

@endsection
