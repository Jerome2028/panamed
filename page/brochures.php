<?php
 $title = "Brochures | Panamed Philippines Inc."; 
 $bannerTitle = "Brochures";
 $page = 5; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';
 ?>
  <body>  
  <main>
  <?php (require_once 'component/navbar.php'); ?>
  <section class="brochures section-bg">
    <div class ="container">
      <div class="row mb-5">
        <div class="col-sm-4 d-flex align-items-stretch">
          <div class="card shadow p-3" style="width: 25rem;">
          <img src ="<?=$BASE;?>/assets/img/brochures/anchor.jpg" class="img-fluid mt-3">
            <div class="card-body">
              <h5 class="panamed-color">Anchor Needle Brochure</h5>
              <p class="card-text">Download or our anchor needle brochure.</p>
              <a href="https://panamed.com.ph/assets/Anchor%20Needle%20Brochure%20FA%202019%20Actual%20Size%20Print.pdf" class="btn-get-started animate__animated animate__fadeInUp">Download</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 d-flex align-items-stretch">
          <div class="card shadow p-3" style="width: 25rem;">
            <img src ="<?=$BASE;?>/assets/img/brochures/panamed-catalog.jpg" class="img-fluid mt-3">
            <div class="card-body">
              <h5 class="panamed-color">Panamed Product Catalog</h5>
              <p class="card-text">Download the panamed product catalog</p>
              <a href="https://panamed.com.ph/assets/ppi-product-catalog.pdf" class="btn-get-started animate__animated animate__fadeInUp">Download</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 d-flex align-items-stretch">
          <div class="card shadow p-3" style="width: 25rem;">
          <img src ="<?=$BASE;?>/assets/img/brochures/anesthesia1.jpg" class="img-fluid mt-3">
            <div class="card-body">
              <h5 class="panamed-color">Anesthesia</h5>
              <p class="card-text">Download or our anchor needle brochure.</p>
              <a href="https://panamed.com.ph/assets/PPI%20Brochure%20Sedasenz%20Anesthesia%20Line.pdf" class="btn-get-started animate__animated animate__fadeInUp">Download</a><span class="ms-1"></span>
              <a href="https://cdn.flipsnack.com/widget/v2/widget.html?hash=uiy70eqjiq" class="btn-get-started animate__animated animate__fadeInUp">View</a>
            </div>
          </div>
        </div>
      </div>
      <p class="text-center title">Want More? <a class="panamed-color" href="https://panamed.com.ph/shop/">Shop with us!</a> and get the products you want!</p>
      <div class="d-flex justify-content-center mt-4">
        <a href="https://panamed.com.ph/shop/" class="btn-get-started animate__animated animate__fadeInUp ">Shop Now</a>
      </div>
    </div>    
  </section>
        <!-- ======= Trusted by Healthcare ======= -->
        <section class="trusted" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
    <div class="container">
      <p class ="text-center title">Trusted by healthcare professionals since 1995</p>

      <div class="row justify-content-center">

        <div class="col-lg-2 col-md-4 col-2 d-flex align-items-center justify-content-center">
          <img src="assets/img/hospitals/east.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-2 d-flex align-items-center justify-content-center">
          <img src="assets/img/hospitals/heart_center.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-2 d-flex align-items-center justify-content-center">
          <img src="assets/img/hospitals/kidney.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-2 d-flex align-items-center justify-content-center">
          <img src="assets/img/hospitals/lungs.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-2 d-flex align-items-center justify-content-center">
          <img src="assets/img/hospitals/pgh.png" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </section>
      <?php include_once 'component/footer.php';?>
    </main>
  </body>