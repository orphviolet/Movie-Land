<!DOCTYPE html>
<html>
<head>
<title>Edit Cust</title>
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
    <?php
    include "config.php";
    $user = $_GET['user_cust'];

    $sql = "SELECT * FROM customer WHERE user_cust='$user'";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>

    <h3>Edit Data Customer</h3>
    <form method="POST" action="user_edit_action.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
                <input type="text" value="<?php echo 
                $data['user_cust']?>" disabled> 
                <input type="text" name="userCust" value="<?php 
                echo $data['user_cust']?>" hidden>
            </td>
        </tr>
        
        <tr>
            <td>Password</td>
            <td> : </td>
            <td>
                <input type="text" name="pwCust" value="<?php 
                echo $data['pw_cust']?>">
            </td>
        </tr>

        <tr>
            <td>Nama Lengkap</td>
            <td> : </td>
            <td>
                <input type="text" name="namalengkap" value="<?php 
                echo $data['nama_cust']?>">
            </td>
        </tr>

        <tr>
            <td>No HP.</td>
            <td> : </td>
            <td>
                <input type="text" name="nohp" value="<?php 
                echo $data['hp_cust']?>">
            </td>
        </tr>

        <tr>
            <td colspan=2>
                <input type="submit" name="ubah" value="Simpan">
                <input type="reset" value="Batal">
            </td>
        </tr>
    </table>
    </form>

</body>
</html>
<!-- Sukmawati 22.12.2313 -->