<?php

require 'header.php';
require 'sidebar.php';

$fetch_sql = "SELECT * FROM admin";
$res = mysqli_query($con,$fetch_sql);
$total_rows = mysqli_num_rows($res);
$fetch_count_admin = "SELECT COUNT(a_name) AS total_admin_count FROM admin";
$res1 = mysqli_query($con,$fetch_count_admin);

$fetch_count_orders = "SELECT COUNT(*) AS total_orders FROM orders";
$res2 = mysqli_query($con,$fetch_count_orders);

$total_earnings = "SELECT SUM(total) AS total_earnings FROM orders";
$res3 = mysqli_query($con,$total_earnings);

?>
<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>

<!-- Mirrored from acorn-html-ecommerce-platform.coloredstrategies.com/Dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Aug 2021 05:35:31 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<title>Admin Panel</title>
<meta name="description" content="Ecommerce Dashboard">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="img/logo/ap.png">

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



<main>
<div class="container">
<div class="page-title-container">
<div class="row">
<div class="col-12 col-md-7">
<a class="muted-link pb-2 d-inline-block hidden" href="#">
<span class="align-middle lh-1 text-small">&nbsp;</span>
</a>
<h1 class="mb-0 pb-0 display-4" id="title">Welcome, <?php echo $_SESSION['username']?></h1>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="d-flex">
<div class="dropdown-as-select me-3" data-setactive="false" data-childselector="span">
<a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
<span class="small-title"></span>
</a>
<div class="dropdown-menu font-standard">
<div class="nav flex-column" role="tablist">
<a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
<a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
<a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Monthly</a>
<a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Yearly</a>
</div>
</div>
</div>
<h2 class="small-title">Stats</h2>
</div>
<div class="mb-5">
<div class="row g-2">
<div class="col-6 col-md-4 col-lg-4">
<div class="card h-100 hover-scale-up cursor-pointer">
<div class="card-body d-flex flex-column align-items-center">
<div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
<i data-cs-icon="dollar" class="text-primary"></i>
</div>
<div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">EARNINGS</div>
<?php while($data = mysqli_fetch_assoc($res3)){
    ?>
<div class="text-primary cta-4"><?php 

    echo $data['total_earnings'];
?></div>
<?php
}
?>
</div>
</div>
</div>
<div class="col-6 col-md-4 col-lg-4">
<div class="card h-100 hover-scale-up cursor-pointer">
<div class="card-body d-flex flex-column align-items-center">
<div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
<i data-cs-icon="cart" class="text-primary"></i>
</div>
<div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ORDERS</div>
<?php while($data = mysqli_fetch_assoc($res2)){
    ?>
<div class="text-primary cta-4"><?php 

    echo $data['total_orders'];
?></div>
<?php
}
?>
</div>
</div>
</div>
<div class="col-6 col-md-4 col-lg-4">
<div class="card h-100 hover-scale-up cursor-pointer">
<div class="card-body d-flex flex-column align-items-center">
<div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
<i data-cs-icon="user" class="text-primary"></i>
</div>
<div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">USERS</div>
<?php while($data = mysqli_fetch_assoc($res1)){
    ?>
<div class="text-primary cta-4"><?php 

    echo $data['total_admin_count'];
?></div>
<?php
}
?>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 mb-10">
<h2 class="small-title">Admin Details</h2>

<div class="mb-n2 scroll-out">

<div class="scroll-by-count" data-count="6">
<?php
    if($total_rows!=0){
        while($data = mysqli_fetch_assoc($res)){
    
    ?>
<div class="mt-3 card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">

<div class="row g-0 h-100 align-content-center">
   
<div class="col-2 col-md-2 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<?php echo $data['a_id']?>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<?php echo $data['a_name']?>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<?php echo $data['a_email']?>

</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">
    <img src="media/<?php echo $data['img']?>" width="40" height="40" style="border:1px ridge black; border-radius:300px;">
</div>

<div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">

            <a href="adminedit.php?adminid=<?php echo $data['a_id']?>"> Edit </a>| <a href="admindel.php?adminid=<?php echo $data['a_id']?>">Delete</a> </div>
            </div>
            

                       
                
                   
</div>

</div>
</div>

<?php
        }
    }

?>

</div>


</div>
</main>
<footer>
<div class="footer-content">
<div class="container">
<div class="row">
<div class="col-12 col-sm-6">
<p class="mb-0 text-muted text-medium">© <?php echo $_SESSION['username']?></p>
</div>
<div class="col-sm-6 d-none d-sm-block">
<ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
<li class="breadcrumb-item mb-0 text-medium">
<a href="https://www.linkedin.com/in/azazulhaq97" target="_blank" class="btn-link">Profile</a>
</li>
<li class="breadcrumb-item mb-0 text-medium">
<a href="#" target="_blank" class="btn-link">Main Site</a>
</li>
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

<div class="settings-buttons-container">
<button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
<span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
<i data-cs-icon="paint-roller" class="position-relative"></i>
</span>
</button>
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
<script src="js/vendor/Chart.bundle.min.js"></script>
<script src="js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
<script src="js/vendor/jquery.barrating.min.js"></script>
<script src="font/CS-Line/csicons.min.js"></script>
<script src="js/base/helpers.js"></script>
<script src="js/base/globals.js"></script>
<script src="js/base/nav.js"></script>
<script src="js/base/search.js"></script>
<script src="js/base/settings.js"></script>
<script src="js/base/init.js"></script>
<script src="js/cs/charts.extend.js"></script>
<script src="js/pages/dashboard.js"></script>
<script src="js/common.js"></script>
<script src="js/scripts.js"></script>
</body>

</html>
