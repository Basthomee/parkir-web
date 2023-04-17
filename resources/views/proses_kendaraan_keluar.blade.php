<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card w-50">
            <div class="card-header">
                Data Kendaraan
            </div>
            <div class="card-body">

                @if (is_object($data))
                    <div class="mb-3 mt-2 row">
                        <h2>{{ $data->platnomor }}</h2>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="{{ $data->status }}">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Waktu Masuk</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="{{ $data->tglmasuk . ' ' . $data->jammasuk }}">
                        </div> 
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Biaya Parkir</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="{{ $biayaparkir }}">
                        </div>
                    </div>
                @else
                    <p>Data not found</p>
                @endif


                <form action="/kendaraan/gantistatuskeluar" method="get">
                    @csrf
                    @method('DELETE')
                    <input type="text" hidden name="plat" value="{{ $data->platnomor }}">
                    <div class="d-grid gap-2 mt-5">
                        <a href="{{ route('inputKeluar') }}" class="btn btn-primary">Back</a>
                        <button class="btn btn-danger">Keluarkan Kendaraan</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
