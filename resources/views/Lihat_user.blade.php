<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Parking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/d508860b60.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="mt-5 mb-3 d-flex justify-content-between align-items-center">
            <div>
                <i class="fa-solid fa-users mx-2"></i>
                <span style="font-size: 20px">Data Users</span>
            </div>
            <div>
                <a type="button" class="btn btn-primary" style="margin-right: 30px" href="/tambah">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <hr class="mb-4" />
        <div class="card">
            <div class="card-header bg-light text-dark">Data users</div>
            <div class="card-body">
                <table class="table table-hover table-striped text-center mt-2">
                    <thead>
                        <tr>
                            <th class="" scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Bagian</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- FOR -->
                        @foreach ($data as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->no_telp }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a type="button" class="btn btn-success" href="/user/edit/{{ $user->Id }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a type="button" class="btn btn-danger" href="/user/delete/{{ $user->Id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- END FR -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
