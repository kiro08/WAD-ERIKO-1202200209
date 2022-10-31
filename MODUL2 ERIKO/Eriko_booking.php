<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    <title>EAD Rental</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link" href="Eriko_home.php">Home</a>
            <a class="nav-link" href="Eriko_booking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- card -->
    <div class="container mt-3 mb-2 text-center">
        <h1 class="titleWelcome text-uppercase fw-bold mb-4">Rent your car now</h1>

      <div class="row justify-content-center">
        <div id="carouselExampleInterval" class="carousel slide ol-sm-12 col-lg-5 image-nissan mb-3" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="Foto/rush.png" alt="Toyota Rush" width="100%" height="320px"/>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
              <img src="Foto/ayla.jpeg" alt="Toyota ayla" width="100%" height="320px"/>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
              <img src="Foto/brio.jpg" alt="Honda Brio" width="100%"height="320px"/>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-7 form-rent">
          <form method="POST" action="Eriko_mybooking.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Your Name" name="myname"/>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Booking date</label>
              <input type="date" class="form-control" id="exampleInputPassword1" name="date"/>
            </div>

            <div class="mb-3">
              <label for="startTime" class="form-label">Start time</label>
              <input type="time" class="form-control" id="exampleInputPassword1" name="startTime"/>
            </div>

            <div class="mb-3">
              <label for="duration" class="form-label">Duration (Days)</label>
              <input type="text" class="form-control" name="duration" />
            </div>

            <div class="mb-3">
              <label for="startTime" class="form-label">Car type</label>
              <select class="form-select" name="type">
                <option selected disabled>Choose Car</option>
                <option value="Toyota Rush" name="rush">Toyota Rush</option>
                <option value="Toyota Ayla" name="ayla">Toyota Ayla</option>
                <option value="Honda Brio" name="brio">Honda Brio</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="startTime" class="form-label">Phone number</label>
              <input type="number" class="form-control" name="Phone"/>
            </div>

            <div class="mb-3">
              <label for="startTime" class="form-label">Add service</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Health Protocol" id="flexCheckDefault"/>
                <label class="form-check-label" for="flexCheckDefault">Health Protocol / Rp. 25.000</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Driver" id="flexCheckChecked"/>
                <label class="form-check-label" for="flexCheckChecked">Driver / Rp. 100.000</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="services[]" value="Fuel Filled" id="flexCheckChecked"/>
                <label class="form-check-label" for="flexCheckChecked">Fuel Filled / Rp. 250.000</label>
              </div>
</div>

            <button type="submit" class="btn btn-primary" name="submit" value="submit">Book</button>
          </form>
        </div>
      </div>
    </div>

        <!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="container footer-bottom clearfix">
            <div class="copyright text-center"><span>Created by ERIKO_1202200209</span></div>
            </div>
        </div>
</footer>

  </body>
</html>
