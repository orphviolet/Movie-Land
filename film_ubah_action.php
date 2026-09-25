<?php 
    session_start();
    include "config.php";

    $idfilm = $_POST["idfilm"];
    $judul = mysqli_real_escape_string($config, $_POST["judul"]);
    $sinopsis = mysqli_real_escape_string($config, $_POST["sinopsis"]);

    $lokasifile = $_FILES['poster']['tmp_name']; 
    $namafile = $_FILES['poster']['name'];

    $uploaddir = "upload/";
    $uploadfile = $uploaddir.$namafile;

    if (!empty($lokasifile)) {
        $sql = "UPDATE film SET
        judul_film='$judul',
        sinopsis='$sinopsis',
        poster_film='$uploadfile'
        WHERE 
        id_film='$idfilm'";

        $hasil = mysqli_query($config, $sql);

        if ($hasil) {
            move_uploaded_file($lokasifile, $uploadfile);
            echo "<script>alert('Data berhasil diubah')</script>";
            echo "Nama File : <b>$namafile</b> sukses di upload<br/><br/>";
            echo "<a href='halamanuser.php'>kembali</a>";
        } else {
            echo "Data gagal disimpan: " . mysqli_error($config);
        }
    } else {
        $sql = "UPDATE film SET
        judul_film='$judul',
        sinopsis='$sinopsis'
        WHERE 
        id_film='$idfilm'";

        $hasil = mysqli_query($config, $sql);

        if ($hasil) {
            header('location:halamanuser.php');
        } else {
            echo "Data gagal disimpan: " . mysqli_error($config);
        }
    }
?>
