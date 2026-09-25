<!-- <!DOCTYPE html>
<html>
<head>
    <title>Halaman Tambah Data</title>
</head>
<body>
    <h3>Menambah Data User</h3>
    <form method="post" action="user_tambah_action.php">
        <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td> 
                <input type="text" name="userCust">
            </td>
        </tr>

        <tr>
            <td>Password</td>
            <td> : </td>
            <td>
                <input type="text" name="pwCust">
            </td>
        </tr>

        <tr>
            <td>Nama Lengkap</td>
            <td> : </td>
            <td>
                <input type="text" name="namalengkap">
            </td>
        </tr>

        <tr>
            <td>No HP</td>
            <td> : </td>
            <td>
                <input type="text" name="nohp">
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
</html> -->

<!DOCTYPE html>
<html>

<head>
  <title>Form Login</title>
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    body {
      background: #fffff0;
      font-family: "Roboto", sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      width: 200vh;
    }

    .form {
      background: #a9a9a9;
      max-width: 360px;
      padding: 45px;
      border-radius: 3vw;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form h1 {
      font-size: 2em;
      color: #000000;
      text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
    }

    .form input {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #fffff0;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      font-size: 14px;
      width: 100%;
    }

    .form .form-group {
      text-align: left;
    }

    .form label {
      display: block;
    }

    .form .button-container {
      text-align: center;
    }

    .form button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 0;
      background: #fffff0;
      border: 0;
      padding: 5px 10px; /* Mengatur ukuran tombol */
      color: #000000;
      font-size: 14px;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
      cursor: pointer;
      display: inline-block;
    }

    .form button:hover,
    .form button:active,
    .form button:focus {
      background: #fffff0;
      outline: auto;
    }
  </style>
</head>

<body>

  <div class="form">
    <h1>Silahkan Registrasi</h1>
    <form class="login-form" method="post" action="user_tambah_action.php">
      <div class="form-group">
        <label for="userCust">Username:</label>
        <input type="text" id="userCust" name="userCust">
      </div>
      <div class="form-group">
        <label for="pwCust">Password:</label>
        <input type="password" id="pwCust" name="pwCust">
      </div>
      <div class="form-group">
        <label for="namalengkap">Nama Lengkap:</label>
        <input type="text" id="namalengkap" name="namalengkap">
      </div>
      <div class="form-group">
        <label for="nohp">No HP:</label>
        <input type="text" id="nohp" name="nohp">
      </div>
      <div class="button-container">
        <button type="submit" name="ubah">Simpan</button>
        <button type="reset">Batal</button>
      </div>
    </form>
  </div>

</body>

</html>





<!-- Sukmawati 22.12.2313 -->

<!-- Sukmawati 22.12.2313 -->