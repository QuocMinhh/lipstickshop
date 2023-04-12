<?php
function products()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    $infor = mysqli_query($connectdb, "select * from products");
    while ($product = mysqli_fetch_array($infor)) {
        echo " <form action ='' method = 'POST'>
            <tr class='list-products'>
                            <td>
                              <img width='100px' height='100px' src ='../img/" . $product['images'] . "' alt=' />;

                            </td>
                            <td id='name'>
                             " . $product['name_pd'] . "
                            </td>
                            <td id='price'>
                            " . $product['price_pd'] . "
                            </td>
                            <td>
                                " . $product['quantity_pd'] . "
                            </td>
                            <td><i class'bx bxs-wrench'></i></td>
                            <td><i class='bx bxs-trash-al'></i></td>
            </tr>
                        </form>
                        
                        
                        
                        ";
    }
}
?>


<?php
function add_products()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    if (isset($_POST['confirm'])) {
        $id = $_POST['id'];
        $img = $_POST['img'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $made_in = $_POST['made-in'];
        $add = "insert into products (id_pd, images, name_pd, price_pd, quantity_pd, made_in) values ('$id','$img','$name','$price','$quantity','$made_in')";
        if (mysqli_query($connectdb, $add)) {
            echo "<script language = 'javascript'>alert('Add_Products Succesful!');
        window.location='http://localhost/lipstick/admin/admin-products.php';
        </script>";
        } else {
            echo "<script language = 'javascript'>alert('Add_Products Fail!!!');
        window.location='http://localhost/lipstick/admin/admin-products.php';
        </script>";
        }
        mysqli_close($connectdb);
    }
}
?>


<?php
function change_products()
{
    $connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
    $id_pd  = $_SESSION['id_pd'];
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $madein = $_POST['made-in'];
        $update = "update products set name_pd = '$name', price_pd = '$price', quantity_pd = '$quantity', made_in = '$madein' where id_pd = '$id_pd'";
        if (mysqli_query($connectdb, $update)) {
            echo "<script language = 'javascript'>alert('Save Succesful!');
            window.location='http://localhost/lipstick/admin/admin-products.php';
        </script>";
        } else {

            echo "<script language = 'javascript'>alert('Save Fail!!!!');
            window.location='http://localhost/lipstick/admin/admin-products.php';
        </script>";
        }
    }
    mysqli_close($connectdb);
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