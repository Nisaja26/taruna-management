@extends('layouts.app')
@section('title', 'Data Taruna')

@section('content')
    <a href="{{ route('taruna.add') }}" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIT</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_taruna as $taruna)
                <tr>
                    <td>{{ $taruna->nama }}</td>
                    <td>{{ $taruna->nit }}</td>
                    <td>{{ $taruna->jurusan }}</td>
                    <td>{{ $taruna->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
