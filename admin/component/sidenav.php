<?php
date_default_timezone_set("Asia/Manila");
$title = "Admin - Dashboard"; 

  require_once 'component/import.php';
  $user = $session->getSession("name");
  ?>


    <div class="d-flex flex-column align-items-center align-items-sm-start pt-2">
        <img src ="<?=$BASE;?>assets/img/logo.png" class="w-50 d-block m-auto mt-3 mb-3">
        <div class="bg-secondary p-5 w-100 d-flex">
            <img src="<?=$BASE; ?>assets/img/user.png" class="w-25 rounded-circle"><p class="p-0 fw-bold d-block my-3 mx-3"><?php echo $user; ?></p>
        </div>
        <ul class="nav nav-pills flex-column mb-sm-auto align-items-center align-items-sm-start mt-5 w-100" id="menu">
            <li class="nav-item ">
                <a href="<?=$BASE;?>" class="nav-link align-middle px-0 <?= $page==1 ? "active" : ""?>">
                <i class="bi bi-speedometer2 fs-5"></i> <span class="ms-2 d-none d-sm-inline">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=$BASE;?>products/" class="nav-link align-middle px-0 <?= $page==2 ? "active" : ""?>">
                <i class="bi bi bi-tags fs-5"></i> <span class="ms-2 d-none d-sm-inline">Products</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link align-middle px-0 <?= $page==3 ? "active" : ""?>">
                    <i class="bi bi-list fs-5"></i> <span class="ms-2 d-none d-sm-inline">Categories</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=$BASE;?>career/" class="nav-link align-middle px-0 <?= $page==4 ? "active" : ""?>">
                <i class="bi bi-chat-left-text fs-5"></i><span class="ms-2 d-none d-sm-inline">Careers</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=$BASE;?>news-events" class="nav-link align-middle px-0 <?= $page==5 ? "active" : ""?>">
                    <i class="bi bi-megaphone fs-5"></i><span class="ms-2 d-none d-sm-inline">News and Events</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=$BASE;?>featured/" class="nav-link align-middle px-0 ">
                    <i class="bi bi-bookmark-star fs-5"></i> <span class="ms-2 d-none d-sm-inline">Featured</span>
                </a>
            </li>
    
        </ul>
        <div class="dropdown pt-5 mt-5 ps-4">
            <a href="#" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- <img src="<?=$BASE; ?>assets/img/user.png" alt="hugenerd" width="30" height="30" class="rounded-circle"> -->
                <i class="bi bi-gear fs-5"></i>
                <span class="d-none d-sm-inline mx-1">Settings</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow border border-0" aria-labelledby="dropdownUser1">
        
                <li><a class="dropdown-item" href="#"><i class="bi bi-person fs-5"></i> Profile</a></li>
                <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
                <li>
                    <!-- <hr class="dropdown-divider"> -->
                </li>
                <li><a class="dropdown-item" href="<?= $BASE;?>logout"><i class="bi bi-box-arrow-right fs-5"></i> Sign out</a></li>
            </ul>
        </div>
    </div>

                    