<?php
$connectdb = mysqli_connect('localhost', 'root', '', 'shoplipstick');
if (isset($_POST['delete'])) {
    $id_pd = $_POST['id_pd'];
    $delete = "delete from products where id_pd = '$id_pd' ";
    if (mysqli_query($connectdb, $delete)) {
        echo "<script language = 'javascript'>alert('Delete Succesful!');
        window.location='http://localhost/lipstick/admin/admin-products.php';
        </script>";
    } else {
        echo "Xóa thất bại: " . mysqli_error($connectdb);
    }
}
