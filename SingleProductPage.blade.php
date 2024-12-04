<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Product Page</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/Single-Product-Style.css">
<script src="Single-Product-Style.css"></script>

<header>
    <div id="header-wrapper">
        <a id="main-logo" href="index.php" title="Home"><img src="" alt="Logo"></a>

        <ul id="header-items">
            <a class="header-item" href="">
                <li><img src="" alt="profile" title="Profile"></li>
            </a>
            <a class="header-item" href="">
                <li><img src="" alt="basket" title="Basket"></li>
            </a>
        </ul>
    </div>

    <nav>
        <ul id="nav-items">
            <a class="nav-item" href="mens.php">
                <li>MEN</li>
            </a>
            <a class="nav-item" href="">
                <li>WOMEN</li>
            </a>
            <a class="nav-item" href="">
                <li>KIDS</li>
            </a>
            <a class="nav-item" href="">
                <li>ACCESSORIES</li>
            </a>
            <a class="nav-item" href="about-us.php">
                <li>ABOUT US</li>
            </a>
        </ul>
    </nav>
</header>

<button id="back-to-top" type="button">TOP</button>

<body>
    <section id="singleProduct">
        <div id="preview">
            <div class="thumb">
                <img src="images/black T shirt 2.jpg">
            </div>
            <div class="thumb">
                <img src="images/black T shirt 3.jpg">
            </div>
            <div class="thumb">
                <img src="images/black T shirt 4.jpg">
            </div>
            <div class="thumb">
                <img src="images/black T shirt 5.jpg">
            </div>
        </div>

        <div id="mainView">
            <div class="thumbnail">
                <img src="images/black T shirt.jpg">
            </div>
        </div>

        <div id="productInfo">
            <h1 class=productName>Team 47 T Shirt</h1>
            <h4 class="price">£29.99</h4>
            <h4 class="colourTitle">COLOUR</h4>
            <div class="colours">
                <span class="colour red"></span>
                <span class="colour yellow"></span>
                <span class="colour blue"></span>
                <span class="colour white"></span>
                <span class="colour black"></span>
            </div>
            <h4 class="title">SIZE</h4>
            <div class="sizes">
                <span class="size">XS</span>
                <span class="size">S</span>
                <span class="size">M</span>
                <span class="size">L</span>
                <span class="size">XL</span>
            </div>

            <a href="" class="Btn1">ADD TO BASKET</a>
            <a href="" class="Btn2">ADD TO WISHLIST</a>

            <div id="basketBtn">

            </div>

            <div id="wishlistBtn">

            </div>

        </div>
    </section>

    <!-- Suggested Items /  Item carousel -->
    <section id="suggestedChoices">
        <div style="padding-left: 5%; font-size: 250%;">
            You might also like...
        </div>
        <div style="height: 1px; background-color: black; margin-left: 5%; margin-right: 50%;"></div>
        <div id="carouselContainer" style="max-width: 90%;">
            <button class="carousel-button prev" onclick="moveCarousel(-1)">&#10094;</button>
            <div id="carousel">
                <div class="carousel-item">
                    <img src="images/black T shirt 2.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 3.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 2.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 3.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 2.jpg" alt="Suggested Product">
                </div>
                <div class="carousel-item">
                    <img src="images/black T shirt 3.jpg" alt="Suggested Product">
                </div>
            </div>
            <button class="carousel-button next" onclick="moveCarousel(1)">&#10095;</button>
        </div>
    </section>


</body>



<footer>
    <div id="social-media">
        <ul id="social-media-list">
            <li>
                <a href="https://www.youtube.com"><img src="" alt="youtube" title="Youtube channel"></a>
            </li>
            <li>
                <a href="https://www.twitter.com"><img src="" alt="twitter" title="Twitter account"></a>
            </li>
            <li>
                <a href="https://www.instagram.com"><img src="" alt="instagram" title="Instagram account"></a>
            </li>
            <li>
                <a href="https://www.tiktok.com"><img src="" alt="tiktok" title="Tiktok account"></a>
            </li>
        </ul>
    </div>
</footer>

</html>