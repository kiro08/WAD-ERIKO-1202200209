<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./style/style-sec.css">

    <!--Register-->
    <section>
        <div class="login_show">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="images/car2.jpg" />
                </div>
                <div class="col" style="margin-top:30px; margin-right: 100px;">
                    <div class="judul">
                        <h1><b>Registrasi<b></h1>
                    </div>
                    <br>
                    <form action="config/register.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="hp" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="hp" name="hp" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="text" class="form-control" id="confirm" name="confirm" required>
                        </div>
                        <div>
                            <div class="col-12">
                                <button class="btn btn-secondary" type="submit">Daftar</button>
                            </div>
                            <br>
                            <p>Sudah memiliki akun? <a href="Login-eriko.php">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</body>

</html>