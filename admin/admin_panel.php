<?php
include 'header.php';
?>
<body>
<div id="root">
<div id="nav" class="nav-container d-flex">
<div class="nav-content d-flex">
<div class="logo position-relative">
<a href="Dashboard.html">

    <img src="img/logo/a1.png" alt="">

</a>
</div>
<div class="user-container d-flex">
<a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="profile" alt="profile" src="img/profile/abdul-shakoor.png">
<div class="name">E BOOK STORE</div>
</a>
<div class="dropdown-menu dropdown-menu-end user-menu wide">
<div class="row mb-3 ms-0 me-0">
<div class="col-12 ps-1 mb-2">
<div class="text-extra-small text-primary">ACCOUNT</div>
</div>
<div class="col-6 ps-1 pe-1">
<ul class="list-unstyled">
<li>
<a href="#">User Info</a>
</li>
<li>
<a href="#">Preferences</a>
</li>
<li>
<a href="#">Calendar</a>
</li>
</ul>
</div>
<div class="col-6 pe-1 ps-1">
<ul class="list-unstyled">
<li>
<a href="#">Security</a>
</li>
<li>
<a href="#">Billing</a>
</li>
</ul>
</div>
</div>
<div class="row mb-1 ms-0 me-0">
<div class="col-12 p-1 mb-2 pt-2">
<div class="text-extra-small text-primary">APPLICATION</div>
</div>
<div class="col-6 ps-1 pe-1">
<ul class="list-unstyled">
<li>
<a href="#">Themes</a>
</li>
<li>
<a href="#">Language</a>
</li>
</ul>
</div>
<div class="col-6 pe-1 ps-1">
<ul class="list-unstyled">
<li>
<a href="#">Devices</a>
</li>
<li>
<a href="#">Storage</a>
</li>
</ul>
</div>
</div>
<div class="row mb-1 ms-0 me-0">
<div class="col-12 p-1 mb-3 pt-3">
<div class="separator-light"></div>
</div>
<div class="col-6 ps-1 pe-1">
<ul class="list-unstyled">
<li>
<a href="#">
<i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Help</span>
</a>
</li>
<li>
<a href="#">
<i data-cs-icon="file-text" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Docs</span>
</a>
</li>
</ul>
</div>
<div class="col-6 pe-1 ps-1">
<ul class="list-unstyled">
<li>
<a href="#">
<i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Settings</span>
</a>
</li>
<li>
<a href="#">
<i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Logout</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<ul class="list-unstyled list-inline text-center menu-icons">

<li class="list-inline-item">
<a href="#" id="pinButton" class="pin-button">
<i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
<i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#" id="colorButton">
<i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
<i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
</a>
</li>
<li class="list-inline-item">
    <a href="#" id="colorButton">
    <i data-cs-icon="arrow-bottom-left" class="light" data-cs-size="18"></i>
    <i data-cs-icon="arrow-bottom-left" class="dark" data-cs-size="18"></i>
    </a>
</li>


</ul>
<div class="menu-container flex-grow-1">
<ul id="menu" class="menu">
<li>
<a href="Dashboard.html">
<i data-cs-icon="shop" class="icon" data-cs-size="18"></i>
<span class="label">Dashboard</span>
</a>
</li>
<li>
<a href="#products" data-href="Products.html">
<i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
<span class="label">Products</span>
</a>
<ul id="products">
<li>
<a href="Products.List.html">
<span class="label">List</span>
</a>
</li>
<li>
<a href="Products.Detail.html">
<span class="label">Detail</span>
</a>
</li>
</ul>
</li>
<li>
<a href="#orders" data-href="Orders.html">
<i data-cs-icon="cart" class="icon" data-cs-size="18"></i>
<span class="label">Orders</span>
</a>
<ul id="orders">
<li>
<a href="Orders.List.html">
<span class="label">List</span>
</a>
</li>
<li>
<a href="Orders.Detail.html">
<span class="label">Detail</span>
</a>
</li>
</ul>
</li>
<li>
<a href="#customers" data-href="Customers.html">
<i data-cs-icon="user" class="icon" data-cs-size="18"></i>
<span class="label">Customers</span>
</a>
<ul id="customers">
<li>
<a href="Customers.List.html">
<span class="label">List</span>
</a>
</li>
<li>
<a href="Customers.Detail.html">
<span class="label">Detail</span>
</a>
</li>
</ul>
</li>

<li>
<a href="Discount.html">
<i data-cs-icon="tag" class="icon" data-cs-size="18"></i>
<span class="label">Discount</span>
</a>
</li>

</ul>
</div>
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
<div class="col-12 col-md-7">
<a class="muted-link pb-2 d-inline-block hidden" href="#">
<span class="align-middle lh-1 text-small">&nbsp;</span>
</a>
<h1 class="mb-0 pb-0 display-4" id="title">Welcome, Mudassir Yaqoob</h1>
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
<div class="text-primary cta-4">$ 315.20</div>
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
<div class="text-primary cta-4">16</div>
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
<div class="text-primary cta-4">17</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 mb-10">
<h2 class="small-title">Recent Orders</h2>
<div class="mb-n2 scroll-out">
<div class="scroll-by-count" data-count="6">
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54129</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-primary me-1">PENDING</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
17.35
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 13:20</div>
</div>
</div>
</div>
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54128</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-primary me-1">PENDING</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
145.20
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 11:32</div>
</div>
</div>
</div>
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54127</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-primary me-1">PENDING</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
110.85
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 11:20</div>
</div>
</div>
</div>
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54126</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-primary me-1">PENDING</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
58.00
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 10:20</div>
</div>
</div>
</div>
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54125</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-secondary me-1">SHIPPED</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
22.05
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 07:30</div>
</div>
</div>
</div>
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54124</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-secondary me-1">SHIPPED</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
14.25
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 17:30</div>
</div>
</div>
</div>
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54123</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-quaternary me-1">DELIVERED</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
42.00
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 11:25</div>
</div>
</div>
</div>
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54122</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-quaternary me-1">DELIVERED</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
63.25
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 15:20</div>
</div>
</div>
</div>
<div class="card mb-2 sh-15 sh-md-6">
<div class="card-body pt-0 pb-0 h-100">
<div class="row g-0 h-100 align-content-center">
<div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
<a href="Orders.Detail.html" class="body-link stretched-link">Order #54121</a>
</div>
<div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
<span class="badge bg-outline-quaternary me-1">DELIVERED</span>
</div>
<div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
<span>
<span class="text-small">$</span>
74.00
</span>
</div>
<div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 13:10</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


</div>
</main>
<?php
require 'footer.php';
?>
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
