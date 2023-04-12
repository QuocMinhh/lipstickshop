<?php include('admin-library.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!--css-->
    <link rel="stylesheet" href="../admin/admin-css/admin-products.css" />
    <!--icon-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap");

    :root {
        --box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.075);
    }

    body {
        background-image: url("../admin-images/admin-products.svg");
        font-family: "Montserrat", sans-serif;

    }

    .title {
        margin-top: 2rem;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        width: auto;
        border-radius: .5rem;

    }

    .title .title-small h1 {
        display: flex;
        font-family: Nunito;
        font-size: 2.5rem;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background: -webkit-linear-gradient(90deg, rgb(216, 56, 56), rgb(32, 52, 236));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }

    .title a {
        display: flex;
        align-items: center;
        text-decoration: none;
        font-style: italic;
        color: rgb(53, 53, 53);
        cursor: pointer;

    }

    .title a i {
        font-size: 1.5rem;
    }

    .title a:hover {
        color: brown;
    }

    .products {
        height: auto;
        width: auto;
        border-radius: 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .products .list-menu {
        width: 25%;
        height: auto;
        border-radius: 1rem;
        background-color: rgb(228, 226, 226);
        box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.075);


    }

    .products .admin-products {
        width: auto;
        height: 500px;
        overflow-y: scroll;
        background-color: rgb(239, 239, 239);
        border-radius: 1rem;
        filter: drop-shadow(10px 5px 4px #b9b9b9);
    }

    .products .list-menu .list-menu-table a {
        display: flex;
        justify-content: start;
        text-decoration: none;
    }

    .products .list-menu .list-menu-table .btn {
        margin: 20px;
        cursor: pointer;
        position: relative;
        padding: 10px 30px;
        background: rgb(221, 221, 221);
        font-size: 20px;
        text-transform: uppercase;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        transition: all .1s ease;
        box-shadow: var(--box-shadow);

    }

    .products .list-menu .list-menu-table .btn::after,
    .products .list-menu .list-menu-table .btn::before {
        content: "";
        width: 10px;
        height: 10px;
        position: absolute;
        border: 0px solid rgb(133, 11, 11);
    }

    .products .list-menu .list-menu-table .btn::after {
        top: -1px;
        left: -1px;
    }

    .products .list-menu .list-menu-table .btn::before {
        bottom: -1px;
        right: -1px;
    }

    .products .list-menu .list-menu-table .btn:hover {
        border-top-right-radius: 1px;
        border-bottom-left-radius: 1px;
        letter-spacing: 0.5px;
    }

    .products .list-menu .list-menu-table .btn:hover::before,
    .products .list-menu .list-menu-table .btn:hover::after {
        height: 100%;
        width: 100%;
    }

    #menu::after {
        border-top: 5px solid rgb(214, 25, 25);
        border-left: 5px solid rgb(214, 25, 25);
        ;
    }

    #menu::before {
        border-bottom: 5px solid rgb(42, 108, 240);
        border-right: 5px solid rgb(42, 108, 240);
        ;
    }

    #menu:hover {
        background-color: rgb(224, 157, 40);
        color: rgb(0, 0, 0);
    }

    #ordered::after {
        border-top: 5px solid rgb(214, 25, 25);
        border-left: 5px solid rgb(214, 25, 25);
    }

    #ordered::before {
        border-bottom: 5px solid rgb(42, 108, 240);
        border-right: 5px solid rgb(42, 108, 240);
        ;
    }

    #ordered:hover {
        background-color: rgb(224, 157, 40);
        color: rgb(0, 0, 0);
    }

    #change::after {
        border-top: 5px solid rgb(214, 25, 25);
        border-left: 5px solid rgb(214, 25, 25);
    }

    #change::before {
        border-bottom: 5px solid rgb(42, 108, 240);
        border-right: 5px solid rgb(42, 108, 240);
        ;
    }

    #change:hover {
        background-color: rgb(224, 157, 40);
        color: rgb(0, 0, 0);
    }

    #logout::after {
        border-top: 5px solid rgb(214, 25, 25);
        border-left: 5px solid rgb(214, 25, 25);
    }

    #logout::before {
        border-bottom: 5px solid rgb(42, 108, 240);
        border-right: 5px solid rgb(42, 108, 240);
        ;
    }

    #logout:hover {
        background-color: rgb(224, 157, 40);
        color: rgb(0, 0, 0);
    }

    #cart-add:after {
        border-top: 5px solid rgb(214, 25, 25);
        border-left: 5px solid rgb(214, 25, 25);
    }

    #cart-add:before {
        border-bottom: 5px solid rgb(42, 108, 240);
        border-right: 5px solid rgb(42, 108, 240);
        ;
    }

    #cart-add:hover {
        background-color: rgb(224, 157, 40);
        color: rgb(0, 0, 0);
    }

    #keywords {
        margin: 0 auto;
        font-size: 1.2em;
        margin-bottom: 15px;
        overflow-y: scroll;
    }


    #keywords thead {
        cursor: pointer;
        background: #c9dff0;

    }

    #keywords thead tr th {
        font-weight: bold;
        padding: 12px 30px;
        padding-left: 42px;
    }

    #keywords thead tr th span {
        background-repeat: no-repeat;
        background-position: 100% 100%;
    }

    #keywords thead tr th.headerSortUp,
    #keywords thead tr th.headerSortDown {
        background: #acc8dd;
    }

    #keywords tbody tr {
        color: #555;
    }

    #keywords tbody tr td {
        text-align: center;
        padding: 15px 10px;
    }


    .lalign img {
        height: 100px;
        width: 100px;
        border-radius: 10px;
        object-fit: cover;
        background: #dfdfdf;

    }

    .lalign input {
        width: auto;
    }

    #price,
    #quantity,
    #id {
        width: 50px;
    }

    #madein {
        width: 100px;
    }

    #confirm {
        height: 50px;
        width: 150px;
        margin-left: 42%;
        margin-top: 5rem;
        border-radius: 10px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        border: 1px dashed green;
        color: rgb(14, 102, 115);
        animation: 0.1s ease-in-out;
    }

    #confirm:hover {
        color: #2723e7;
        border: 1px dashed rgb(208, 96, 10);
        transform: scale(1.1);
    }
