<?php

?>
<div class="container-fluid bg-light p-4 m-0 shadow-sm">
<div class="container">
  <div class="row d-flex justify-content-between align-items-center">
    <div class="col-md-3"></div>
<div class="col-md-5">
  <div class="input-group">
    <input type="text" class=" ms-5 form-control form-input border-1 rounded-0" placeholder="Search Products...">
    <div class="input-group-append"><button class="btn btn-primary p-3 rounded-0"><i class="fas fa-search"></i></button></div>
  </div>
</div>
<div class="col-md-3 text-end">
<a class="" data-bs-toggle="modal" data-bs-target="#logoutModal" href="<?= $BASE;?>logout"><span class="mt-1"> Logout</span><i class="bi bi-box-arrow-right fs-5 ms-2"></i></a>
</div>
</div>

</div>

</div>
<!-- Modal -->
<div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
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