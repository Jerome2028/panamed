
<!-- Modal -->
<div class="container-fluid" id="topsearched">
<nav class="bg-light shadow-sm fixed-top">
  <div class="row p-4 ">
    <div class="p-2 col-xl-4 col-lg-4 col-md-4">
    <img src ="<?=$BASE;?>assets/img/logo.png" class="w-25 mx-auto d-block">
    </div>
    <div class="p-2 col-xl-4 col-lg-4 col-md-4">
      <form action="../controller/controller.login.php?mode=topsearch" method="POST" id="productForm">
      <div class="input-group">
        <input type="text" class="form-control form-input border-1 rounded-0" name="input" id="input" placeholder="Search Products...">
        <button class="btn btn-primary p-3 rounded-0" type="submit" autocomplete="off" id="productFind"><i class="fas fa-search"></i></button>
      </div>
      </form>
    </div>
    <div class="p-2 col-xl-4 col-lg-4 col-md-4">
      <div class="text-center">
      <i class="bi bi-list mobile-nav-toggle" data-bs-toggle="offcanvas" data-bs-target="#navbarr"></i>
      <a class="fw-bold" data-bs-toggle="modal" data-bs-target="#logoutModal" href="<?=$BASE;?>logout">Logout<i class="bi bi-box-arrow-right fs-5 ms-2"></i></a>
      </div>
    </div>
  </div>

</nav>
</div>
<div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-box-arrow-right fs-5"></i> Leave Dashboard?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><i class="fa-solid fa-triangle-exclamation fa-2xl me-2" style="color: #ec4d09;"></i>Do you really wish to leave and log out? All the unsaved <span class="ms-4">&nbsp;&nbsp;changes will be lost.</span></p>
      </div>
      <div class="modal-footer">
        <a type="button" href="<?= $BASE;?>logout/" class="btn btn-success text-white" >Yes, Logout</a>
        <a type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">No, Cancel</a>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<!-- <div class="nav-spacer"></div> -->
