<?php
include('library.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cart</title>
        <!--css-->
        <!--icon-->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
        <!--swiper-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <style>
    body {
        background: #ddd;
        min-height: 100vh;
        vertical-align: middle;
        display: flex;
        font-family: sans-serif;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .title {
        margin-bottom: 5vh;
    }

    .card {
        margin: auto;
        max-width: 950px;
        width: 90%;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 1rem;
        border: transparent;
    }

    @media (max-width: 767px) {
        .card {
            margin: 3vh auto;
        }
    }

    .cart {
        background-color: #f9f8f8;
        padding: 4vh 5vh;
        border-bottom-left-radius: 1rem;
        border-top-left-radius: 1rem;
        cursor: pointer;
    }

    .cart h3 {
        background: -webkit-linear-gradient(90deg,
                rgb(216, 56, 56),
                rgb(32, 52, 236));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    @media (max-width: 767px) {
        .cart {
            padding: 4vh;
            border-bottom-left-radius: unset;
            border-top-right-radius: 1rem;
        }
    }

    .summary {
        background-color: #ddd;
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
        padding: 4vh;
        color: rgb(65, 65, 65);
        cursor: pointer;
    }

    @media (max-width: 767px) {
        .summary {
            border-top-right-radius: unset;
            border-bottom-left-radius: 1rem;
        }
    }

    .summary .col-2 {
        padding: 0;
    }

    .summary .col-10 {
        padding: 0;
    }

    .row {
        margin: 0;
    }

    .title b {
        font-size: 1.5rem;
    }

    .main {
        margin: 0;
        padding: 2vh 0;
        width: 100%;
    }

    .col-2,
    .col {
        padding: 0 1vh;
    }

    a {
        padding: 0 1vh;
    }

    .close {
        margin-left: auto;
        font-size: 0.7rem;
    }

    img {
        width: 3.5rem;
    }

    .back-to-shop {
        margin-top: 4.5rem;
    }

    .back-to-shop:hover {
        color: darkslategray;
    }

    h5 {
        margin-top: 4vh;
        background: -webkit-linear-gradient(90deg,
                rgb(216, 56, 56),
                rgb(32, 52, 236));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    hr {
        margin-top: 1.25rem;
    }

    form {
        padding: 2vh 0;
    }

    select {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1.5vh 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247);
    }

    input {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247);
        border-radius: 4px;
    }

    input:focus::-webkit-input-placeholder {
        color: transparent;
    }

    .btn {
        background-color: #000;
        border-color: #000;
        color: white;
        width: 100%;
        font-size: 1.2rem;
        margin-top: 4vh;
        padding: 1vh;
        border-radius: 10px;
    }

    .btn:focus {
        box-shadow: none;
        outline: none;
        box-shadow: none;
        color: white;
        -webkit-box-shadow: none;
        -webkit-user-select: none;
        transition: none;
    }

    .btn:hover {
        background-color: cyan;
        color: black;
    }

    a {
        color: black;
    }

    a:hover {
        color: black;
        text-decoration: none;
    }

    #code {
        background-image: linear-gradient(to left,
                rgba(255, 255, 255, 0.253),
                rgba(255, 255, 255, 0.185)),
            url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
        background-repeat: no-repeat;
        background-position-x: 95%;
        background-position-y: center;
    }
    </style>

    <body>
        <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h3><i class="bx bxs-cart"></i>Shopping Cart</h3>
                            </div>
                            <div class="col align-self-center text-right text-muted">
                                quantity : <?php quantity_cart(); ?>
                            </div>
                        </div>
                    </div>
                    <form action="php/delete_pd.php" method="POST">
                        <?php
                    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
                    $infor_cart = mysqli_query($connectdb, "select * from cart");
                    $id_tk = $_SESSION["id_tk"];

                    while ($cart = mysqli_fetch_array($infor_cart)) {
                        if ($id_tk == $cart['id_tk']) {
                            $id_cart = $cart['id_cart'];
                            $_SESSION['id_cart'] = $id_cart;
                    ?>
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2">
                                    <?php echo "<img class='img-fluid' src='img/" . $cart['images'] . "' />";  ?>
                                </div>
                                <div class="col">
                                    <div class="row text-muted">
                                        <?php echo $cart['name_cart']; ?>
                                    </div>
                                    <div class="row">Cotton T-shirt</div>
                                </div>
                                <div class="col">
                                    <div class="row"><?php echo $cart['quantity_cart']; ?></div>
                                </div>
                                <div class="col" style="margin-top: 45px;">
                                    $<?php echo $cart['price_cart']; ?>
                                    <span class="close"> <input width="20px" height="10px" type="submit" name="delete"
                                            value="&#10005;"></span>

                                </div>

                            </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </form>
                    <div class="back-to-shop">
                        <a href="home_afterlogin.php">&leftarrow;</a><span class="text-muted backto">Back to shop</span>
                    </div>
                </div>
                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>
                    <hr />
                    <form action="php/process_bill.php" method="POST">
                        <p class="mt-3 text-black">FullName</p>
                        <input id="fname" name="fullname" placeholder="Enter your Fullname" />
                        <p class="mt-3">Address</p>
                        <input id="address" name="address" placeholder="Enter your Address" />
                        <p class="mt-3">PhoneNumber</p>
                        <input id="pnumber" name="phoneNumber" placeholder="Enter your code" />

                        <div class="row" style="border-top: 1px solid rgba(0, 0, 0, 0.1); padding: 2vh 0">
                            <div class="col">TOTAL PRICE</div>
                            <div class="col text-right">$<?php total(); ?></div>
                        </div>
                        <input type='submit' name='confirm' class='btn' value='CONFIRM'>
                    </form>
                </div>
            </div>
        </div>
        <!--<div class="loader-container">
            <img src="images/loader.gif" alt="" />
        </div>
        <script src="js/cart.js"></script> -->
    </body>

</html>