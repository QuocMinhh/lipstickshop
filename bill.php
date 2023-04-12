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
        <title>Document</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <style>
    body {
        margin-top: 20px;
        color: #484b51;
        cursor: pointer;
    }

    .text-secondary-d1 {
        color: #728299 !important;
    }

    .page-header {
        margin: 0 0 1rem;
        padding-bottom: 1rem;
        padding-top: 0.5rem;
        border-bottom: 1px dotted #e2e2e2;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
    }

    .page-title {
        padding: 0;
        margin: 0;
        font-size: 1.75rem;
        font-weight: 300;
    }

    .brc-default-l1 {
        border-color: #dce9f0 !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -0.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -0.25rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .text-grey-m2 {
        color: #888a8d !important;
    }

    .text-success-m2 {
        color: #86bd68 !important;
    }

    .font-bolder,
    .text-600 {
        font-weight: 600 !important;
    }

    .text-110 {
        font-size: 110% !important;
    }

    .text-blue {
        color: #478fcc !important;
    }

    .pb-25,
    .py-25 {
        padding-bottom: 0.75rem !important;
    }

    .pt-25,
    .py-25 {
        padding-top: 0.75rem !important;
    }

    .bgc-default-tp1 {
        background-color: rgba(121, 169, 197, 0.92) !important;
    }

    .bgc-default-l4,
    .bgc-h-default-l4:hover {
        background-color: #f3f8fa !important;
    }

    .page-header .page-tools {
        -ms-flex-item-align: end;
        align-self: flex-end;
    }

    .btn-light {
        color: #757984;
        background-color: #f5f6f9;
        border-color: #dddfe4;
    }

    .w-2 {
        width: 1rem;
    }

    .text-120 {
        font-size: 120% !important;
    }

    .text-primary-m1 {
        color: #4087d4 !important;
    }

    .text-danger-m1 {
        color: #dd4949 !important;
    }

    .text-blue-m2 {
        color: #68a3d5 !important;
    }

    .text-150 {
        font-size: 150% !important;
    }

    .text-60 {
        font-size: 60% !important;
    }

    .text-grey-m1 {
        color: #7b7d81 !important;
    }

    .align-bottom {
        vertical-align: bottom !important;
    }

    .text-default-d3 {
        font-family: "Nunito", sans-serif;
        font-size: 30px;
        font-weight: 900;
        background-image: linear-gradient(90deg, rgb(203, 231, 112) 0%, rgb(232, 99, 172) 56%, rgb(34, 50, 227)100%);
        color: transparent;
        -webkit-background-clip: text;
        animation: move 5s infinite;
    }

    @keyframes move {
        50% {
            background-image: linear-gradient(90deg, rgb(211, 56, 42) 0%, rgb(77, 48, 222) 56%, rgb(31, 214, 224)100%);
            ;
        }
    }
    </style>

    <body>
        <div class="page-content container">
            <div class="page-header text-blue-d2">
                <h1 class="page-title text-secondary-d1">
                    Invoice
                    <small class="page-info">
                        <i class="fa fa-angle-double-right text-80"></i>
                        ID: <?php idbill(); ?>
                    </small>
                </h1>

                <div class="page-tools">
                    <div class="action-buttons">
                        <a class="btn bg-white btn-light mx-1px text-95" href="home_afterlogin.php" data-title="Home">
                            <i class="mr-1 fa fa-home text-black-m1 text-120 w-2"></i>
                            Home
                        </a>
                        <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                            <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                            Print
                        </a>
                        <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                            <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                            Export
                        </a>
                    </div>
                </div>
            </div>

            <div class="container px-0">
                <div class="row mt-4">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center text-150">
                                    <img width="100px" height="100px" src="images/logo.png" alt="" />
                                    <span class="text-default-d3">LipstickShop</span>
                                </div>
                            </div>
                        </div>
                        <!-- .row -->

                        <hr class="row brc-default-l1 mx-n1 mb-4" />

                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <?php
                                $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
                                $id_tk = $_SESSION["id_tk"];
                                $infor = mysqli_query($connectdb, "select * from bill");
                                while ($customer = mysqli_fetch_array($infor)) {
                                    if ($id_tk == $customer['id_tk']) {
                                ?>
                                    <span class="text-sm text-grey-m2 align-middle">To:</span>
                                    <span
                                        class="text-600 text-110 text-blue align-middle"><?php echo $customer['fullname'] ?></span>
                                </div>
                                <div class="text-grey-m2">
                                    <div class="my-1"><?php echo $customer['address'] ?></div>
                                    <div class="my-1">
                                        <i class="fa fa-phone fa-flip-horizontal text-secondary"></i>
                                        <b class="text-600"><?php echo $customer['phoneNumber'] ?></b>
                                    </div>
                                </div>
                            </div>
                            <?php }
                                } ?>
                            <!-- /.col -->

                            <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                <hr class="d-sm-none" />
                                <div class="text-grey-m2">
                                    <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                        Invoice
                                    </div>

                                    <div class="my-2">
                                        <i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>
                                        <span class="text-600 text-90">ID:</span> <?php idbill(); ?>
                                    </div>

                                    <div class="my-2">
                                        <i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>
                                        <span class="text-600 text-90">Issue Date:</span> <?php
                                                                                $mydate = getdate(date("U"));
                                                                                echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
                                                                                ?>
                                    </div>

                                    <div class="my-2">
                                        <i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>
                                        <span class="text-600 text-90">Status:</span>
                                        <span class="badge badge-warning badge-pill px-25">Unpaid</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="row border-b-2 brc-default-l2"></div>
                        <!-- or use a table instead -->
                        <div class="table-responsive" style="display: flex; align-items: center;">
                            <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                                <thead class="bg-none bgc-default-tp1">
                                    <tr class="text-white">
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th width="140">Amount</th>
                                    </tr>
                                </thead>
                                <?php
                            $infor_cart = mysqli_query($connectdb, "select * from cart");
                            $id_tk = $_SESSION["id_tk"];
                            while ($cart = mysqli_fetch_array($infor_cart)) {
                                if ($id_tk == $cart['id_tk']) {
                            ?>
                                <tbody class="text-95 text-secondary-d3">
                                    <tr></tr>
                                    <tr>
                                        <td><?php echo $cart['name_cart']  ?></td>
                                        <td><?php echo $cart['quantity_cart']  ?></td>
                                        <td class="text-95"><?php echo $cart['price_cart']  ?></td>
                                        <td class="text-secondary-d2"><?php echo $cart['total_cart']  ?></td>
                                    </tr>
                                </tbody>
                                <?php  }
                            } ?>

                            </table>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                Extra note such as company or payment information...
                            </div>

                            <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                                <div class="row my-2">
                                    <div class="col-7 text-right">SubTotal</div>
                                    <div class="col-5">
                                        <span class="text-120 text-secondary-d1"><?php total(); ?></span>
                                    </div>
                                </div>


                                <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                    <div class="col-7 text-right">Total Amount</div>
                                    <div class="col-5">
                                        <span class="text-150 text-success-d3 opacity-2"><?php total(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div>
                            <span class="text-secondary-d1 text-105">Thank you for your business</span>
                            <a href="#" class="btn btn-warning btn-bold px-4 float-right mt-3 mt-lg-0 mb-5">Cancel</a>
                            <a href="#" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0 mb-5">Pay Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

</html>