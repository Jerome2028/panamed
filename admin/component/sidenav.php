<?php
date_default_timezone_set("Asia/Manila");
$title = "Admin - Dashboard"; 

  require_once 'component/import.php';
  $user = $session->getSession("name");
  ?>


    <div class="d-flex flex-column align-items-center align-items-sm-start pt-2">
        <img src ="<?=$BASE;?>assets/img/logo.png" class="w-50 d-block m-auto mt-3 mb-3">
        <div class="cover d-flex text-center mt-4 mb-4">
            <div class="overlay"></div>
            <div class="user-nav">
            <img src="<?=$BASE; ?>assets/img/singacm.jpg" class="w-50 rounded-circle">
            <h5 class="p-0 fw-bold d-block m-auto text-white"><?php echo $user; ?></h5>
        </div>
        </div>

        <ul class="nav nav-pills flex-column mb-sm-auto align-items-center align-items-sm-start mt-5 w-100" id="menu">
            <li class="nav-item ">
                <a href="<?=$BASE;?>" class="nav-link align-middle px-0 <?= $page==1 ? "active" : ""?>">
                <i class="bi bi-house fs-5"></i> <span class="ms-2 d-none d-sm-inline">Dashboard</span>
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
                <a href="<?=$BASE;?>news-events/" class="nav-link align-middle px-0 <?= $page==5 ? "active" : ""?>">
                    <i class="bi bi-megaphone fs-5"></i><span class="ms-2 d-none d-sm-inline">News and Events</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=$BASE;?>featured/" class="nav-link align-middle px-0 <?= $page==6 ? "active" : ""?>">
                    <i class="bi bi-bookmark-star fs-5"></i><span class="ms-2 d-none d-sm-inline">Featured</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=$BASE;?>featured/" class="nav-link align-middle px-0 <?= $page==7 ? "active" : ""?>">
                <i class="bi bi-newspaper fs-5"></i><span class="ms-2 d-none d-sm-inline">Brochure</span>
                </a>
            </li>
            
    
        </ul>
        <div class="dropdown mt-5 ps-4">
            <a href="#" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- <img src="<?=$BASE; ?>assets/img/user.png" alt="hugenerd" width="30" height="30" class="rounded-circle"> -->
                <i class="bi bi-gear fs-5"></i>
                <span class="d-none d-sm-inline mx-1">Settings</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow border border-0" aria-labelledby="dropdownUser1">
        
                <li><a class="dropdown-item font-primary" type="button"  data-bs-toggle="modal" data-bs-target="#userProfile" href="#"><i class="bi bi-person fs-5"></i> Profile</a></li>
                <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
                <li>
                    <!-- <hr class="dropdown-divider"> -->
                </li>
                <li><a class="dropdown-item font-primary" href="<?= $BASE;?>logout" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right fs-5"></i> Sign out</a></li>
            </ul>
        </div>
    </div>
    <form>
    <div class="modal fade" id="userProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">  <i class="bi bi-gear fs-5"></i> User Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                    <label for="cname" class="form-label">Upload Profile:</label>
                        <div class="col-sm-9">
                            <div id="preview"><img src="<?=$BASE;?>assets/img/user.png" class="w-25 rounde mx-auto d-block"/></div>
                            <input class="form-control" id="uploadImage" type="file" accept="image/*" name="image" value =""/>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="info_title" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Title:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" id="title" value="" placeholder="Type Here...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-save">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript" src="<?= $BASE; ?>assets/js/includes/includes.users.js"></script>
                    