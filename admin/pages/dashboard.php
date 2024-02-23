<?php
date_default_timezone_set("Asia/Manila");
$title = "Admin - Dashboard";
$page =1;

  require_once 'component/import.php';
  require_once 'component/header.php';
  require_once 'controller/controller.session.php'; 
  $userole = $session->getSession("role");
?>
<body>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row flex-nowrap h-100">
                <div class="col-auto col-md-3 col-xl-2  px-0 bg-light  d-inline-block">

                <?php require_once 'component/sidenav.php';?>

                </div>
                <div class="col overflow-auto p-0">
                <?php  require_once 'component/search.php';?>
                    <div class="mt-5 container-fluid">
                        <h4 class="fw-bold">Welcome Back!<span class="ms-1"><?php echo $userole?></span></h4>
                    </div>
                    
                    <div class="container overflow-hidden mt-5 icons">
                        <div class="row gy-5">
                            <div class="col-sm-4 position-relative">
                                <a class="card bg-success text-white p-5 text-center border-0" href="<?=$BASE;?>news-events/"><span class="fw-bold fs-1 value" count="<?= $newsEvents->countAllEvents(); ?>">0</span><br><p class="text-white fw-bold">News Events Content</p>
                                <div class=""><i class="bi bi-megaphone-fill"></i></div>
                            </a>
                            </div>

                            <div class="col-sm-4 position-relative">
                                <a class="card bg-info text-white p-5 text-center border-0" href="<?=$BASE;?>products/"><span class="fw-bold fs-1 value" count="<?= $products->countAllProducts(); ?>">0</span><br><p class="text-white fw-bold">Products</p></a>
                                <div class=""><i class="bi bi-cart-fill"></i></div>
                            </div>

                            <div class="col-sm-4 position-relative">
                                <a class="card bg-warning text-white p-5 text-center border-0" href="<?=$BASE;?>career/"><span class="fw-bold fs-1 value" count="<?= $careers->countAllCareers(); ?>">0</span><br><p class="text-white fw-bold">Careers Post</p></a>
                                <div class=""><i class="bi bi-handbag-fill"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</body>
<script> 
$(function (){
animate();
})
</script>
