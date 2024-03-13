<?php
 $title = "Brochures | Panamed Philippines Inc."; 
 $bannerTitle = "Brochures";
 $page = 5; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';

 $brochuresContent = $brochures->getContent();
 ?>

  <main>
  <section class="brochures section-bg">
    <div class ="container">
      <div class="row d-flex align-items-stretch">
      <?php 
        if(!empty($brochuresContent)) {
        foreach($brochuresContent as $v) {
          $id = $v["id"];
          $titlee = $v["title"];
          $img = $v["img"];
          $file = $v["file"];
          $status = $v["status"];

          if($status == 1) {
            ?>
          <div class="col-sm-4 mb-4">
            <div class="card shadow p-3">
            <span class="font-monospace fw-bold fs-5 text-danger"></i>PDF</span>
            <img src ="<?=$BASE;?>assets/img/brochures/thumbnail/<?=$img;?>" class="w-100 mt-2">
              <div class="card-body align-items-stretch">
                <h5 class="panamed-color"><?=$titlee;?></h5>
                <p class="card-text">Download or our anchor needle brochure.</p>
                <a href="<?=$BASE;?>assets/img/brochures/<?=$file;?>" class="btn-get-started waves-effect waves-light">Download</a>
              </div>
            </div>
          </div>
          <?php 
                }
              }
            }
          ?>
        </div>

        <!-- <div class="col-sm-4 d-flex align-items-stretch">
          <div class="card shadow p-3" style="width: auto;">
          <span class="font-monospace fw-bold fs-5"></i>PDF</span>
            <img src ="<?=$BASE;?>/assets/img/brochures/panamed-catalog.jpg" class="w-50 mt-2">
            <div class="card-body">
              <h5 class="panamed-color">Panamed Product Catalog</h5>
              <p class="card-text">Download the panamed product catalog</p>
              <a href="https://panamed.com.ph/assets/ppi-product-catalog.pdf" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">Download</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 d-flex align-items-stretch">
          <div class="card shadow p-3" style="width: 25rem;">
          <span class="font-monospace fw-bold fs-5"></i>PDF</span>
          <img src ="<?=$BASE;?>/assets/img/brochures/anesthesia1.jpg" class="img-fluid mt-2">
            <div class="card-body">
              <h5 class="panamed-color">Anesthesia</h5>
              <p class="card-text">Download or our anchor needle brochure.</p>
              <a href="https://panamed.com.ph/assets/PPI%20Brochure%20Sedasenz%20Anesthesia%20Line.pdf" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">Download</a><span class="ms-1"></span>
              <a href="https://cdn.flipsnack.com/widget/v2/widget.html?hash=uiy70eqjiq" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">View</a>
            </div>
          </div>
        </div> -->
      <p class="text-center title">Want More? <a class="panamed-color" href="https://panamed.com.ph/shop/">Shop with us!</a> and get the products you want!</p>
      <div class="d-flex justify-content-center mt-4">
        <a href="https://panamed.com.ph/shop/" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">Shop Now</a>
      </div>
    </div>    
  </section>
  <!-- ======= Trusted by Healthcare ======= -->
  <?php require_once 'page/trusted.php'; ?>
  <?php include_once 'component/footer.php';?>
  </main>