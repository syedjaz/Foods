<?php
include 'config.php';
$id = $_GET['bookid'];
$delete = "DELETE FROM books WHERE b_id = '{$id}'";
$res = mysqli_query($con,$delete);
header('Location:http://localhost:82/ebook/admin/view_books.php');

?>