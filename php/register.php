<?php
session_start();
$connectdb = mysqli_connect('localhost','root','','shoplipstick');
$name_tk = $_POST['name_tk'];
$email_tk = $_POST['email_tk'];
$password_tk = $_POST['password_tk'];
$_SESSION['name_tk'] = $name_tk;
$insert = "insert into taikhoan (name_tk,email_tk, password_tk) values('$name_tk','$email_tk','$password_tk')";
if (mysqli_query($connectdb, $insert)) {
    echo "<script language ='javascript'>alert('Register Success');
    window.location='http://localhost/lipstick/account.php';
    </script>";
}
?>