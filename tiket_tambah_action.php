<?php
include "config.php";

$user = $_POST['userCust'];
$kdfilm = $_POST['kdfilm'];
$tgl = $_POST['tgl'];


$sql = "INSERT INTO tiket (user_cust, id_film, tgl_nonton) VALUES ('$user', '$kdfilm', '$tgl');";

$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo "Data berhasil ditambahkan";
}
else {
    echo "Data gagal dimasukkan";
}
?>

<br>kembali ke <a href="halamanuser.php"> halaman user</a>
<!-- Sukmawati 22.12.2313 -->