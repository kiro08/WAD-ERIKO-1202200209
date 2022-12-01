<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
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
                                    Eriko
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Profile-eriko.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="Loginhome-eriko.php">LogOut</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!--Profile-->
    <section>
        <div class="additem">
            <div class="judul">
                <h1 style="text-align:center">Profile</h1>
                <h6 style="color:grey; text-align:center;">Edit data anda</h6>
            </div>
            <form action="">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                            value="<?php echo $_COOKIE['email']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo $_COOKIE['nama']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hp" name="hp"
                            value="<?php echo $_COOKIE['no_hp']; ?>">
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="confirm" class="col-sm-2 col-form-label">Konfirmasi password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="confirm" name="confirm"
                            placeholder="Konfirmasi pasword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="navbar" class="col-sm-2 col-form-label">Warna Navbar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="navbar" value="Blue">
                    </div>
                </div>
                <div style="text-align:center;">
                    <br>
                    <div class="col-12">
                        <button class="btn btn-secondary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>