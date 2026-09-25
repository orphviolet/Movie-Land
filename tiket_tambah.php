<?php 
session_start(); //memulai session
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tiket</title>
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

    <form method="post" action="tiket_tambah_action.php" enctype="multipart/form-data">
        <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
            <input type="text" name="userCust" value="<?php echo $_SESSION['usercust'];?>" readonly>
            </td>
        </tr>

        <tr>
            <td>Judul Film</td>
            <td> : </td>
            <td>
            <select name="kdfilm" id="kdfilm">
            <option value="">Pilih Film
                <?php
                    include 'config.php';

                    $sql = "SELECT id_film, judul_film FROM film";
                    $result = mysqli_query($config, $sql);

                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['id_film'] . '">' . $row['judul_film'] . '</option>';
                    }

                    mysqli_close($config);
                    ?>
            </option>
                    
                </select>
            </td>
        </tr>

        <tr>
            <td>Tanggal Nonton</td>
            <td> : </td>
            <td>
                <input type="date" name="tgl">
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

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Fetch data for foreign_key1 and populate the select element.
        $(document).ready(function() {
            $.ajax({
                url: 'fetch_data.php',
                type: 'GET',
                data: { table: 'film' },
                success: function(data) {
                    $('#kdfilm').append(data);
                }
            });
        });
    </script> -->

</body>
</html>
