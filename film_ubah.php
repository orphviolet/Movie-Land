<?php 
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Movie</title>
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
    include 'config.php';

    $idfilm = $_GET['id_film'];

    $sql = "SELECT * FROM film WHERE id_film= '$idfilm'";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
?>

    <h2>Edit Movie</h2>
    <form method="POST" action="film_ubah_action.php" 
    enctype="multipart/form-data">
    <table>

    <tr>
        <td>ID Film</td>
        <td>:</td>
        <td>
            <input type="text" value="<?php echo $data['id_film']?>" disabled> 
            <input type="text" name="idfilm" value="<?php echo $data['id_film']?>" hidden>
        </td>
    </tr>

    <tr>
        <td width="100">Judul Film</td>
        <td>:</td>
        <td><input type="text" name="judul" size="50" 
        value="<?php echo 
        $data['judul_film']?>"></td>
    </tr>

    <tr>
        <td>Sinopsis</td>
        <td>:</td>
        <td><textarea name="sinopsis" rows="6" 
        cols="45"><?php echo 
        $data['sinopsis']?></textarea>
        </td>
    </tr>

    <tr>
        <td>Poster</td>
        <td>:</td>
        <td><input type="file" name="poster"> </td>
    </tr>

    <tr>
        <td colspan="3"><input type="submit" 
        name="simpan" value="simpan">
        <input type="reset" value="reset">
        </td>
    </tr>

    </table>
    </form>
    
</body>
</html>