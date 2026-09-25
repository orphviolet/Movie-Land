<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Movie</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

<!-- My Style -->
    <link rel="stylesheet" href="style.css">
    <style>
        table {
        width: 100%;
        border-collapse: collapse;
        }

        th, td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
        }

    </style>
</head>
<body>

<!-- Navbar start -->
    <nav class="navbar">
     <a href="#" class="navbar-logo"><span>Movie</span> Land.</a>

     <!-- <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#show">Now Showing</a>
     </div> -->

     <div class="navbar-extra">
        <button class="loginButton"><a href="login.php">Login</a></button>
        <button class="registerButton"><a href="user_tambah.php">Logout</a></button>
      </div>
    </nav>
<!-- Navbar end -->

<!-- Hero Section start -->

<section class="hero" id="home">
<main class="content">
<p>Selamat Datang di Welcome "<?php echo $_SESSION['usercust']; ?> !!!". Klik <a href = "logout.php"> disini</a> untuk logout.</P>

<h3>Data Film</h3>
<p>[ <a href="film_tambah.php"> +Tambah Film</a> ]</p>
<!-- ... Kode sebelumnya ... -->

<table width="720" border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th width="30" style="color: black;"> No. </th>
        <th width="100" style="color: black;"> Judul Film </th>
        <th width="250" style="color: black;"> Sinopsis </th>
        <th width="400" style="color: black;"> Poster</th>
        <th width="150" style="color: black;"> Kelola </th>
    </tr>

    <?php
    include "config.php";

    $sql = "SELECT id_film, judul_film, sinopsis, poster_film FROM film ORDER BY id_film";

    $hasil = mysqli_query($config, $sql);

    $no = 1;
    while ($data = mysqli_fetch_array($hasil)) {
    ?>

    <tr>
        <td style="color: black;"><?php echo $no ; ?></td>
        <td style="color: black;"><?php echo $data['judul_film'] ; ?></td>
        <td style="color: black;"><?php echo $data['sinopsis'] ; ?></td>
        <td style="color: black;"><img src="<?php echo $data['poster_film']; ?>" alt="Poster Film" width="100%"></td>
        <td align="center">
            <a href="film_ubah.php?id_film=<?php echo $data['id_film'];?>">Edit</a> | 
            <a href="film_hapus.php?id_film=<?php echo $data['id_film'];?>">Delete</a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>

</table>

    <!-- <a href="login.php" class="cta">List Movies</a> -->
</main>
</section>

<!-- Hero Section end -->


<!-- Footer start -->
<footer>

    <div class="links">
        <a href="#home">Home</a>
        <a href="#show">Now Showing</a>
    </div>

    <div class="credit">
        <p>Created by <a href="">violet</a>. | &copy; 2023.</p>
    </div>
</footer>
<!-- Footer end -->
    
<!-- Feather Icons -->
<script>
    feather.replace()
</script>

<!-- My js -->
<script src="script.js"></script>

</body>
</html>