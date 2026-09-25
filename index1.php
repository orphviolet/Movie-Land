<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Land</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

<!-- Feather Icons -->
<!-- <script src="https://unpkg.com/feather-icons"></script> -->

<!-- My Style -->
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<!-- Navbar start -->
    <nav class="navbar">
     <a href="#" class="navbar-logo"><span>Movie</span> Land.</a>

     <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#show">Now Showing</a>
     </div>

     <div class="navbar-extra">
        <button class="loginButton"><a href="login.php">Login</a></button>
        <button class="registerButton"><a href="logout.php">Logout</a></button>
      </div>
    </nav>
<!-- Navbar end -->

<!-- Hero Section start -->
<section class="hero" id="home">
<main class="content">
    <h1>Experience The Magic of Cinema with <span>Movie Land</span></h1>
    <p>Welcome to our cinema, where you will find an extensive selection of the latest movies.</p>
    <!-- <a href="login.php" class="cta">List Movies</a> -->
</main>
</section>
<!-- Hero Section end -->

<!-- Line Up section start -->
<section id="show" class="lineup page-lineup">
    <link rel="stylesheet" href="style2.css">
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>

    <br></br>
    <h2><span>In Cinemas</span> Now</h2>

    <div class="group">
        <!-- Lineup items with their corresponding content, styles, and script -->
        <div class="item" style="--url: url(asset/barbie.gif)">
            <div class="overlay"></div>
            <div class="menu">
                <label for="menu">Barbie The Movie</label>
            </div>  
        </div>
        <div class="item" style="--url: url(asset/nun.gif)">
            <div class="overlay"></div>
            <div class="menu">
                <label for="menu">The Nun II</label>
            </div>  
        </div>
        <div class="item" style="--url: url(asset/giphy.gif)">
            <div class="overlay"></div>
            <div class="menu">
                <label for="menu">Evil Dead Rise</label>
            </div>  
        </div>
        <div class="item" style="--url: url(asset/elemental.gif)">
            <div class="overlay"></div>
            <div class="menu">
                <label for="menu">Elemental</label>
            </div>  
        </div>
    </div>
    <script>
        const items = document.querySelectorAll(".item");
        const menus = document.querySelectorAll(".menu");
        const overlays = document.querySelectorAll(".overlay");

        const expand = (item, i) => {
            let overlay = item.childNodes[1];
            let menu = item.childNodes[3];

            items.forEach((it, ind) => {
                if (i === ind) return;
                it.clicked = false;
            });

            //item
            gsap.killTweensOf(items);
            gsap.to(items, {
                width: item.clicked ? "10vw" : "8vw",
                duration: 2,
                ease: "elastic(1, .6)",
            });
            gsap.killTweensOf(item);
            item.clicked = !item.clicked;
            gsap.to(item, {
                width: item.clicked ? "25vw" : "10vw",
                duration: 2.5,
                ease: "elastic(1, .3)",
            });

            //overlay
            gsap.killTweensOf(overlays);
            gsap.to(overlay, {
                opacity: item.clicked ? "1" : "1",
                duration: 2,
                ease: "elastic(1, .6)",
            });
            gsap.killTweensOf(overlay);
            item.clicked = !item.clicked;
            gsap.to(overlay, {
                opacity: item.clicked ? "1" : "0",
                duration: 2.5,
                ease: "elastic(1, .3)",
            });

            //menu
            gsap.killTweensOf(menus);
            gsap.to(menus, {
                opacity: item.clicked ? "0" : "0",
                duration: 2,
                ease: "elastic(1, .6)",
            });
            gsap.killTweensOf(menu);
            item.clicked = !item.clicked;
            gsap.to(menu, {
                opacity: item.clicked ? "1" : "0",
                duration: 2.5,
                ease: "elastic(1, .3)",
            });
        };

        items.forEach((item, i) => {
            item.clicked = false;
            item.childNodes[1].clicked = false;
            item.childNodes[3].clicked = false;

            item.addEventListener("click", () => expand(item, i));
        });
    </script>
</section>
<!-- Line Up section end -->

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