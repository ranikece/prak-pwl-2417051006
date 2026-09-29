<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('user.index') }}">
            PWL User
        </a>

        <div class="navbar-nav ms-auto">

            <a class="nav-link" href="{{ route('user.index') }}">
                Daftar User
            </a>

            <a class="nav-link" href="{{ route('user.create') }}">
                Tambah User
            </a>

        </div>

    </div>
</nav>