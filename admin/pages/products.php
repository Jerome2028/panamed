<?php
$title =  "Admin - Products";
require_once 'component/import.php';
require_once 'component/header.php';
$page =2;
$productsContent = $products->getContent();
?>
<style>
     /* .preview{
   width: 1000px;
   height: 1000px;
   border: 1px solid black;
   margin: 0 auto;
   background: white;
  }
  .image-upload>input {
  display: none;
}

    .preview img{
    display: none;
    } */
</style>
<body>
<section class="dashboard">
    <div class="container-fluid">
        <div class="row flex-nowrap h-100">
            <div class="col-auto col-md-3 col-xl-2 px-0 bg-light  d-inline-block">
        
                <?php require_once 'component/sidenav.php';?>
        
            </div>

            <div class="col p-0 overflow-auto">
            <?php  require_once 'component/search.php';?>
                <div class="container-fluid mt-5">
                <?php
                    if(isset($_GET["update"])) {
                    $id = $_GET["update"];
                    $productsWhere = $products->getContentWhere($id);
                ?>
                <div class="card border-0 mb-5">
 
                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="m-0 font-weight-bold font-primary"><i class="fas fa-sm fa-edit"></i>
                                <span class="badge rounded-pill bg-secondary font-primary"><?= $productsWhere['ppi_product_name'] ?></span>
                            </h3>
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="<?=$BASE?>products/" class="btn btn-sm btn-secondary btn-icon-split">
                                    <span class="icon text-white"><i class="fas fa-arrow-left"></i> </span>
                                    <span class="text text-white">Back</span>
                                </a>
                                <button id="btn-save" class="btn btn-sm btn-primary btn-icon-split m-1">
                                    <span class="icon"><i class="fas fa-save"></i></span>
                                    <span class="text">Save</span>
                                </button>
                            </div>              
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-none">
                            <input type="hidden" name="id" id="id" value="<?= $productsWhere["ppi_product_id"] ?>" class="form-control" readonly>
                        </div>

                        <div class="row mb-4">
                            <label for="info_title" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Product Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" id="title" value="<?= $productsWhere['ppi_product_name'] ?>" placeholder="Type Here...">
                            </div>
                        </div>

                        
                        <div class="row mb-4">
                            <label for="img" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Product Image:</label>
                            <div class="col-sm-9">
                                <input type="file" id="img" name="img" class="form-control p-1 mb-5" value="<?= $productsWhere["ppi_product_image"] ?>" placeholder ='<?php echo $productsWhere["ppi_product_image"] ?>' onchange='Test.UpdatePreview(this)'>
                            <div id = "preview">
                                    <img src="../assets/products/<?= $productsWhere["ppi_product_image"] ?>" class="w-50 img-thumbnail">
                                </div>
                            </div>
                            
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label text-right"><span class="required">*</span>Product Description:</label>
                            <div class="col-sm-9">
                                <textarea name="products-content" id="products-content" class="form-control"  rows="9" required><?= $productsWhere['ppi_product_description'] ?></textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label text-right">Status:</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="status" name="status">
                                <option <?= ($productsWhere['ppi_product_status'] == 1 ? "selected" : "") ?> value="1">Enabled</option>
                                        <option  <?= ($productsWhere['ppi_product_status'] == 0 ? "selected" : "") ?> value="0">Disabled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                
                <?php
                } else {
                ?>
            <div class ="container-fluid card bg-light shadow-sm border-0 p-4">
                <div class="card border-0  mb-5">
                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                        <h3 class="fw-bold mt-3"> <i class="bi bi bi-tags"></i> Products</span></h3>

                            <button type="button" id="addPosition" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon"><i class="fas fa-plus-square"></i> </span>
                                <span class="text">Add New</span>
                            </button>
                        </div>
                    </div>
                    <div class="row bg-light d-flex align-items-stretch">

                        <?php
                        if(!empty($productsContent)) {
                        foreach ($productsContent as $v) {
                        $id = $v["ppi_product_id"];
                        $titlee = $v["ppi_product_name"];
                        $image = $v["ppi_product_image"];
                        $content = $v["ppi_product_description"];
                        $status = $v["ppi_product_status"];
                        // $date_update = $v["date_update"];
                        ?>
                        <div class="col-sm-4">
                            <div class="card p-3 shadow mb-4 border-0">
                                <div class="card-header py-3">
                                    <img src ="../assets/products/<?= $image ?>" class="w-100 mb-3"><br>
                                    <p><?php if($status== 1) {
                                        echo "<p class='text-primary badge bg-secondary'>Enable</p>";
                                    }
                                    else {
                                        echo "<p class='text-danger badge bg-secondary'>Disable</p>";
                                    } ?></p>
                                    <div class="d-sm-flex align-items-center justify-content-between">
                                        <h6 class="m-0 fw-bold">
                                            <?= $titlee ?>
                                            <!-- <?= $titlee ?> 
                                            <span class="badge bg-primary" style="color: white;">Last update: <?= $date_update ?></span> -->
                                            <!-- <?= ($status == 1 ? "" : '<span class="badge bg-warning" style="color: black;">Disabled</span>') ?> -->
                                        </h6>

                                        <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-sm btn-danger btn-icon-split text-white text-decoration-none" onclick="deleteLink(<?=$id;?>)"><i class="fa-solid fa-trash"></i>&nbsp; Delete &nbsp;</a>&nbsp;
                                        <a href="?update=<?= $id ?>/" class="btn btn-sm btn-success btn-icon-split text-white"><i class="fas fa-pen"></i>&nbsp;Update</a>
                                        </div>
                                    </div> 
                                </div> 
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
                            }
                        ?>

                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" aria-labelledby="staticBackdropLabel">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitle"></h5>
                                        </div>

                                        <div class="modal-body">
                                            <div class="d-none">
                                                <input type="hidden" id="products-id" name="products-id" class="form-control" readonly>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Title: <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="products-title" id="products-title" placeholder="Type Here..." required>
                                            </div>


                                        <div class="row mb-4">
                                            <label for="img" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Image:</label>
                                            <div class="col-sm-4 ">       
                                                                
                                                <input type="file" id="img" name="img" class="form-control p-1" value="<? $productsWhere['ppi_product_image'] ?>" onchange="Test.UpdatePreview(this)" >
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                    <div id = "preview">
                                                        <img src="assets/img/uploads/communication-arts/<?= $productsWhere["ppi_product_image"]; ?>" class="w-75 img-thumbnail">
                                                    </div>
                                            </div>
                                        </div>

                                            <div class="mb-3">
                                                <label class="form-label">Content: <span class="required">*</span></label>
                                                <textarea type="text" class="form-control" name="products-content" id="products-content" rows="9"  placeholder="Type Here..." required></textarea>
                                            </div>

                                            <!-- <div class="mb-3">
                                                <label class="form-label">Sort By:</label>
                                                <input type="number" class="form-control" name="sort_by" id="sort_by" value="0">
                                            </div> -->

                                            <div class="mb-3">
                                                <label class="form-label">Status: </label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="close" class="btn btn-sm btn-secondary btn-icon-split closeBtn" data-bs-dismiss="modal">
                                                <span class="icon"><i class="fas fa-window-close"></i></span>
                                                <span class="text">Close</span>
                                            </button>

                                            <button type="submit" class="btn btn-sm btn-primary btn-icon-split submit-btn">
                                                <span class="icon"><i class="fas fa-save"></i></span>
                                                <span class="text">Save</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
<script src ="<?=$BASE;?>assets/js/includes/include.products.js"></script>
