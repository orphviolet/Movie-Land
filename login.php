<!-- <!DOCTYPE html>
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
    }

    .login-page {
      width: 360px;
      padding: 8% 0 0;
      margin: auto;
    }

    .form {
      position: relative;
      z-index: 1;
      background: #a9a9a9;
      max-width: 360px;
      margin: 0 auto 100px;
      padding: 45px;
      text-align: center;
      border-radius: 3vw;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form h1 {
      font-size: 2em;
      color: #000000;
      text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
      text-align: center;
      margin-top: auto;
    }
    .form input {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #fffff0;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }

    .form button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 0;
      background: #fffff0;
      width: 100%;
      border: 0;
      padding: 15px;
      color: #000000;
      font-size: 14px;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .form button:hover, .form button:active, .form button:focus {
      background: #fffff0;
      outline: auto;
    }

  </style>
</head>

<body>

  <div class="login-page">
    <div class="form">
      <h1>Silahkan Login</h1>
      <form class="login-form" action="login_action.php" method="post">
        <input type="text" placeholder="masukkan username" name="usercust">
        <input type="password" placeholder="masukkan password" name="pwcust">
        <button>Login</button>
        <p>Belum punya akun?<a href="user_tambah.php"> Register disini</a></p>
      </form>
    </div>
  </div>

</body>

</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">


  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    body {
      background: #fffff0; 
      font-family: "Roboto", sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .login-page {
      width: 360px;
      padding: 8% 0 0;
      margin: auto;
    }

    .form {
      position: relative;
      z-index: 1;
      background: #a9a9a9;
      max-width: 360px;
      margin: 0 auto 100px;
      padding: 45px;
      text-align: center;
      border-radius: 3vw;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form h1 {
      font-size: 2em;
      color: #000000;
      text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
      text-align: center;
      margin-top: auto;
    }
    .form input {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #fffff0;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }

    .form button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 0;
      background: #fffff0;
      width: 100%;
      border: 0;
      padding: 15px;
      color: #000000;
      font-size: 14px;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .form button:hover, .form button:active, .form button:focus {
      background: #fffff0;
      outline: auto;
    }

  </style>

<!-- My Style -->
    <link rel="stylesheet" href="style.css">
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
        <button class="registerButton"><a href="logout.php">Logout</a></button>
      </div>
    </nav>
<!-- Navbar end -->

<!-- Hero Section start -->

<div class="login-page">
    <div class="form">
      <h1>Silahkan Login</h1>
      <form class="login-form" action="login_action.php" method="post">
        <input type="text" placeholder="masukkan username" name="usercust">
        <input type="password" placeholder="masukkan password" name="pwcust">
        <button>Login</button>
        <p>Belum punya akun?<a href="user_tambah.php"> Register</a></p>
      </form>
    </div>
  </div>

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

<!-- Sukmawati 22.12.2313 -->
