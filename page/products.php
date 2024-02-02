<?php
 $title = "Products | Panamed Philippines Inc."; 
 $bannerTitle = "Products";
 $page = 4; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';
 $productsContent = $productsContent->getContent();
 ?>
      <body>  
          <main>
          <?php (require_once 'component/navbar.php'); ?>
          <section class="manuals">
            <div class ="container">
            <div class = "d-flex justify-content-center">
                <input type="text" class="form-control w-50 border-3 mb-5" id ="live_search" autocomplete="off" placeholder="Search Products here..." >
            </div>
            <div id ="searchresult"></div>
            <div class="row mb-5">
        
        <?php foreach($productsContent as $v) {

          $titlee = $v["ppi_product_name"];
          $image = $v["ppi_product_image"];
          // $id = $v["id"];
          // $titlee = $v["title"];
          // $content = $v["content"];
          $status = $v["ppi_product_status"];
          // $date = $v["date_update"];
  
          if($status == 1) {
            ?>
             <div class="col-sm-3 d-flex align-items-stretch">
                <div class="p-3 shadow mb-4 border-0 manuals-card" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">

                    <div class="py-3">
                    <img src ="admin/assets/products/<?= $image ?>" class="w-100 mb-3"><br>
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 fw-bold">
                                <?= $titlee ?>
                            </h6>
                        </div>
                    </div>
                    <button class="btn btn-get-started w-100">Buy Now</button>
                    <div class="card-body">

                        <div class="container-fluid">
                            <!-- <div class="skeleton content_load"><?= $content ?></div> -->
                        </div>
                    </div>
                </div>
            </div>
  
          <?php 
        }
      }
      ?>
        
        </div>
            </div>    
      </section>
          <?php include_once 'component/footer.php';?>
        </main>
      </body>
      <script type ="text/javascript">
$(document).ready(function(){

$("#live_search").keyup(function(){ 

var input = $(this).val();
if (input != ""){
    $.ajax({
        url:"admin/controller/controller.login.php?mode=search",
        method:"POST",
        data:{input:input},

        success:function(data){
            $("#searchresult").html(data);
            $("#searchresult").css("display","block");
            $(".manuals-card").css("display", "none");
        }
    });
}

 else {
    $("#searchresult").css("display", "none");
    $(".manuals-card").css("display", "block");
 }
});
});
</script>