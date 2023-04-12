<?php
function products()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    $infor = mysqli_query($connectdb, "select * from products");

    while ($product = mysqli_fetch_array($infor)) {
        echo "
        <div class='box'>
        <a href='' class='fas fa-eye'></a>
        <a href='' class='fas fa-heart'></a>
        <img src ='img/" . $product['images'] . "'>
        <div class='stars'>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star-half-alt'></i>
        </div>
        <h3>" . $product['name_pd'] . "</h3>
        <p>" . $product['made_in'] . "</p>
        <span>$" . $product['price_pd'] . "</span>
        <form action='php/process_cart.php' method='POST'>
        <input type='number' name='quantity' value='1'>
        <input type='submit' name='addtocart' class='btn' value='Add to cart'>
        </div>
        <input type='hidden' name='name_pd' value='" . $product['name_pd'] . "'>
        <input type='hidden' name='images' value='" . $product['images'] . "'>
        <input type='hidden' name='price_pd' value='" . $product['price_pd'] . "'>
        </form>";
    }
}
?>

<?php
function quantity_cart()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    $infor_cart = mysqli_query($connectdb, "select *from cart");
    $id_tk = $_SESSION['id_tk'];
    $i = 0;
    while ($cart = mysqli_fetch_array($infor_cart)) {
        if ($id_tk == $cart['id_tk']) {
            $array = [];
            $i++;
            array_push($array, $i);
        }
    }
    $size = array_sum($array);
    if ($size > 0) {
        echo $size;
    } else {
        echo "";
    }
}

?>

<?php
function total()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    $id_tk = $_SESSION["id_tk"];
    $array = [];
    $infor_cart = mysqli_query($connectdb, "select * from cart ");
    while ($cart = mysqli_fetch_array($infor_cart)) {
        if ($id_tk == $cart['id_tk']) {
            array_push($array, $cart['total_cart']);
        }
    }
    $total = array_sum($array);
    echo $total;
}

?>
<?php
function idbill()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    $id = mysqli_query($connectdb, "select * from bill");
    $id_tk = $_SESSION["id_tk"];
    while ($id_bill = mysqli_fetch_array($id)) {
        if ($id_tk == $id_bill['id_tk']) {
            echo $id_bill['id_bill'];
        }
    }
}
?>


<?php
function updatenumber()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    $infor_cart = mysqli_query($connectdb, "select * from cart");
    if (isset($_POST['addtocart']) && $_POST['addtocart']) {
        $images = $_POST['images'];
        $name_pd = $_POST['name_pd'];
        $price_pd = $_POST['price_pd'];
        $quantity = $_POST['quantity'];
        $id_tk = $_SESSION['id_tk'];
        $_SESSION['images'] = $images;
        $_SESSION['name_pd'] = $name_pd;
        $_SESSION['price_pd'] = $price_pd;
        $_SESSION['quantity'] = $quantity;
        $total = $price_pd * $quantity;
        while ($cart = mysqli_fetch_array($infor_cart)) {
            if ($id_tk == $cart['id_tk']) {
                if ($name_pd == $cart['name_cart']) {
                    $quantity_total = $quantity + $cart['quantity_cart'];
                    $total_2 = $price_pd * $quantity_total;
                    $update = "update cart set quantity_cart = '$quantity_total', total_cart = '$total_2' where name_cart = '$name_pd'";
                    if (mysqli_query($connectdb, $update)) {
                        echo "<script language='javascript'>
                  alert('Updates to cart success!');
                  window.location = 'http://localhost/lipstick/home_afterlogin.php';
                  </script>";
                    }
                } else {
                    $addcart = "insert into cart (images, name_cart, price_cart, quantity_cart, total_cart, id_tk) values ('$images','$name_pd','$price_pd','$quantity','$total','$id_tk')";
                    if (mysqli_query($connectdb, $addcart)) {
                        echo "<script language='javascript'>
              alert('Add to cart success!');
              window.location = 'http://localhost/lipstick/home_afterlogin.php';
              </script>";
                    }
                }
            }
        }
    }
}

?>