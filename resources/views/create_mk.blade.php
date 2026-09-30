@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Mata Kuliah</h2>

    <form action="/matakuliah" method="POST">
        @csrf

        <div>
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" required>
        </div>

        <br>

        <div>
            <label>SKS</label>
            <input type="number" name="sks" required>
        </div>

        <br>

        <button type="submit">Simpan</button>
    </form>
</div>

@endsection