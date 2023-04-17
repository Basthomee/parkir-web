<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/d508860b60.js" crossorigin="anonymous"></script>

    <style>
        tr[data-href]:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row mt-5 mb-4">
            <div class="col"><a href="/logout" onClick="return confirm ('Ingin Keluar?')" class="btn btn-primary">Logout</a></div>
            <div class="col">
                <form action="/kelolaMasuk" method="post" class="input-group mb-3">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" placeholder="Cari Data" name='cari'
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" id="button-addon2"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

        @if ($data->count() !== 0)
            <table class="table table-hover">
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
                        {{--  --}}
                        <tr data-href={{ "/kendaraan/kendaraanKeluar/$kendaraan->id" }}>
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
        @else
            <table class="table table-hover">
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
            </table>
            <div class="alert alert-danger" role="alert">
                Plat Nomor Tidak Ditemukan
            </div>
        @endif

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const rows = document.querySelectorAll("tr[data-href]");
            rows.forEach(row => {
                row.addEventListener("click", () => {
                    window.location.href = row.dataset.href;
                })
            });
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
