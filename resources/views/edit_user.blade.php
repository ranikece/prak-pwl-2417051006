@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-warning py-3 rounded-top-4">
                    <h4 class="mb-0 fw-bold">Edit Data Pengguna</h4>
                </div>

                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Periksa kembali data:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="form-control"
                                value="{{ old('nama', $user->nama) }}"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">NPM</label>
                            <input
                                type="text"
                                id="npm"
                                name="npm"
                                class="form-control"
                                value="{{ old('npm', $user->npm) }}"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                            <select id="kelas_id" name="kelas_id" class="form-select" required>
                                <option value="">-- Pilih Kelas --</option>

                                @foreach ($kelas as $item)
                                    <option
                                        value="{{ $item->id }}"
                                        @selected(old('kelas_id', $user->kelas_id) == $item->id)
                                    >
                                        {{ $item->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">
                                Kembali
                            </a>

                            <button type="submit" class="btn btn-warning fw-semibold">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection