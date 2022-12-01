<?php
    require './conn-user.php';

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query=mysqli_query($conn_user, "SELECT * from user_eriko where email = '$email' && password = '$password'");
    $rows=mysqli_num_rows($query);

    if ($row) {
        $data=mysqli_fetch_assoc($query);
        if (isset($_POST['ingat'])){
            $ingat = $_POST['ingat'];
            setsession('ingat', $ingat, time()+18000, '/');
        }

        setcookie('email', $email, time()+18000, '/');
        setcookie('nama', $data['nama'], time()+18000, '/');
        setcookie('no_hp', $data['no_hp'], time()+18000, '/');
        header('location: ../Home-eriko.php');

    }else{
        echo 'wrong email/password';
    }
?>