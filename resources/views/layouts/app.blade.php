<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWL User</title>

    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #402f36;
            padding: 20px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h2 {
            margin: 0;
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 18px;
        }

        main {
            flex: 1;
            padding: 10px 6% 40px;
        }

        footer {
            background-color: #402f36;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: auto;
        }
    </style>
</head>

<body>

    <header>
        <h2>PWL User</h2>

        <nav>
            <a href="/user">Daftar User</a>
            <a href="/user/create">Tambah User</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        © 2026 PWL - Pemrograman Web Lanjut
    </footer>

</body>
</html>