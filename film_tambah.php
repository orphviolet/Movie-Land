<?php 
session_start(); //memulai session
?>

<!DOCTYPE html>
<html>
<head>
    <title>Added Movie</title>
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
    <h2>Added Movie</h2>
    <form method="POST" action="film_tambah_action.php" enctype="multipart/form-data">
    <table>
      
    <tr>
        <td width="150">ID Film</td>
        <td>:</td>
        <td><input type="text" name="idfilm" size="60"></td>
    </tr>

    <tr>
        <td width="150">Judul Film</td>
        <td>:</td>
        <td><input type="text" name="judul" size="60"></td>
    </tr>
    <tr>
        <td>Sinopsis</td>
        <td>:</td>
        <td><textarea name="sinopsis" rows="6" 
        cols="60"></textarea></td>
    </tr>
    <tr>
        <td>Poster</td>
        <td>:</td>
        <td><input type="file" name="poster"> </td>
    </tr>
    
    <tr>
        <td colspan="3">
        <input type="submit" name="simpan" value="simpan">
        <input type="reset" value="reset">
        </td>
    </tr>
    </table>
    
    </form>
</body>
</html>