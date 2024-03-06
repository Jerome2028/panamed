<?php
 $title = "News and Events | Panamed Philippines Inc."; 
 $bannerTitle = "News and Events";
 $page = 3; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';

 $newsEventsContent = $newsEvents->getContent();
 ?>
 <style>

    .news-events input &:focus {
  border-bottom: 3px solid #68A4C4!important;
}
 </style>
<!-- <body>   -->
  <main>

  <section class="news-events section-bg">
    <div class="container">

      <?php
        if(isset($_GET["news"])) {
        $id = $_GET["news"];
        $newsEventsWhere = $newsEvents->getContentWhere($id);
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
      <div class="row mb-5 d-flex align-items-stretch">
      <?php 
      if(!empty($newsEventsContent)) {
      foreach($newsEventsContent as $v) {
        $id = $v["id"];
        $titlee = $v["title"];
        $content = $v["content"];
        $status = $v["status"];
        $date = $v["date_update"];

        if($status == 1) {
          ?>
      <div class="col-md-6 d-flex align-items-stretch">
          <div class="card p-5 m-3 w-100">
          <div class="card-body d-flex flex-column">
            <h5 class="panamed-color"><?=$titlee;?></h5>
            <div class="mb-3 mt-2">
                <span class="badge bg-lighter">News & Event</span>
                <span class="badge bg-lighter ms-2"><?=$date;?></span>
              </div>
              <p><?=$content;?></p>
              <div class="position-absolute top-100 start-50 translate-middle w-100 text-center">
              <a href="<?=$BASE;?>news-events/?news=<?= $id ?>/" class="btn-get-started btn w-25 mt-auto waves-effect waves-light">Read More &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          </div>
            </div>
        </div>

        <?php 
      }
    }
  }
    ?>
      
      </div>
      
      <?php 
      
    }
    ?>
      <p class="text-center title">Want More? <a class="panamed-color" href="https://panamed.com.ph/shop/">Shop with us!</a> and get the products you want!</p>
        <div class="d-flex justify-content-center mt-4">
          <a href="https://panamed.com.ph/shop/" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">Shop Now</a>
        </div>
    </div>
  </section>

  <!-- ======= Trusted by Healthcare ======= -->
  <?php require_once 'page/trusted.php'; ?>
</main>
<?php include_once 'component/footer.php';?>
<!-- </body> -->
