<?php
include 'config.php';
$id = $_GET['catid'];
$delete = "DELETE FROM categories WHERE cat_id = '{$id}'";
$res = mysqli_query($con,$delete);
header('Location:http://localhost:82/ebook/admin/view_category.php');

?>