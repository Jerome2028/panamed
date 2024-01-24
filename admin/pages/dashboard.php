<?php
date_default_timezone_set("Asia/Manila");
$title = "Admin - Dashboard";
$page =1;

  require_once 'component/import.php';
  require_once 'component/header.php';
  require_once 'controller/controller.session.php'; 
    $user = $session->getSession("name");
?>
<body>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row flex-nowrap h-100">
                <div class="col-auto col-md-3 col-xl-2  px-0 bg-light  d-inline-block">


               
                <?php require_once 'component/sidenav.php';?>
            
            

                </div>
                <div class="col py-3 overflow-auto">
                    

                </div>
            </div>
        </div>
</section>
</body>