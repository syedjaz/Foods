
<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>

<!-- Mirrored from acorn-html-ecommerce-platform.coloredstrategies.com/Orders.List.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Aug 2021 05:40:18 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>Order Details</title>
<meta name="description" content="Ecommerce Order List Page">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="img/favicon/favicon-128.png" sizes="128x128">
<meta name="application-name" content="&nbsp;">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
<meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png">
<meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png">
<meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png">
<meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="font/CS-Interface/style.css">
<link rel="stylesheet" href="css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="css/vendor/OverlayScrollbars.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/base/loader.js"></script>
</head>
<body>

<?php
require 'header.php';
require 'sidebar.php';
?>


<div class="mobile-buttons-container">
<a href="#" id="mobileMenuButton" class="menu-button">
<i data-cs-icon="menu"></i>
</a>
</div>
</div>
<div class="nav-shadow"></div>
</div>
<main>
<div class="container">
<div class="page-title-container">
<div class="row">
<div class="col-auto mb-3 mb-md-0 me-auto">
<div class="w-auto sw-md-30">
<a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
<i data-cs-icon="chevron-left" data-cs-size="13"></i>
<span class="text-small align-middle">Home</span>
</a>
<h1 class="mb-0 pb-0 display-4" id="title">Orders</h1>
</div>
</div>

<div class="mt-5 row">
<div class="col-12 mb-5">
<div class="card mb-2 bg-transparent no-shadow d-none d-md-block">
<div class="card-body pt-0 pb-0 sh-3">
<div class="row g-0 h-100 align-content-center">
<div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0 text-muted text-small">Order_id</div>
<div class="col-6 col-md-3 d-flex align-items-center text-alternate text-medium text-muted text-small">Book</div>
<div class="col-6 col-md-3 d-flex align-items-center text-alternate text-medium text-muted text-small">Quantity</div>
<div class="col-6 col-md-3 d-flex align-items-center text-alternate text-medium text-muted text-small">Price</div>


</div>
</div>
</div>
<?php
$order_id = $_GET['order_id'];
$fetch_orders = "SELECT * FROM order_details JOIN books ON order_details.book_id = books.b_id WHERE order_id = '{$order_id}'";
$res = mysqli_query($con,$fetch_orders);
$total_rows = mysqli_num_rows($res);
if($total_rows!=0){
    while($data = mysqli_fetch_assoc($res)){

?>
<?php
if(isset($_POST['updateorderstatus'])){
    $order_status = $_POST['order_status'];
    $sql = "UPDATE orders SET order_status = '{$order_status}' WHERE order_id='{$order_id}' ";
    $execute_sql = mysqli_query($con,$sql);
}

?>
<div id="checkboxTable">
<div class="card mb-2">
<div class="card-body pt-0 pb-0 sh-21 sh-md-8">
<div class="row g-0 h-100 align-content-center">
<div class="col-11 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-1 order-md-1 h-md-100 position-relative">
<div class="text-muted text-small d-md-none">#</div>
<a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center"><?php echo $data['order_id']?></a>
</div>
<div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-3 order-md-2">
<div class="text-muted text-small d-md-none">Book</div>
<div class="text-alternate"><img src="media/<?php echo $data['b_image']?>" alt="" width="50" height="50"></div>
</div>
<div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">
<div class="text-muted text-small d-md-none">Quantity</div>
<div class="text-alternate">
<span>
<span class="text-small">
<?php echo $data['qty']?>

</span>
</div>
</div>
<div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-5 order-md-4">
<div class="text-muted text-small d-md-none">Price</div>
<div class="text-alternate"><?php echo $data['price']?></div>
</div>
</div>
</div>
</div>
<?php
    }
}

?>
<div id="checkboxTable">
<div class="card mb-2">
<div class="card-body pt-0 pb-0 sh-21 sh-md-8">
<div class="row g-0 h-100 align-content-center">
<div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">Total Price</div>

<div class="offset-6 col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">

<div class="text-alternate">
<span>
<span>
<?php
    $total_order = "SELECT SUM(qty*price) AS total FROM order_details WHERE order_id ='{$order_id}'";
    $result_order = mysqli_query($con,$total_order);
    while($data = mysqli_fetch_assoc($result_order)){
    echo $data['total'];
    }
                                                
    ?>

</span>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="checkboxTable">
<div class="card mb-2">
<div class="card-body pt-0 pb-0 sh-21 sh-md-8">
<div class="row g-0 h-100 align-content-center">
<div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">Address</div>

<div class="offset-6 col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">

<div class="text-alternate">
<span>
<span>
<?php
    $order_info = "SELECT address,city,pincode,order_status FROM orders WHERE order_id ='{$order_id}'";
    $result_order_info = mysqli_query($con,$order_info);
    while($data = mysqli_fetch_assoc($result_order_info)){
    echo $data['address']."<br>";
    echo $data['city']."<br>";
    echo $data['pincode'];
    }
                                                
    ?>

