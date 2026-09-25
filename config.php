<?php
$config = mysqli_connect("localhost", "root", "", "cinema_2313");
if (!$config) {
    die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
}
?>