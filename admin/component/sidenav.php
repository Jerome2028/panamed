<?php
date_default_timezone_set("Asia/Manila");
$title = "Admin - Dashboard"; 

  require_once 'component/import.php';
  ?>
<div class="d-flex flex-column align-items-center align-items-sm-start pt-2">
                    <img src ="<?=$BASE;?>assets/img/logo.png" class="w-50 mb-5">
                
                    <ul class="nav nav-pills flex-column mb-sm-auto align-items-center align-items-sm-start mt-5 w-100" id="menu">
                        <li class="nav-item ">
                            <a href="<?=$BASE;?>" class="nav-link align-middle px-0 ">
                                <i class="fa-solid fa-gauge"></i> <span class="ms-2 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0 ">
                                <i class="fa-solid fa-box"></i></i> <span class="ms-2 d-none d-sm-inline">Products</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$BASE;?>news-events" class="nav-link align-middle px-0 ">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-2 d-none d-sm-inline">Categories</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$BASE;?>career" class="nav-link align-middle px-0 ">
                                <i class="fs-4 bi-table"></i><span class="ms-2 d-none d-sm-inline">Careers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$BASE;?>newss-events" class="nav-link align-middle px-0 ">
                                <i class="fa-solid fa-bullhorn"></i> <span class="ms-2 d-none d-sm-inline">News and Events</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$BASE;?>featured" class="nav-link align-middle px-0 ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-2 d-none d-sm-inline">Featured</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0 ">
                                <i class="fs-4 bi-people"></i> <span class="ms-2 d-none d-sm-inline"></span>
                            </a>
                        </li>
                    </ul>
                        <hr>
                
                    </div>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?=$BASE; ?>assets/img/user.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1"><?php echo $user; ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
                    
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= $BASE;?>logout">Sign out</a></li>
                        </ul>
                    </div>