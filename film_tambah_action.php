<?php 
    session_start(); 

    include "config.php";

    $id =$_POST["idfilm"];
    $judul = $_POST["judul"];
    $sinopsis = $_POST["sinopsis"];

    $lokasifile = $_FILES['poster']['tmp_name']; 
    $namafile = $_FILES['poster']['name']; 
 
    //folder penyimpanan berkas/file
    $uploaddir = "upload/"; 
    //menggabungkan nama folder dan nama file
    $uploadfile = $uploaddir.$namafile; 
 
    //Jika file berhasil di upload
    if(move_uploaded_file($lokasifile, $uploadfile)) {
        echo "Nama File : <b>$namafile</b> sukses di upload"; 

    //masukkan informasi file ke dalam database
    $sql = "INSERT INTO film (id_film, judul_film, 
    sinopsis, poster_film) 
    VALUES('$id', '$judul', '$sinopsis', '$uploadfile')";

    $hasil = mysqli_query($config, $sql);
    header('location:halamanuser.php');
    } 
    else {
        echo "File gagal disimpan";
    }

?>