</style>

<body>
    <div class="container">
        <!--TITLE-->
        <div class="title">
            <div class="title-small">
                <h1>Administrator Products</h1>
            </div>
        </div>
        <div class="products">
            <!--MENU-->
            <div class="list-menu">
                <div class="list-menu-table">
                    <a href="../home_afterlogin.php">
                        <div class="btn" id="menu"><i class="bx bx-home"></i>Home</div>
                    </a>
                    <a href="">
                        <div class="btn" id="ordered">
                            <i class="bx bxs-shopping-bag"></i>Ordered
                        </div>
                    </a>
                    <a href="">
                        <div class="btn" id="change">
                            <i class="bx bx-cog"></i>Change Password
                        </div>
                    </a><a href="">
                        <div class="btn" id="logout">
                            <i class="bx bx-log-out"></i>Logout
                        </div>
                    </a>
                </div>
            </div>
            <!--PRODUCTS-->
            <form action="" method="POST">
                <div class="admin-products">
                    <div id="wrapper">
                        <table id="keywords" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th><span>ID</span></th>
                                    <th><span>Images</span></th>
                                    <th><span>Name</span></th>
                                    <th><span>Price</span></th>
                                    <th><span>Quantity</span></th>
                                    <th><span>Made In</span></th>
                                </tr>
                            </thead>


                            <tbody>

                                <tr>
                                    <td><input type="text" name="id" id="id"></td>
                                    <td class="lalign">
                                        <img id="output" width="100" height="100">
                                        <input type="file" name="img" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                    </td>
                                    <td><input type="text" name="name" placeholder="name products" id="name"></td>
                                    <td><input type="text" name="price" placeholder="$" id="price"></td>
                                    <td><input type="text" name="quantity" id="quantity"></td>
                                    <td><input type="text" name="made-in" id="madein"></td>
                                </tr>




                            </tbody>

                        </table>
                        <button type="submit" name="confirm" id="confirm">CONFIRM</button>
                        <?php add_products(); ?>
                    </div>
                </div>
            </form>
        </div>

</body>

</html>