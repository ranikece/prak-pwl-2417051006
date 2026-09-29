@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1 class="fw-bold mb-1">
                Daftar Pengguna
            </h1>

            <p class="text-muted mb-0">
                Data pengguna yang telah terdaftar dalam sistem.
            </p>

        </div>

        <a
            href="{{ route('user.create') }}"
            class="btn btn-primary"
        >
            + Tambah Pengguna
        </a>

    </div>


    <x-user-table :users="$users" />

</div>

@endsection