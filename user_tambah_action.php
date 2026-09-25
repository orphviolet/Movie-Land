<?php
include "config.php";
$user = $_POST['userCust'];
$pass = $_POST['pwCust'];
$nama = $_POST['namalengkap'];
$hp = $_POST['nohp'];


$sql = "INSERT INTO customer (user_cust, pw_cust, nama_cust, hp_cust) VALUES ('$user', '$pass', '$nama', '$hp');";

$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo "Data berhasil ditambahkan";
}
else {
    echo "Data gagal dimasukkan";
}
?>

<br>Silahkan login terlebih dahulu untuk memesan <a href="login.php"> Login</a>
<!-- Sukmawati 22.12.2313 -->