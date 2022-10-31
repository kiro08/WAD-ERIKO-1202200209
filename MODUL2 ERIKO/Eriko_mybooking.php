<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    <title>EAD Rental</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link" href="Eriko_home.php">Home</a>
            <a class="nav-link" href="Eriko_mybooking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Total -->
    <?php 
    $name = $_POST['myname'];
    $in =$_POST['date'];
    $duration = $_POST['duration'];
    $out = date('Y-m-d', strtotime( $in. +$duration. 'days'));
    $type = $_POST['type'];
    $rent=0;
    if($type=="Toyota Rush"){
      $rent=200000;
    }
    if($type=="Toyota Ayla"){
      $rent=150000;
    }
    if($type=="Honda Brio"){
      $rent=150000;
    }

    $phone = $_POST['Phone'];
    if(isset($_POST['services'])){
      $layanan = $_POST['services'];
      $count = count($layanan);
      $price = 0;
      for ($x=0; $x < $count; $x++) { 
        if($layanan[$x]=="Health Protocol"){
          $price = $price + 25000;
        }
        if($layanan[$x]=="Driver"){
          $price = $price + 100000;
        }
        if($layanan[$x]=="Fuel Filled"){
          $price = $price + 250000;
        }
      }
    }

    $price = ($rent * $duration) + $price;
    ?>
    
    <!-- Result -->
   <div class="container-fluid mt-3 mb-2 text-center">
        <h1 class="text-uppercase fw-bold">Thank you ERIKO_1202200209 for Reserving</h1>
        <p class="fw-light">Please double check your reservation details</p>
      <table class="table">
  <thead style="font-size: 16px;" class="text-center">
    <tr>
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Check Out</th>
      <th scope="col">Car Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service(s)</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody style="font-size: 14px;" class="text-center">
    <tr>
      <td scope="row"><?php echo rand()?></td>
      <td><?php echo $name ?></td>
      <td><?php echo date('d F Y', strtotime($in)) ?></td>
      <td><?php echo date('d F Y', strtotime($out)) ?></td>
      <td><?php 
      echo $type ?></td>
      <td><?php echo $phone ?></td>
      <td><ul>
        <?php 
          if(!empty($_POST['services'])){
            foreach ($_POST['services'] as $services) {
            echo "<li>".$services."</li>";
          }
          
          }else{
            echo "no services";
          }
        ?>
      </ul></td>
      <td><?php echo "Rp. ", number_format($price,2,".",",") ?></td>
    </tr>
  </tbody>
</table>
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
