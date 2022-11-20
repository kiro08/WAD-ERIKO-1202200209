<?php
    require './connector.php';

    $id_mobil = $_GET['id_mobil'];

    mysqli_query($connect, "DELETE FROM showroom_eriko_table WHERE id_mobil = $id_mobil");
    header("location: ../ListCar-eriko.php");
?>