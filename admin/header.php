<?php
require 'config.php';
if(!isset($_SESSION['username'])){
    header("Location:http://localhost:82/ebook/admin/");
  }
?>
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
<img class="profile" alt="profile" src="media/<?php echo $_SESSION['img']?>">
<div class="name"><?php echo $_SESSION['username']?></div>
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
<a href="logout.php">
<i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
<span class="align-middle">Logout</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>