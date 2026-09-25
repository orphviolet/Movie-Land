<?php
include "config.php";

$user = $_POST['userCust'];
$pass = $_POST['pwCust'];
$nama = $_POST['namalengkap'];
$hp = $_POST['nohp'];

$sql = "UPDATE customer
        SET pw_cust = '$pass',
            nama_cust = '$nama',
            hp_cust = '$hp'
        WHERE user_cust = '$user'";

$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo "Data berhasil diubah";
}
else {
    echo "Data gagal diubah";
}
?>

<br>kembali ke <a href="halamanuser.php"> halaman user </a>
<!-- Sukmawati 22.12.2313 -->