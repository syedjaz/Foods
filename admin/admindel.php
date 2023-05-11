<?php

include 'config.php';
$id = $_GET['adminid'];
$delete = "DELETE FROM admin WHERE a_id = '{$id}'";
$res = mysqli_query($con,$delete);
header('Location:http://localhost:82/ebook/admin/dashboard.php');

?>


