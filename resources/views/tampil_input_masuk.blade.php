<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />

    <style>

        body {
            position: relative;
        }

        .btn-logout {
            position: absolute;
            top: 500px;
        }
    </style>
</head>

<body class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col btn-logout"><a href="/logout" onClick="return confirm ('Ingin Keluar?')" class="btn btn-primary">Logout</a></div>
    <div class="container">
        <form action="/kendaraan/kendaraanMasuk" method="post" class="text-center">
            {{ csrf_field() }}
            <div class="form-group w-50 mx-auto">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="platnomor" name="platnomor"
                        placeholder="name@example.com" />
                    <label for="platnomor">Masukkan Plat Nomor</label>
                </div>
                <button class="btn btn-primary mt-3 w-25">Tambah</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
