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
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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

    #keywords tbody tr td.lalign {
        text-align: center;
    }

    #delete {
        border-radius: 5px;
        border: 1px dashed orange;
    }

    #delete:hover {
        background-color: #acc8dd;
        border: 1px solid blue;
    }

    #change_2 {
        border-radius: 5px;
        border: 1px dashed maroon;
    }

    #change_2:hover {
        background-color: darkkhaki;
        border: 1px dashed mediumpurple;
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
                        <a href="view-order.php">
                            <div class="btn" id="ordered">
                                <i class="bx bxs-shopping-bag"></i>Ordered
                            </div>
                        </a>
                        <a href="add-products.php">
                            <div class="btn" id="cart-add">
                                <i class="bx bxs-cart-add"></i>Add-Products
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
                <div class="admin-products">
                    <div id="wrapper">
                        <table id="keywords" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th><span>Images</span></th>
                                    <th><span>Name</span></th>
                                    <th><span>Price</span></th>
                                    <th><span>Quantity</span></th>
                                    <th><span>Made In</span></th>
                                    <th><span>Delete</span></th>
                                    <th><span>Change</span></th>

                                </tr>
                            </thead>


                            <tbody>
                                <?php
                            $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
                            $infor_cart = mysqli_query($connectdb, "select * from products");
                            while ($products = mysqli_fetch_array($infor_cart)) {
                            ?>
                                <tr>
                                    <td class="lalign">
                                        <?php echo "<img width='100px' height ='100px' src='../img/" . $products['images'] . "'/>";  ?>
                                    </td>
                                    <td><?php echo $products['name_pd']; ?></td>
                                    <td><?php echo $products['price_pd']; ?></td>
                                    <td><?php echo $products['quantity_pd']; ?></td>
                                    <td><?php echo $products['made_in']; ?></td>
                                    <form action="del-products.php" method="POST">
                                        <td>
                                            <button type="submit" id="delete" name="delete"> <i
                                                    class="bx bx-trash"></i></button>
                                        </td>
                                        <?php echo "<input type='hidden' name='id_pd' value='" . $products['id_pd'] . "'>"  ?>
                                    </form>
                                    <form action="change-products.php" method="POST">
                                        <td>
                                            <button type="submit" id="change_2" name="change"><i
                                                    class="bx bx-cog"></i></button>
                                        </td>
                                        <?php echo "<input type='hidden' name='id_pd' value='" . $products['id_pd'] . "'>"  ?>
                                    </form>


                                </tr>



                                <?php } ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
    </body>

</html>