</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="checkboxTable">
<div class="card mb-2">
<div class="card-body pt-0 pb-0 sh-21 sh-md-8">
<div class="row g-0 h-100 align-content-center">
<div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">Order Status</div>

<div class="offset-6 col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">

<div class="text-alternate">
<span>
<span>
<?php
    $order_info = "SELECT * FROM orders JOIN order_status ON orders.order_status = order_status.id WHERE order_id ='{$order_id}'";
    $result_order_info = mysqli_query($con,$order_info);
    while($data = mysqli_fetch_assoc($result_order_info)){
    echo $data['status'];
    }
                                                
    ?>

</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="checkboxTable">
<div class="card mb-2">
<div class="card-body pt-0 pb-0 sh-21 sh-md-8">
<div class="row g-0 h-100 align-content-center">
<div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">Status Report</div>

<div class="offset-6 col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">

<div class="text-alternate">
<span>
<span>
    


</span>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="checkboxTable">
<div class="card mb-2">
<div class="card-body pt-0 pb-0 sh-21 sh-md-8">
<div class="row g-0 h-100 align-content-center">


<div class="col-6 col-md-12 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">

<div class="text-alternate">
<span>
<span>

<form method="POST">
<select class="select-single-no-search form-select" name="order_status" required>
<option selected disabled>--Select--</option>
<?php
    $order_status = "SELECT * FROM order_status";
    $status_res = mysqli_query($con,$order_status);
    while($data = mysqli_fetch_assoc($status_res)){
                                                
    ?>
<option value="<?php echo $data['id']?>"><?php echo $data['status']?></option>

<?php
    }
?>
</select>

</span>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="checkboxTable">
<div class="card mb-2">
<div class="card-body pt-0 pb-0 sh-21 sh-md-8">
<div class="row g-0 h-100 align-content-center">


<div class="col-6 col-md-12 d-flex flex-column justify-content-center mb-2 mb-md-0 order-4 order-md-3">

<div class="text-alternate">
<span>
<span>
<input type="submit" class="btn btn-primary btn-outline-light"  name="updateorderstatus" value="Update Status">
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</form>

