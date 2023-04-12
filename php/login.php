<?php
session_start();
$connectdb = mysqli_connect('localhost','root','','shoplipstick');
$information = mysqli_query($connectdb,'select * from taikhoan');
$email_signin = $_POST["email-signin"];
$password_signin = $_POST["password-signin"];
$_SESSION["email-signin"] = $email_signin;
$_SESSION["password-signin"] = $password_signin;
while ($login = mysqli_fetch_array($information))
{
    if($email_signin == $login["email_tk"] && $password_signin == $login["password_tk"])
    {
        $id_tk = $login["id_tk"];
        $_SESSION["id_tk"] = $id_tk;
        header('location: http://localhost/lipstick/home_afterlogin.php',true,301);
        
    }
    else{
        echo "<script>alert('Email and Password do not match');
        window.location = 'http://localhost/lipstick/account.php'</script>";
    }
}


?>