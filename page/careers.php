<?php
 $title = "Careers | Panamed Philippines Inc."; 
 $bannerTitle = "Careers";
 $page = 8; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';
 $careersContent = $careers->getContent();
 ?>
  <!-- <body>   -->
      <main>
      <?php (require_once 'component/navbar.php'); ?>
      <section class="career">
        <div class ="container">
          <div class = "row justify-content-center">
            <div class="col-md-9">
            <p>Make your life the life you always deserve, surround yourself with people who are passionate in life and comitted to success! Our Door is always open for you. Come and build your career with us.</p>
            <p class="panamed-color">Recent Jobs</p>

            <?php
                if(isset($_GET["news"])) {
                $id = $_GET["news"];
                $careersWhere = $careers->getContentWhere($id);
              ?>
                <div class="card border-0 mb-5 p-5">

                    <div class="py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h5 class="m-0 font-weight-bold panamed-color"><?= $newsEventsWhere['title'] ?></h5>
                        </div>
                        <span class="badge bg-lighter mt-2"><?= $newsEventsWhere['date_added'] ?></span>
                    </div>
                
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-9">
                                <p name="news-content" id="news-content" class=""  rows="9" required><?= $newsEventsWhere['content'] ?></p>
                            </div>
                        </div>
                        <a class="btn btn-get-started waves-effect waves-light text-white" href="<?=$BASE;?>news-events/"><i class="fa-solid fa-arrow-right-to-bracket me-1"></i> Back to News Event</a>
                    </div>
                </div>
                <?php
                } else {
                ?>
          <div class="accordion" id="accounting-assistant">
      <?php 
      if(!empty($careersContent)) {
      foreach($careersContent as $key => $v) {
        $id = $v["id"];
        $titlee = $v["title"];
        $content = $v["content"];
        $status = $v["status"];
        $date = $v["date_update"];

        $careersContent = "";
        if($key == 0) {
          $careersContent .= '

          <div class="accordion-item">
            <h2 class="accordion-header" id="heading'. $id .'">
              <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#careers'. $id .'" aria-expanded="true" aria-controls="collapseOne">
              <i class="fa-solid fa-briefcase me-2"></i>'. $titlee .'
              </button>
            </h2>
            <div id="careers'. $id .'" class="accordion-collapse collapse show" aria-labelledby="heading'.$id.'" data-bs-parent="#accounting-assistant">
              <div class="accordion-body">
              <p>
              '. $content .'
              Kindly send your updated resume in PDF Format.</p>
              <p class="mt-4"><a href="mailto:info@panamed.com.ph" class="btn-get-started">Apply Now!</a></p>
              </div>
            </div>
          </div>
          ';
        } 
        else {
          $careersContent .= '
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading'.$id.'">
              <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#careers'.$id.'" aria-expanded="true" aria-controls="collapseOne">
              <i class="fa-solid fa-briefcase me-2 "></i>'. $titlee .'
              </button>
            </h2>
            <div id="careers'.$id.'" class="accordion-collapse collapse" aria-labelledby="heading'.$id.'" data-bs-parent="#accounting-assistant">
              <div class="accordion-body">
              <p>
              '. $content .'
              Kindly send your updated resume in PDF Format.</p>
              <p class="mt-4"><a href="mailto:info@panamed.com.ph" class="btn-get-started">Apply Now!</a></p>
              </div>
            </div>
          </div>
          ';
        }
    

        echo $careersContent;
         
    }
  }
    ?>
      
      </div>
      
      <?php 
      
    }
    ?>
            <p class="mt-3 fw-bold text-center">Please send us your resume to <a class="panamed-color" href="mailto:info@panamed.com.ph">info@panamed.com.ph</a> and to be included in our reference database for future opportunities.</p>
            </div>
          </div>
        </div>    
      </section>
      <section class="section-bg">
        <p class="text-center title">Want More? <a class="panamed-color" href="https://panamed.com.ph/shop/">Shop with us!</a> and get the products you want!</p>
        <div class="d-flex justify-content-center mt-4">
          <a href="https://panamed.com.ph/shop/" class="btn-get-started animate__animated animate__fadeInUp ">Shop Now</a>
        </div>
      </section>

            <!-- ======= Trusted by Healthcare ======= -->
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
  <!-- </body> -->