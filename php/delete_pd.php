<?php
session_start();
$connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
$thongtin = mysqli_query($connectdb, 'select * from cart');
if (isset($_POST['delete'])) {
    $id_cart = $_SESSION['id_cart'];
    $delete = "delete from cart where id_cart='$id_cart'";
    if (mysqli_query($connectdb, $delete)) {
        echo "<script language = 'javascript'>alert('Delete Succesful!');
       window.location='http://localhost/lipstick/cart.php';
       </script>";
    } else {
        echo "Xóa thất bại: " . mysqli_error($connectdb);
    }
}
