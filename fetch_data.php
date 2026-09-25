<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $table = $_GET['film']; // Mengambil 'table' dari parameter GET

    $sql = "SELECT * FROM $table";
    $result = mysqli_query($config, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
        }
    }
}

mysqli_close($config);
?>
