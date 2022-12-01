<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./style/style-sec.css">

    <!--Login-->
    <section>
        <div class="login_show">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="images/car3.png" />
                </div>
                <div class="col" style="margin-top:100px; margin-right: 100px;">
                    <div class="judul">
                        <h1><b>Login<b></h1>
                    </div>
                    <br>
                    <form action="config/login.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="ingat" type="checkbox" value="ingat"
                                id="ingat">
                            <label class="form-check-label" for="ingat">
                                ingat saya?
                            </label>
                        </div>
                        <div>
                            <br>
                            <div class="col-12">
                                <button class="btn btn-secondary" type="submit">Login</button>
                            </div>
                            <br>
                            <p>belum memiliki akun? <a href="./Register-eriko.php">Daftar</a></p>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</body>

</html>