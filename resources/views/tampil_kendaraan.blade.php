<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>

<body>
    <a href="/logout" onClick="return confirm ('Ingin Keluar?')" class="btn btn-primary mb-3">Logout</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">plat</th>
                <th scope="col">lantai</th>
                <th scope="col">nama ruang</th>
                <th scope="col">Jam Masuk</th>
                <th scope="col">Jam Keluar</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Keluar</th>
                <th scope="col">biaya parkir</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $kendaraan)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kendaraan->platnomor }}</td>
                    <td>{{ $kendaraan->lantai }}</td>
                    <td>{{ $kendaraan->namaruang }}</td>
                    <td>{{ $kendaraan->jammasuk }}</td>
                    <td>{{ $kendaraan->jamkeluar }}</td>
                    <td>{{ $kendaraan->tglmasuk }}</td>
                    <td>{{ $kendaraan->tglkeluar }}</td>
                    <td>{{ $kendaraan->biayaparkir }}</td>
                    <td>{{ $kendaraan->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
