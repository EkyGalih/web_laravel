@extends('Mahasiswa.layout')

@section('title')
Mahasiswa
@endsection

@section('content')
<a href="{{ url('mahasiswa/create') }}" class="btn btn-success btn-sm">
    Tambah Mahasiswa
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->nim }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->alamat }}</td>
            <td>
                <a href="{{ url('mahasiswa/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ url('mahasiswa/'.$value->id) }}" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" name="_method" value="DELETE">
                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                     Hapus
                 </button>
             </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection