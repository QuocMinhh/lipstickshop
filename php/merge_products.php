<?php
function merge_products()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    $array = [];
    $id_tk = $_SESSION['id_tk'];
    if (isset($_POST['merge'])) {
        $infor_cart = mysqli_query($connectdb, "select * from cart where id_tk = '$id_tk'");
        while ($cart = mysqli_fetch_array($infor_cart)) {
            foreach ($cart as $key) {
            }
        }
    }
}