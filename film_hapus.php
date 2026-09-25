<?php
    include "config.php";
    $idFilm = $_GET['id_film'];

    $sql = "DELETE FROM film WHERE id_film = '$idFilm'";
    mysqli_query($config, $sql);
    echo "<script> alert('Data berhasil dihapus')</script>";
    header("location:halamanuser.php");
?>