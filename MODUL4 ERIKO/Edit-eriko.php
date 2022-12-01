<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
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
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
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
                            <a class="nav-link" href="ListCar-eriko.php">My Car</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn btn-light" href="Add-eriko.php" role="button">Add Car</a>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button type="button" class="btn btn btn-light dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    Profil
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Profil-eriko.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="Loginhome-eriko.php">LogOut</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <?php
        include './config/connector.php';
    
        $id_mobil = $_GET['id_mobil'];
        $listMobil = mysqli_query($connect, "select * from showroom_eriko_table where id_mobil = '$id_mobil'");
        while($file = mysqli_fetch_array($listMobil)){
    ?>

    <!--Item Detail-->
    <section>
        <div class="additem">
            <div class="judul">
                <h1><?php echo $file['nama_mobil']?></h1>
                <h6 style="color: grey;">Detail Mobil</h6>
            </div>
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="images/<?php echo $file['foto_mobil']?>"
                        alt="<?php echo $file['nama_mobil']?>" style="width: 600px;" />
                </div>
                <div class="col">
                    <div>
                        <form action="config/edit.php?id_mobil=<?php echo $data['id_mobil']?>" method="POST"
                            enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_mobil" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"
                                value="<?php echo $file['nama_mobil'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik"
                                value="<?php echo $file['pemilik_mobil'];?>">
                        </div>
                        <div class=" mb-3">
                            <label for="merek" class="form-label">Merk</label>
                            <input type="text" class="form-control" id="merek" name="merek"
                                value="<?php echo $file['merk_mobil'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_beli" class="form-label">Tanggal Beli</label>
                            <input type="date" class="form-control" id="tgl_beli" name="tgl_beli"
                                value="<?php echo $file['tanggal_beli'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" rows="3"
                                value="<?php echo $file['deskripsi'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="foto_mobil" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="foto_mobil" name="foto_mobil"
                                value="<?php echo $file['deskripsi'];?>">
                        </div>
                        <div>
                            <div>
                                <br>
                                <p>Status Pembayaran</p>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas"
                                    <?php if($file['status_pembayaran']=='Lunas') echo 'checked'?>>
                                <label class="form-check-label" for="lunas">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="belum_lunas"
                                    value="Belum Lunas"
                                    <?php if($file['status_pembayaran']=='Belum Lunas') echo 'checked'?>>
                                <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
                            </div>
                        </div>
                        <div>
                            <br>
                            <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        }
    ?>
</body>

</html>