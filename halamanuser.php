<?php 
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Customer</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #fffff0;
        }
    </style>
</head>

<body>

    <p>Hiii <?php echo $_SESSION['usercust']; ?> !!! Take a look and enjoy!!.</P>

    <h3>Data Film</h3>
    <p>[ <a href="film_tambah.php"> +Tambah Film</a> ]</p>
    <table width="720" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th width="30"> No. </th>
            <th width="100"> Judul Film </th>
            <th width="250"> Sinopsis </th>
            <th width="400"> Poster</th>
            <th width="150"> Kelola </th>
        </tr>
    
        <?php
        include "config.php";

        $sql = "SELECT id_film, judul_film, sinopsis, poster_film FROM film ORDER BY id_film";

        $hasil = mysqli_query($config, $sql);

        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
        ?>
        
        <tr>
            <td><?php echo $no ; ?></td>
            <td><?php echo $data['judul_film'] ; ?></td>
            <td><?php echo $data['sinopsis'] ; ?></td>
            <td><img src="<?php echo $data['poster_film']; ?>" alt="Poster Film" width="90%">
            </td>
            <td align="center">
                <a href="film_ubah.php?id_film=<?php echo $data['id_film'];?>">Edit</a> | 
                <a href="film_hapus.php?id_film=<?php echo $data['id_film'];?>">Delete</a>
            </td>
        </tr>
        <?php
        $no++;
        }
        echo "</table>";
        ?>

    <h3>Data Customer</h3>
    <p>[ <a href="user_tambah.php"> +Tambah Customer</a> ]</p>
    <table width="720" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th width="30"> No. </th>
            <th width="30"> User Customer </th>
            <th width="30"> Password Customer </th>
            <th width="100"> Nama Customer </th>
            <th width="100"> No HP.</th>
            <th width="150"> Kelola </th>
        </tr>
    
        <?php
        include "config.php";

        $sql = "SELECT user_cust, pw_cust, nama_cust, hp_cust FROM customer ORDER BY user_cust";

        $hasil = mysqli_query($config, $sql);

        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
        ?>
        
        <tr>
            <td><?php echo $no ; ?></td>
            <td><?php echo $data['user_cust'] ; ?></td>
            <td><?php echo $data['pw_cust'] ; ?></td>
            <td><?php echo $data['nama_cust'] ; ?></td>
            <td><?php echo $data['hp_cust'] ; ?></td>
            <td align="center">
                <a href="user_edit.php?user_cust=<?php echo $data['user_cust'];?>">Edit</a> | 
                <a href="user_hapus.php?user_cust=<?php echo $data['user_cust'];?>">Delete</a>
            </td>
        </tr>
        <?php
        $no++;
        }
        echo "</table>";
        ?>
        
        <h3>Tiket Anda</h3>
        <p>[ <a href="tiket_tambah.php"> +Pesan</a> ]</p>
        <table width="720" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th width="30"> No. </th>
            <th width="30"> User Customer </th>
            <th width="30"> ID Film </th>
            <th width="100"> Tanggal Nonton </th>
        </tr>
    
        <?php
        include "config.php";

        $sql = "SELECT id_tiket, user_cust, id_film, tgl_nonton FROM tiket ORDER BY id_tiket";

        $hasil = mysqli_query($config, $sql);

        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
        ?>
        
        <tr>
            <td><?php echo $no ; ?></td>
            <td><?php echo $data['user_cust'] ; ?></td>
            <td><?php echo $data['id_film'] ; ?></td>
            <td><?php echo $data['tgl_nonton'] ; ?></td>
        </tr>
        <?php
        $no++;
        }
        echo "</table>";
        ?>

        <br>
        <p>Klik <a href = "logout.php"> disini</a> untuk logout.</p>
        
</body>
</html>
<!-- Sukmawati 22.12.2313 -->