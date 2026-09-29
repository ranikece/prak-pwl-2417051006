<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>{{ $title ?? 'PWL User' }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

        :root {
            --pink: #e889ad;
            --pink-dark: #d66f96;
            --pink-bg: #fff7fa;
            --dark: #3f3036;
        }

        body {
            background-color: var(--pink-bg);
        }

        /* Navbar dan footer */
        .bg-dark {
            background-color: var(--dark) !important;
        }

        /* Tombol utama */
        .btn-primary {
            background-color: var(--pink-dark) !important;
            border-color: var(--pink-dark) !important;
        }

        .btn-primary:hover {
            background-color: #c85f88 !important;
            border-color: #c85f88 !important;
        }

        /* Header card */
        .card-header {
            background-color: var(--pink) !important;
        }

        /* Badge kelas */
        .text-bg-primary {
            background-color: var(--pink-dark) !important;
        }

        /* Link navbar */
        .navbar-dark .navbar-nav .nav-link {
            color: #f8dce7;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ffffff;
        }

        /* Judul */
        h1 {
            color: var(--dark);
        }

    </style>

</head>


<body>

    <x-navbar />

    @yield('content')

    <x-footer />


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>

</html>