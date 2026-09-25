<?php
session_start();
include("config.php");

$user = $_POST['usercust'];
$pw = $_POST['pwcust'];

$sql = "SELECT user_cust FROM customer
        WHERE user_cust = '$user'
        AND pw_cust = '$pw'";

$hasil = mysqli_query($config,$sql) or exit("Error query : <b>" .$sql. "</b>.");

    if(mysqli_num_rows($hasil)>0){
        $data = mysqli_fetch_array($hasil);
        $_SESSION['usercust'] = $data['user_cust'];
        header("Location:halamanuser.php");
        exit();
    }
    else { ?>
        <h4> Maaf ya shayyy..</h4>
        <p> Username atau password salah. <br>Klik <a href= "login.php">disini</a> untuk kembali login. </p> <?php
    }
    ?>

<!-- Sukmawati 22.12.2313 -->