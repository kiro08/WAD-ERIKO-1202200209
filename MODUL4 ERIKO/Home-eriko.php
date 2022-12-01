<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
                            <a class="nav-link" href="#">Home</a>
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

    <!--Home-->
    <section id="home_link">
        <div class="profil">
            <div class="container-fluid banner">
                <div class="colom_typo">
                    <div class="row">
                        <div class="col">
                            <h1>Selamat Datang di Show Room Eriko</h1>
                            <p class="write"> Show room kami merupakan show room terbaik di bumi
                            </p>
                            <a class="btn btn-primary" href="ListCar-eriko.php" role="button">MyCar</a>
                            <br>
                            <br>
                            <p><img class="logo" src="./images/logo-ead.jpeg" alt=""> Eriko Putra Jayanto_1202200209 </p>
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="./images/car1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>