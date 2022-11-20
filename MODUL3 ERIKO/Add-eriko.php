<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./style/style.css">

    <!--Navbar-->
    <section>
        <nav class="navbar navbar-expand-lg bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Home-eriko.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Add-eriko.php">My Car</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!--Add Form-->
    <section>
        <div class="additem">
            <div class="judul">
                <h1>Tambah Mobil</h1>
                <h6 style="color: grey;">Tambah mobil baru anda ke list Show Room</h6>
            </div>
            <form action="./config/insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_mobil" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" placeholder="BMW 14">
                </div>
                <div class="mb-3">
                    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik"
                        placeholder="Eriko Putra Jayanto_1202200209">
                </div>
                <div class="mb-3">
                    <label for="merek" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merek" name="merek" placeholder="BMW">
                </div>
                <div class="mb-3">
                    <label for="tgl_beli" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="tgl_beli" name="tgl_beli" placeholder="11/12/2022">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto_mobil" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="foto_mobil" name="foto_mobil">
                </div>
                <div>
                    <div>
                        <br>
                        <p>Status Pembayaran</p>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="lunas"
                            value="Lunas">
                        <label class="form-check-label" for="lunas">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="belum_lunas"
                            value="Belum Lunas">
                        <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
                    </div>
                </div>
                <div>
                    <br>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Selesai</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>