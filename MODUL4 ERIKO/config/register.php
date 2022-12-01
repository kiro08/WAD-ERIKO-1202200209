<?php
    require './conn-user.php';

    $id = rand();
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password == $confirm){
        $query = mysqli_query($conn_user, "INSERT INTO user_eriko (id, nama, email, password, no_hp) 
        VALUES ('$id','$name', '$email', '$password', '$hp')");
    if($query){
        setcookie('nama', $name, time()+18000, '/' );
        setcookie('email', $email, time()+18000, '/' );
        setcookie('password', $password, time()+18000, '/' );
        setcookie('hp', $hp, time()+18000, '/' );
        header('location: ../Loginhome-eriko.php');
    }else{
        echo 'Data tidak ditemukan';
    }
    
    }
?>