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
  <section class="news-events section-bg" >
    <div class="container">
        <?php if(isset($_GET["conventions"])) { ?>
          <div class="card p-5 m-3">
            <h5 class="panamed-color">This year, Panamed Philippines will be joining the following conventions:</h5>
              <div class="d-flex mb-3 mt-2">
                <span class="badge bg-lighter">News & Event</span>
                <span class="badge bg-lighter ms-2">2023-02-09</span>
              </div>
            <p>-Philippine Society of Gastroenterology<br> -Philippine Society of Anesthesiologists<br> -Philippine College of Surgeon<br> -Philippine Hospital Infection Control Society<br> -Philippine Hospital Association<br> -Operating Room Nurses Association of The Philippines<br> -Philippine Association of Central Sterile Supply Management<br> -Association of Respiratory Care Practitioners</p>
            <a href="http://localhost/panamed/news-events/" class="btn-get-started w-25">Back to News and Events</a>
          </div>

          
        <?php } if (isset($_GET["gastroenterology"])) { ?>
            <div class="card p-5 m-3">
            <h5 class="panamed-color">Philippine Society of Gastroenterology</h5>
              <div class="d-flex mb-3 mt-2">
                <span class="badge bg-lighter">News & Event</span>
                <span class="badge bg-lighter ms-2">2023-03-08</span>
              </div>
              <p>We are please to announce that we are joining this year’s Joint Annual Convention of the Philippine Society of Gastroenterology and Philippine Society of Digestive Endoscopy, with the theme “Empowering Filipinos in the Care of Digestive Health”, which will be held on March 8-11, 2023 at the Conrad Hotel Manila. Finally, after almost 3 years of only virtual conferences, we are now back to live convention and we are excited to meet and greet our esteemed Gastroenterologists.</p>
            <a href="http://localhost/panamed/news-events/" class="btn-get-started w-25">Back to News and Events</a>
          </div>
        <?php } if (isset($_GET["operating-Room"])) { ?>
            <div class="card p-5 m-3">
            <h5 class="panamed-color">Operating Room Nurses Association of the Philippines, Annual Convention</h5>
              <div class="d-flex mb-3 mt-2">
                <span class="badge bg-lighter">News & Event</span>
                <span class="badge bg-lighter ms-2">2023-06-30</span>
              </div>
               <img src="<?=$BASE;?>assets/img/ornap.jpg" class="img-responsive w-50 mb-3">
              <p>Operating Room Nurses Association of the Philippines, Annual Convention</p>
            <a href="http://localhost/panamed/news-events/" class="btn-get-started w-25">Back to News and Events</a>
          </div>
        <?php } ?>
    </div>
  </section>