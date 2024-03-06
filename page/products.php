<?php
 $title = "Products | Panamed Philippines Inc."; 
 $bannerTitle = "Products";
 $page = 4; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';
 $productsContent = $products->getContent();
 ?>
<!-- <body>   -->
<main>
<section class="products">
    <div class ="container">

    <?php
    if(isset($_GET["product"])) {
    $id = $_GET["product"];
    $productsContentWhere = $products->getContentWhere($id);
    ?>
    <div class="card border-0 mb-5 p-5">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <img src ="../admin/assets/img/products/<?=$productsContentWhere['ppi_product_image'] ?>" class="w-100">
                </div>

                <div class="col-sm-6">
                    <div class="py-3 mb-5">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h5 class="m-0 font-weight-bold panamed-color"><?= $productsContentWhere['ppi_product_name'] ?></h5>
                        </div>
                    </div>
                    <p name="news-content" id="news-content"><?php echo htmlspecialchars_decode ($productsContentWhere['ppi_product_description']);?></p>
                    <a class="btn btn-get-started waves-effect waves-light text-white" href="<?=$BASE;?>products/"><i class="fa-solid fa-arrow-right-to-bracket me-1"></i> Back to product List</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    } else {
    ?>
    <div class="d-flex justify-content-center">
        <input type="text" class="form-control w-50 border-3 mb-5" id ="live_search" autocomplete="off" placeholder="Search Products here..." >
    </div>
    <div id ="searchresult"></div>
    <div class="row mb-5">

        <?php
        if(!empty($productsContent)) {
        foreach($productsContent as $v) {
        $id = $v["ppi_product_id"];
        $titlee = $v["ppi_product_name"];
        $image = $v["ppi_product_image"];
        $status = $v["ppi_product_status"];
        // $date = $v["date_update"];

            if($status == 1) {
                ?>
                <div class="col-sm-3 " data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
                    <div class="p-3 shadow mb-4 border-0 manuals-card">

                        <div class="py-3">
                        <img src ="../admin/assets/img/products/<?=$image?>" class="w-100 mb-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <h6 class="m-0 fw-bold">
                                    <?=$titlee;?>
                                </h6>
                            </div>
                        </div>
                        <a class="btn btn-get-started w-100" href="?product=<?=$id;?>">View Product</a>
                        <div class="card-body">
                            <div class="container-fluid"></div>
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
</div>    
</section>
<?php include_once 'component/footer.php';?>
</main>
<!-- </body> -->
<script type ="text/javascript">
$(document).ready(function(){

$("#live_search").keyup(function(){ 

var input = $(this).val();
if (input != ""){
    $.ajax({
        url:"../admin/controller/controller.login.php?mode=search",
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