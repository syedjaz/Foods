<?php
include 'config.php';
$id = $_GET['bannerid'];
$delete = "DELETE FROM banner WHERE id = '{$id}'";
$res = mysqli_query($con,$delete);
header('Location:http://localhost:82/ebook/admin/view_banner_details.php');

?>