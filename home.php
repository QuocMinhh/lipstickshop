<?php
include('library.php');
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Lipstick</title>
        <!--css-->
        <link rel="stylesheet" href="css/home.css" />
        <!--icon-->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
        <!--swiper-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>

    <body>
        <div class="container">
            <header>
                <a href="#" class="logowebsite"><img src="images/logo.png" alt="" />
                    <span>Lipstick Shop</span>
                </a>
                <nav class="navbar">
                    <a class="active" href="#home">Home</a>
                    <a href="#dishes">Products</a>
                    <a href="#about">About</a>
                    <a href="#footer">Contacts</a>
                </nav>
                <div class="icons">
                    <form action="#" method="post" id="search-form">
                        <input type="search" placeholder="search here..." name="search-box" id="search-box" />
                        <i class="fas fa-search" id="search-icon"></i>
                        <a href="account.php"><i class="fas fa-shopping-cart"> </i></a>
                        <label class="sec_btn" onclick="openMulti();"><i class="fas fa-user"></i></label>
                        <div class="selectWrapper">
                            <div class="multiSelect" id="menu-0">
                                <div class="bottomBorder">
                                    <a href="../lipstick/account.php">New account</a>
                                </div>
                                <div><a href="../lipstick/account.php">Login</a></div>
                                <div><a href="../lipstick/account.php">Forget</a></div>
                                <div><a href="">Supports</a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </header>
            <section class="home" id="home">
                <div class="swiper-container home-slider">
                    <div class="swiper-wrapper wrapper">
                        <div class="swiper-slide slide">
                            <div class="content">
                                <span><img width="75px" height="75px" src="img/new.gif" alt=""></span>
                                <h3>Best seller</h3>
                                <p>
                                    "There's always fun-thing different at your Dairy Queen store!" 34 Philippine TV
                                    Commercial Scripts Voice Over Scripts In Tagalog And English
                                </p>
                                <a href="#" class="btn">order now</a>
                            </div>
                            <div class="image">
                                <img src="img/page1.png" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <div class="content">
                                <span><img width="75px" height="75px" src="img/new.gif" alt=""></span>
                                <h3>Top 2 popular</h3>
                                <p>Lipstick Croffle is a lovely script font featuring charming, playful characters that
                                    seem to dance along the baseline.</p>
                                <a href="#" class="btn">order now</a>
                            </div>
                            <div class="image">
                                <img src="img/page2.png" alt="" />
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <div class="content">
                                <span><img width="75px" height="75px" src="img/new.gif" alt=""></span>
                                <h3>Top 3 popular</h3>
                                <p>
                                    The Lips were voiced by Oliver Vaquer in most commercials In the rest of the US, the
                                    "So Good its RiDQlous" slogan was adopted.
                                </p>
                                <a href="#" class="btn">order now</a>
                            </div>
                            <div class="image">
                                <img src="images/slide2.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="dishes" id="dishes">
                <h3 class="sub-heading">New Products</h3>
                <h1 class="heading">INLAND</h1>
                <form action="">
                    <div class="box-container">
                        <?php products();  ?>
                    </div>
                </form>
            </section>
            <section class="about" id="about">
                <h3 class="sub-heading">about us</h3>
                <h1 class="heading">why choose us?</h1>

                <div class="row">
                    <div class="image">
                        <img src="images/slide1.png" alt="" />
                    </div>

                    <div class="content">
                        <h3>LIPSTICK COMMERCIAL SCRIPT TV</h3>
                        <p>
                            The lips wouldn't reappear for 28 years, next appearing in 2006. Click here and download the
                            Lipstick Croffle font Scriptsįind original new scripts and short scenes.The first ever
                            appearance of the lips in a Dairy Queen commercial is in a 1978 ad for the Super Brazier
                            burger, linked here
                        </p>
                        <p>
                            Lipstick is modern feminine font, every single letters have been carefully crafted to make
                            your text looks beautiful.
                        </p>
                        <div class="icons-container">
                            <div class="icons">
                                <i class="fas fa-shipping-fast"></i>
                                <span>free delivery</span>
                            </div>
                            <div class="icons">
                                <i class="fas fa-dollar-sign"></i>
                                <span>easy payments</span>
                            </div>
                            <div class="icons">
                                <i class="fas fa-headset"></i>
                                <span>24/7 service</span>
                            </div>
                        </div>
                        <a href="#" class="btn">learn more</a>
                    </div>
                </div>
            </section>
            <section class="footer" id="footer">
                <div class="box-container">
                    <div class="box">
                        <h3>locations</h3>
                        <a href="#">India</a>
                        <a href="#">Japan</a>
                        <a href="#">Russia</a>
                        <a href="#">USA</a>
                        <a href="#">Vietnam</a>
                    </div>

                    <div class="box">
                        <h3>quick links</h3>
                        <a href="#">Home</a>
                        <a href="#">Products</a>
                        <a href="#">About</a>
                        <a href="#">Contacts</a>
                    </div>

                    <div class="box">
                        <h3>contact info</h3>
                        <a href="#">+84394206302</a>
                        <a href="#">+84373234906</a>
                        <a href="#">minhle26022002@gmail.com</a>
                        <a href="#">10thgs2602@gmail.com</a>
                        <a href="#">553,30/4,HungLoi,NinhKieu,CanTho</a>
                    </div>

                    <div class="box">
                        <h3>follow us</h3>
                        <a href="#"><i class="bx bxl-facebook-circle"></i>facebook</a>
                        <a href="#"><i class="bx bxl-twitter"></i>twitter</a>
                        <a href="#"><i class="bx bxl-instagram-alt"></i>instagram</a>
                        <a href="#"><i class="bx bxl-linkedin-square"></i>linkedin</a>
                    </div>
                </div>

                <div class="credit">copyright @ 2023 by <span>mr.Mistake</span></div>
            </section>

            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script src="js/script.js"></script>
        </div>
    </body>

</html>