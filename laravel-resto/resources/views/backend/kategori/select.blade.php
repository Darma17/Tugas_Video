@extends('backend.back')

@section('admincontent')
    <div>
        <h1>Kategori</h1>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ url('admin/kategori/create') }}">Tambah Data</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kategori -> kategori }}</td>
                        <td><a class="btn btn-primary" href="{{ url('admin/kategori/'.$kategori -> idkategori.'/edit') }}">Ubah</a></td>
                        <td><a class="btn btn-danger" href="{{ url('admin/kategori/'.$kategori -> idkategori) }}">Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection