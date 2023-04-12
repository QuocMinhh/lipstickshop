<?php

session_start();
$connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
$id_tk = $_SESSION['id_tk'];
$infor_cart = mysqli_query($connectdb, "select * from cart where id_tk = '$id_tk' ");
if (isset($_POST['addtocart']) && $_POST['addtocart']) {
  $images = $_POST['images'];
  $name_pd = $_POST['name_pd'];
  $price_pd = $_POST['price_pd'];
  $quantity = $_POST['quantity'];
  $_SESSION['images'] = $images;
  $_SESSION['name_pd'] = $name_pd;
  $_SESSION['price_pd'] = $price_pd;
  $_SESSION['quantity'] = $quantity;
  $total = $price_pd * $quantity;
  $addcart = "insert into cart (images, name_cart, price_cart, quantity_cart, total_cart, id_tk) values
  ('$images','$name_pd','$price_pd','$quantity','$total','$id_tk')";
  if (mysqli_query($connectdb, $addcart)) {
    echo "<script language='javascript'>
  alert('Add to cart success!');
  window.location = 'http://localhost/lipstick/home_afterlogin.php';
  </script>";
  }
}
