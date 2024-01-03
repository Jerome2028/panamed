<?php $title = "Admin - Dashboard"; ?>

<?php 
  require_once 'component/import.php';
  require_once 'component/header.php';
  require_once 'controller/controller.session.php'; 
?>
<body>
    <section class="dashboard">
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2  px-0 bg-secondary">
            <div class="d-flex flex-column align-items-center align-items-sm-start pt-2  min-vh-100">
            <img src ="<?=$BASE;?>assets/img/logo.png" class="w-50 mb-5">
           
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5 w-100" id="menu">
            <li class="nav-item ">
                    <a href="#" class="nav-link align-middle px-0 ">
                        <i class="fa-solid fa-gauge"></i> <span class="ms-2 d-none d-sm-inline">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0 ">
                        <i class="fa-solid fa-box"></i></i> <span class="ms-2 d-none d-sm-inline">Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0 ">
                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-2 d-none d-sm-inline">Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0 ">
                        <i class="fs-4 bi-table"></i><span class="ms-2 d-none d-sm-inline">Careers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0 ">
                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-2 d-none d-sm-inline">News</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0 ">
                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-2 d-none d-sm-inline">Featured</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0 ">
                        <i class="fs-4 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Users</span>
                    </a>
                </li>
            </ul>
                <hr>
          
            </div>
            <div class="dropdown pb-4">
                <a href="#" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?=$BASE; ?>assets/img/user.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1">test</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
            

        </div>
    </div>
</div>
</section>
</body>