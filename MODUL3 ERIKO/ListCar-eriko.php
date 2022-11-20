<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>list car</title>
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
                    <a class="btn btn btn-light" href="Add-eriko.php" role="button">Add Car</a>
                </div>
            </div>
        </nav>
    </section>


    <!--List Car-->
    <section>
        <div class="additem">
            <div class="judul">
                <h1>Tambah Mobil</h1>
                <h6 style="color: grey;">Tambah mobil baru anda ke list Show Room</h6>
            </div>
            <div class="row">
                <?php
                    include './config/connector.php';

                    $query = mysqli_query($connect, "SELECT * FROM showroom_eriko_table");
                    if($query){
                        while($select = mysqli_fetch_assoc($query)){
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/<?php echo $select['foto_mobil']?>" class="card-img-top" alt="gambar mobil"
                            style="width: 288px; height:190px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $select['nama_mobil']?></h5>
                            <p class="card-text"><?php echo $select['deskripsi']?></p>
                            <a href="Detail-eriko.php"
                                class="btn btn-primary btn-edit me-4">Detail</a>
                            <a href="config/delete.php?id_mobil=<?php echo $select['id_mobil']?>"
                                class="btn btn-danger btn-edit">Hapus</a>
                        </div>
                    </div>
                </div>
                <?php
                        }  
                    }
                ?>
            </div>
    </section>

</body>

</html>