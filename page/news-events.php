<?php
 $title = "News and Events | Panamed Philippines Inc."; 
 $bannerTitle = "News and Events";
 $page = 3; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';

 ?>
     
<body>  
  <main>
  <?php (require_once 'component/navbar.php'); ?>
  <section class="news-events section-bg">
    <div class="container">
    <?php require_once 'page/news-card.php';?>
      <div class="row mb-5" style="display:<?= (isset($_GET["conventions"])) || (isset($_GET["gastroenterology"])) || (isset($_GET["operating-Room"]))  ? "none!important" : ""?>">
        <div class="col-md-6 d-flex align-items-stretch" >
          <div class="card p-5 m-3">
            <h5 class="panamed-color">This year, Panamed Philippines will be joining the following conventions:</h5>
            <div class="d-flex mb-3 mt-2">
                <span class="badge bg-lighter">News & Event</span>
                <span class="badge bg-lighter ms-2">2023-02-09</span>
              </div>
              <p>-Philippine Society of Gastroenterology -Philippine Society of Anesthesiologists -Philippine College of Surgeon -Philippine Hospital Infection Control Society -Philippine Hospital Association -Operating Room Nurses Association of The Philippines -Philippine Association of Central Sterile Supply Management -Association of Respiratory Care Practitioners</p>
              <a href="http://localhost/panamed/news-events/?conventions" class="btn-get-started w-25">Read More &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
        <div class="card p-5 m-3">
          <h5 class="panamed-color">Philippine Society of Gastroenterology</h5>
          <div class="d-flex mb-3 mt-2">
                <span class="badge bg-lighter">News & Event</span>
                <span class="badge bg-lighter ms-2">2023-03-08</span>
              </div>
              <p>We are please to announce that we are joining this year’s Joint Annual Convention of the Philippine Society of Gastroenterology and Philippine Society of Digestive Endoscopy, with the theme “Empowering Filipinos in the Care of Digestive Health”, which will be held on March 8-11, 2023 at the Conrad Hotel Manila. Finally, after almost 3 years of only virtual conferences, we are now back to live convention and we are excited to meet and greet our esteemed Gastroenterologists.</p>
              <a href="http://localhost/panamed/news-events/?gastroenterology" class="btn-get-started w-25">Read More &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card p-5 m-3">
            <h5 class="panamed-color">Operating Room Nurses Association of the Philippines, Annual Convention</h5>
              <div class="d-flex mb-3 mt-2">
                <span class="badge bg-lighter">News & Event</span>
                <span class="badge bg-lighter ms-2">2023-06-30</span>
              </div>
              <p>Operating Room Nurses Association of the Philippines, Annual Convention</p>
              <a href="http://localhost/panamed/news-events/?operating-Room" class="btn-get-started w-25" name="<?$eventTwo;?>">Read More &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <p class="text-center title">Want More? <a class="panamed-color" href="https://panamed.com.ph/shop/">Shop with us!</a> and get the products you want!</p>
        <div class="d-flex justify-content-center mt-4">
          <a href="https://panamed.com.ph/shop/" class="btn-get-started animate__animated animate__fadeInUp ">Shop Now</a>
        </div>
    </div>
  </section>
  
  <section class="trusted d-block" data-aos="fade-up" data-aos-delay="100" data-aos-delay="fade-up">
    <div class="container">
    <p class ="text-center title">Trusted by healthcare professionals since 1995</p>

    <div class="row justify-content-center">

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/hospitals/east.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/hospitals/heart_center.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/hospitals/kidney.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/hospitals/lungs.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/hospitals/pgh.png" class="img-fluid" alt="">
      </div>
    </div>
    </div>
  </section>
  <?php include_once 'component/footer.php';?>
</main>
</body>