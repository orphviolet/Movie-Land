<?php
session_start();
if(isset($_SESSION['user_cust'])) { ?>
<h2>Control Panel</h2>
<p>Selamat Datang di Welcome user dengan id!!!"
    <?php echo $_SESSION['user_cust']; ?>". Klik <a href = "logout.php"> disini</a> untuk logout.</P> <?php
} else { ?>
<h2>Maaf...</h2>
<p>Anda tidak berhak mengakses halaman ini. Silahkan <a href= "login.php">LOGIN </a> terlebih dahulu. </p>
<?php }
?>

<!-- Sukmawati 22.12.2313 -->