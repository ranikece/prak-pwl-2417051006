@extends('layouts.app')

@section('content')

<div class="container py-5">

    {{-- Header halaman --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1">Daftar Pengguna</h1>
            <p class="text-muted mb-0">
                Data pengguna yang telah terdaftar dalam sistem.
            </p>
        </div>

        <a href="{{ route('user.create') }}" class="btn btn-primary">
            <i class="bi bi-person-plus me-1"></i>
            Tambah Pengguna
        </a>
    </div>

    {{-- Notifikasi berhasil --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <strong><i class="bi bi-check-circle me-1"></i> Berhasil!</strong>
            {{ session('success') }}

            <button type="button" class="btn-close"
                data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Notifikasi gagal --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
            <strong><i class="bi bi-exclamation-circle me-1"></i> Gagal!</strong>
            {{ session('error') }}

            <button type="button" class="btn-close"
                data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Notifikasi validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger shadow-sm" role="alert">
            <strong>Data belum valid.</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Tabel pengguna --}}
    <x-user-table :users="$users" />

</div>

@endsection