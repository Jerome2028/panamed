<?php
date_default_timezone_set("Asia/Manila");
$title = "Admin - Dashboard";
$page =1;

  require_once 'component/import.php';
  require_once 'component/header.php';
  require_once 'controller/controller.session.php'; 
  $userole = $session->getSession("role");
?>
<section class="dashboard">
<div class="container-fluid">
    <div class="row">
        <?php require_once 'component/sidenav.php';?>
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-8">
        <?php  require_once 'component/search.php';?>
        <div class="container-fluid">
            <div class="icons py-5 px-5">
            <h4 class="fw-bold">Welcome Back!<span class="ms-1"><?php echo $loggedInRoleString?></span></h4>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 mt-3">
                        <div class="position-relative">
                            <a class="card bg-success text-white p-5 text-center border-0" href="<?=$BASE;?>news-events/"><span class="fw-bold fs-1 value" count="<?= $newsEvents->countAllEvents(); ?>">0</span><br><p class="text-white fw-bold text-nowrap">News Events</p></a>
                            <i class="bi bi-megaphone-fill"></i>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 mt-3">
                        <div class="position-relative">
                            <a class="card bg-info text-white p-5 text-center border-0" href="<?=$BASE;?>products/"><span class="fw-bold fs-1 value" count="<?= $products->countAllProducts(); ?>">0</span><br><p class="text-white fw-bold">Products</p></a>
                            <i class="bi bi-cart-fill"></i>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 mt-3">
                        <div class="position-relative">
                            <a class="card bg-warning text-white p-5 text-center border-0" href="<?=$BASE;?>career/"><span class="fw-bold fs-1 value" count="<?= $careers->countAllCareers(); ?>">0</span><br><p class="text-white fw-bold">Careers</p></a>
                            <i class="bi bi-handbag-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>
<script> 
$(function (){
animate();
})
</script>
