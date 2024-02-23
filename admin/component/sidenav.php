<?php
date_default_timezone_set("Asia/Manila");
$title = "Admin - Dashboard"; 

  require_once 'component/import.php';
  require_once 'component/header.php';
  $user_account = $userr->getContentWhere($userid);
  ?>
<section class="side-nav">
    <div class="d-flex flex-column align-items-center align-items-sm-start pt-2">
        <img src ="<?=$BASE;?>assets/img/logo.png" class="w-50 d-block m-auto mt-3 mb-3">
        <div class="cover d-flex text-center mt-4 mb-4">
            <!-- <img src="<?=$BASE;?>assets/img/bgbg.jpg" class="position-relative p-5 w-25" style="background-size:cover;"> -->
            <div class="overlay"></div>
            <div class="user-nav">

                <img src="<?=$BASE;?>assets/img/products/userProfile/<?=$user_account['img'];?>" class="w-50 rounded-circle" value="/<?=$user_account['img'];?>">
            
                <h5 class="p-0 fw-bold d-block m-auto text-white ms-1"><?php echo $userole; ?></h5>
            </div>
        </div>

        <ul class="nav nav-pills flex-column mb-sm-auto align-items-center align-items-sm-start mt-5 w-100" id="menu">
            <li class="nav-item ">
                <a href="<?=$BASE;?>" class="nav-link align-middle px-0 <?= $page==1 ? "active" : ""?>">
                <i class="bi bi-house fs-5"></i> <span class="ms-2 d-none d-sm-inline">Dashboard</span>
                </a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a href="<?=$BASE;?>products/" class="nav-link align-middle px-0 <?= $page==2 ? "active" : ""?>">
                <i class="bi bi bi-tags fs-5"></i> <span class="ms-2 d-none d-sm-inline">Products</span>
                </a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a href="" class="nav-link align-middle px-0 <?= $page==3 ? "active" : ""?>">
                    <i class="bi bi-list fs-5"></i> <span class="ms-2 d-none d-sm-inline">Categories</span>
                </a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a href="<?=$BASE;?>career/" class="nav-link align-middle px-0 <?= $page==4 ? "active" : ""?>">
                <i class="bi bi-chat-left-text fs-5"></i><span class="ms-2 d-none d-sm-inline">Careers</span>
                </a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a href="<?=$BASE;?>news-events/" class="nav-link align-middle px-0 <?= $page==5 ? "active" : ""?>">
                    <i class="bi bi-megaphone fs-5"></i><span class="ms-2 d-none d-sm-inline">News and Events</span>
                </a>
            </li>

            <li class="nav-item waves-effect waves-light">
                <a href="<?=$BASE;?>featured/" class="nav-link align-middle px-0 <?= $page==6 ? "active" : ""?>">
                    <i class="bi bi-bookmark-star fs-5"></i><span class="ms-2 d-none d-sm-inline">Featured</span>
                </a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a href="<?=$BASE;?>brochures/" class="nav-link align-middle px-0 <?= $page==7 ? "active" : ""?>">
                <i class="bi bi-newspaper fs-5"></i><span class="ms-2 d-none d-sm-inline">Brochures</span>
                </a>
            </li>

        </ul>
        <div class="dropdown mt-5 ps-4">
            <a href="#" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-gear fs-5"></i>
                <span class="d-none d-sm-inline mx-1">Settings</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow border border-0" aria-labelledby="dropdownUser1">
                <li class="waves-effect waves-light">
                    <a class="dropdown-item font-primary" type="button"  data-bs-toggle="modal" data-bs-target="#userProfile" href="#"><i class="bi bi-person fs-5"></i> Profile</a>
                </li>
                <li class="waves-effect waves-light">
                    <a class="dropdown-item font-primary" href="<?= $BASE;?>logout" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right fs-5"></i> Sign out</a>
                </li>
                <li class="waves-effect waves-light">
                    <a class="dropdown-item font-primary" href="<?= $BASE;?>" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-person-add fs-5"></i> Add User</a>
                </li>
            </ul>
        </div>

  
    <div class="container">
        <div class="modal fade" id="userProfile" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action ="../controller/controller.users.php?mode=updateProfile" method="POST" id="profileForms" class="profileForm">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content bg-light w-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-gear fs-5"></i> User Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="d-none">
                            <input type="hidden" id="profile-id" name="profile-id" value="<?=$user_account['id'];?>" class="form-control" readonly>
                        </div>

                        <div class="modal-body row gx-5">
                            <div class="col-sm-4">
                                <div class="mb-4" id="">
                                    <label for="imgInput" class="col-form-label text-right">
                                    <div class="img-div">
                                        <img src="<?=$BASE;?>assets/img/products/userProfile/<?=$user_account['img'];?>" class="w-25 img-board mx-auto d-block" id="imgPreview" value="<?=$user_account['img'];?>" alt="Upload Picture"/>
                                        <input class="form-control d-none" id="imgInput" type="file" accept="image/*" name="imgInput" value=""/>
                                    </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-8">

                            <div class="row mb-4">
                                <label for="firstName" class="col-sm-3 col-form-label text-right">First Name:<span class="required">*</span> </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="fname" id="fname" value="<?=$user_account['First_Name'];?>" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="lastName" class="col-sm-3 col-form-label text-right">Last  Name:<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lname" id="lname" value="<?=$user_account['Last_Name'];?>" placeholder="">
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btn-saved" onclick='profile()'>Save changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<script type="text/javascript" src="<?= $BASE; ?>assets/js/includes/includes.users.js"></script>
<script>
    function profile(token) {
        $("#profileForms").trigger('submit');
    }
</script>

                    