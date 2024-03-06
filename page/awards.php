<?php
 $title = "Awards | Panamed Philippines Inc."; 
 $bannerTitle = "Awards";
 $page = 7; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';
 ?>
  <!-- <body>   -->
      <main>
      <?php (require_once 'component/navbar.php'); ?>
      <section class="awards">
        <div class="container">
            <div class="row">
              <div class ="col-md-6" data-aos="fade-right" date-aos-delay="200">
              <a href="<?=$BASE;?>assets/img/iso_cert/iso_cert.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/iso_cert.jpg" class="w-75 p-3"></a>
              </div>

              <div class="col-md-6" data-aos="fade-left" date-aos-delay="200">
              <div class=" p-3">
                <h3 class= "font-blue">Awards</h3>
                <p>Our awards and certification only shows that the company is sincere with its aim of providing a good product of choice in the medical industry. We will continue to work hard to be able for us to sustain the needs of the people for better healthcare and quality innovative services that we can give.</p>
              </div>
              <div class="p-3">
                <h3 class= "font-blue">ISO 9001:2015</h3>
                <p>Panamed Philippines Inc. is an ISO 9001:2015 certified company, and has been consistent in ensuring that clients receive high quality products and services. The requirements set by the International Organization for Standardization (ISO) include having the ability to consistently provide products and services that meet customer and applicable statutory and regulatory requirements, and enhance customer satisfaction through the effective application of the system. This certification is proof that the company has passed these standards set by the ISO 9001:2015.</p>
              </div>
              <div class="row">
              <div class="col-lg-4 mb-4 mb-lg-0 p-1">
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate6.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate6.jpg" class="w-100 img-fluid"></a>
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate4.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate4.jpg" class="w-100 img-fluid"></a>
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate7.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate7.jpg" class="w-100 img-fluid"></a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 p-1">
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate8.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate8.jpg" class="w-100 img-fluid"></a>
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate3.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate3.jpg" class="w-100 img-fluid"></a>
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate9.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate9.jpg" class="w-100 img-fluid"></a>
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate_1.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate_1.jpg" class="w-100 img-fluid"></a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 p-1">
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate2.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate2.jpg" class="w-100 img-fluid"></a>
                <a href="<?=$BASE;?>assets/img/iso_cert/certificate5.jpg" class="awards-preview" data-width="600px"><img src="<?=$BASE;?>assets/img/iso_cert/certificate5.jpg" class="w-100 img-fluid"></a>
            </div>
              </div>
            </div>
          </div>
        </div>
      </section>
            <!-- ======= Trusted by Healthcare ======= -->
      <?php require_once 'page/trusted.php'; ?>
      <?php include_once 'component/footer.php';?>
    </main>
  <!-- </body> -->