<div class="card shadow-sm border-0">

    <div class="card-header bg-primary text-white py-3">

        <h5 class="mb-0">
            Data Pengguna
        </h5>

    </div>


    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>

                        <th class="ps-4">
                            ID
                        </th>

                        <th>
                            Nama
                        </th>

                        <th>
                            NPM
                        </th>

                        <th>
                            Kelas
                            <th class="text-center">Aksi</th>
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse ($users as $user)

                        <tr>

                            <td class="ps-4">
                                {{ $user->id }}
                            </td>

                            <td class="fw-semibold">
                                {{ $user->nama }}
                            </td>

                            <td>
                                {{ $user->npm }}
                            </td>

                            <td>

                                <span class="badge text-bg-primary">
                                    {{ $user->nama_kelas }}
                                    <td class="text-center text-nowrap">
    <a href="{{ route('user.edit', $user->id) }}"
       class="btn btn-warning btn-sm">
        Edit
    </a>

    <form action="{{ route('user.destroy', $user->id) }}"
          method="POST"
          class="d-inline"
          onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger btn-sm">
            Hapus
        </button>
    </form>
</td>
                                </span>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="5"
                                class="text-center py-5 text-muted"
                            >
                                Belum ada data pengguna.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>
