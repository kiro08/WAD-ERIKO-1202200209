<?php
    require './connector.php';

    $id_mobil = rand();
    $nama_mobil = $_POST['nama_mobil'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $merek = $_POST['merek'];
    $tgl_beli = $_POST['tgl_beli'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $tujuan = "../images/";

    if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $tujuan . $foto_mobil)) {
        $sql = "INSERT INTO showroom_eriko_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi_mobil, foto_mobil, status_pembayaran) 
        VALUES ('$id_mobil','$nama_mobil', '$nama_pemilik', '$merek', '$tgl_beli', '$deskripsi', '$foto_mobil', '$status')";
        
        if (mysqli_query($connect, $sql)) {
            header("location: ../Home-eriko.php");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Gagal";
        }
?>