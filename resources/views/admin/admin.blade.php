<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Parkir</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/app/js') }}"></script>
</head>

<body>
    {{-- <nav>
        <ul>
            <li><a href="/logout" onClick="return confirm ('Yakin?')">Logout</a></li>
            <li><a href="#">Laporan</a>
                <ul>
                    <li><a href="#">Laporan Parkir</a></li>
                </ul>
            </li>
            <li><a href="#">Parkir</a>
                <ul>
                    <li><a href="#">Parkir Masuk</a></li>
                    <li><a href="#">Parkir Keluar</a></li>
                </ul>
            </li>
            <li><a href="#">Home</a></li>
            <li class="SPL">
                <h3>SISTEM PARKIR LARAVEL</h3>
            </li>
        </ul>
    </nav> --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3>Selamat Datang! Admin</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Data
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="users">Data Users</a></li>
                            <li><a class="dropdown-item" href="kendaraan">Data Kendaraan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Laporan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Laporan Parkir</a></li>
                        </ul>
                    </li>
                    <li><a href="/logout" class="btn btn-info" onClick="return confirm ('Ingin Keluar?')">Logout</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>