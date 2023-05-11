<?php
include 'config.php';
$id = $_GET['stockid'];
$delete = "DELETE FROM book_stock WHERE id = '{$id}'";
$res = mysqli_query($con,$delete);
header('Location:http://localhost:82/ebook/admin/view_book_stock.php');

?>