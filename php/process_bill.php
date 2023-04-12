<?php
session_start();
$connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
if (isset($_POST['confirm']) && $_POST['confirm']) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];
    $_SESSION['fullname'] = $fullname;
    $_SESSION['address'] = $address;
    $_SESSION['phoneNumber'] = $phoneNumber;
    $id_tk = $_SESSION['id_tk'];
    $addtobill = "insert into bill (fullname, address, phoneNumber, id_tk) values ('$fullname','$address','$phoneNumber','$id_tk')";
    if (mysqli_query($connectdb, $addtobill)) {
        echo "<script language='javascript'>
      alert('Add to bill success!');
      window.location = 'http://localhost/lipstick/bill.php';
      </script>";
    }
}
