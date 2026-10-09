@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Daftar Mata Kuliah</h2>

    <a href="/matakuliah/create">Tambah Mata Kuliah</a>

    <br><br>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Nama Mata Kuliah</td>
                <td>SKS</td>
                <td>Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($mataKuliah as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $mk->id) }}">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection