<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/d508860b60.js" crossorigin="anonymous"></script>
</head>

<body class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-plus mx-2"></i>Tambah User
            </div>
            <div class="card-body">
                <form method="get" action="user/add_user" id="myForm">
                    {{ csrf_field() }}
                    <!-- Username -->
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" required />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" required />
                        </div>
                    </div>

                    <!-- Nama Lengkap -->
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" required />
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" required />
                        </div>
                    </div>

                    <!-- No Telp -->
                    <div class="mb-3 row">
                        <label for="nomor" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomor" name="nomor" required />
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="mb-3 row">
                        <label for="role" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="role" id="role"
                                aria-label="Default select example">
                                <option value="admin">admin</option>
                                <option value="PMasuk">Petugas Masuk</option>
                                <option value="PKeluar">Petugas Keluar</option>
                                <option value="PRuang">Petugas Ruang</option>
                            </select>
                        </div>
                    </div>

                    <!--  -->
                    <hr />

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" onclick="resetForm()" class="btn btn-outline-secondary">
                            Reset
                        </button>
                        <button class="btn btn-primary">Add Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function resetForm() {
            document.getElementById("myForm").reset();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
