<?php
include "config.php";
$user = $_GET['user_cust'];

$sql = "DELETE FROM customer WHERE user_cust = '$user'";
$hasil = mysqli_query($config, $sql);

echo "<script> alert ('Data Berhasil Dihapus')</script>";
header("location:halamanuser.php");

?>
<!-- Sukmawati 22.12.2313 -->