</main>
<footer>
<div class="footer-content">
<div class="container">
<div class="row">
<div class="col-12 col-sm-6">
<p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
</div>
<div class="col-sm-6 d-none d-sm-block">
<ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
<li class="breadcrumb-item mb-0 text-medium">
<a href="https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Review</a>
</li>
<li class="breadcrumb-item mb-0 text-medium">
<a href="https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Purchase</a>
</li>
<li class="breadcrumb-item mb-0 text-medium"><a href="https://acorn-html-docs.coloredstrategies.com/" target="_blank" class="btn-link">Docs</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
</div>
<div class="modal fade modal-right scroll-out-negative" id="settings" data-bs-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="settings" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable full" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Theme Settings</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="scroll-track-visible">
<div class="mb-5" id="color">
<label class="mb-3 d-inline-block form-label">Color</label>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="blue-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT BLUE</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="blue-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK BLUE</span>
</div>
</a>
</div>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="red-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT RED</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="red-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK RED</span>
</div>
</a>
</div>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="green-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT GREEN</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="green-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK GREEN</span>
</div>
</a>
</div>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="purple-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT PURPLE</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="purple-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK PURPLE</span>
</div>
</a>
</div>
<div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
<a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="pink-light"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT PINK</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
<div class="card rounded-md p-3 mb-1 no-shadow color">
<div class="pink-dark"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK PINK</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="navcolor">
<label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DEFAULT</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-secondary figure-light top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">LIGHT</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-muted figure-dark top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">DARK</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="behaviour">
<label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary left large"></div>
<div class="figure figure-secondary right small"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">PINNED</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary left"></div>
<div class="figure figure-secondary right"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">UNPINNED</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="layout">
<label class="mb-3 d-inline-block form-label">Layout</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">FLUID</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
<div class="card rounded-md p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom small"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">BOXED</span>
</div>
</a>
</div>
</div>
<div class="mb-5" id="radius">
<label class="mb-3 d-inline-block form-label">Radius</label>
<div class="row d-flex g-3 justify-content-between flex-wrap">
<a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
<div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">ROUNDED</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
<div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">STANDARD</span>
</div>
</a>
<a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
<div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
<div class="figure figure-primary top"></div>
<div class="figure figure-secondary bottom"></div>
</div>
<div class="text-muted text-part">
<span class="text-extra-small align-middle">FLAT</span>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade modal-right scroll-out-negative" id="niches" data-bs-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="niches" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable full" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Niches</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="scroll-track-visible">
<div class="mb-5">
<label class="mb-2 d-inline-block form-label">Classic Dashboard</label>
<div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
<div class="position-relative mb-3 mb-lg-5 rounded-sm">
<img src="../acorn.coloredstrategies.com/img/page/classic-dashboard.jpg" class="img-fluid rounded-sm lower-opacity border border-separator-light" alt="card image">
<div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
<a target="_blank" href="https://acorn-html-classic-dashboard.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Html
</a>
<a target="_blank" href="https://acorn-laravel-classic-dashboard.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Laravel
</a>
<a target="_blank" href="https://acorn-dotnet-classic-dashboard.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
.Net5
</a>
</div>
</div>
</div>
</div>
<div class="mb-5">
<label class="mb-2 d-inline-block form-label">Ecommerce Platform</label>
<div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
<div class="position-relative mb-3 mb-lg-5 rounded-sm">
<img src="../acorn.coloredstrategies.com/img/page/ecommerce-platform.jpg" class="img-fluid rounded-sm lower-opacity border border-separator-light" alt="card image">
<div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
<a target="_blank" href="index.html" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Html
</a>
<a target="_blank" href="https://acorn-laravel-ecommerce-platform.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Laravel
</a>
<a target="_blank" href="https://acorn-dotnet-ecommerce-platform.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
.Net5
</a>
</div>
</div>
</div>
</div>
<div class="mb-5">
<label class="mb-2 d-inline-block form-label">Elearning Portal</label>
<div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
<div class="position-relative mb-3 mb-lg-5 rounded-sm">
<img src="../acorn.coloredstrategies.com/img/page/elearning-portal.jpg" class="img-fluid rounded-sm lower-opacity border border-separator-light" alt="card image">
<div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
<a target="_blank" href="https://acorn-html-elearning-portal.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Html
</a>
<a target="_blank" href="https://acorn-laravel-elearning-portal.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Laravel
</a>
<a target="_blank" href="https://acorn-dotnet-elearning-portal.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
.Net5
</a>
</div>
</div>
</div>
</div>
<div class="mb-5">
<label class="mb-2 d-inline-block form-label">Service Provider</label>
<div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
<div class="position-relative mb-3 mb-lg-5 rounded-sm">
<img src="../acorn.coloredstrategies.com/img/page/service-provider.jpg" class="img-fluid rounded-sm lower-opacity border border-separator-light" alt="card image">
<div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
<a target="_blank" href="https://acorn-html-service-provider.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Html
</a>
<a target="_blank" href="https://acorn-laravel-service-provider.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Laravel
</a>
<a target="_blank" href="https://acorn-dotnet-service-provider.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
.Net5
</a>
</div>
</div>
</div>
</div>
<div class="mb-5">
<label class="mb-2 d-inline-block form-label">Starter Project</label>
<div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
<div class="position-relative mb-3 mb-lg-5 rounded-sm">
<img src="../acorn.coloredstrategies.com/img/page/starter-project.jpg" class="img-fluid rounded-sm lower-opacity border border-separator-light" alt="card image">
<div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
<a target="_blank" href="https://acorn-html-starter-project.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Html
</a>
<a target="_blank" href="https://acorn-laravel-starter-project.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
Laravel
</a>
<a target="_blank" href="https://acorn-dotnet-starter-project.coloredstrategies.com/" class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
.Net5
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="settings-buttons-container">
<button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
<span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
<i data-cs-icon="paint-roller" class="position-relative"></i>
</span>
</button>
<button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#niches" id="nichesButton">
<span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Niches">
<i data-cs-icon="toy" class="position-relative"></i>
</span>
</button>
<a href="https://1.envato.market/BX5oGy" target="_blank" class="btn settings-button btn-primary p-0" id="purchaseButton">
<span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Purchase">
<i data-cs-icon="cart" class="position-relative"></i>
</span>
</a>
</div>
<div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header border-0 p-0">
<button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body ps-5 pe-5 pb-0 border-0">
<input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off">
</div>
<div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
<span class="text-alternate d-inline-block m-0 me-3">
<i data-cs-icon="arrow-bottom" data-cs-size="15" class="text-alternate align-middle me-1"></i>
<span class="align-middle text-medium">Navigate</span>
</span>
<span class="text-alternate d-inline-block m-0 me-3">
<i data-cs-icon="arrow-bottom-left" data-cs-size="15" class="text-alternate align-middle me-1"></i>
<span class="align-middle text-medium">Select</span>
</span>
</div>
</div>
</div>
</div>
<script src="js/vendor/jquery-3.5.1.min.js"></script>
<script src="js/vendor/bootstrap.bundle.min.js"></script>
<script src="js/vendor/OverlayScrollbars.min.js"></script>
<script src="js/vendor/autoComplete.min.js"></script>
<script src="js/vendor/clamp.min.js"></script>
<script src="font/CS-Line/csicons.min.js"></script>
<script src="js/base/helpers.js"></script>
<script src="js/base/globals.js"></script>
<script src="js/base/nav.js"></script>
<script src="js/base/search.js"></script>
<script src="js/base/settings.js"></script>
<script src="js/base/init.js"></script>
<script src="js/cs/checkall.js"></script><script src="js/pages/orders.list.js"></script>
<script src="js/common.js"></script>
<script src="js/scripts.js"></script>
</body>

<!-- Mirrored from acorn-html-ecommerce-platform.coloredstrategies.com/Orders.List.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Aug 2021 05:40:18 GMT -->
</html>
