<?php
$title =  "Admin - Products";
require_once 'component/import.php';
require_once 'component/header.php';
$page =2;
$productsContent = $products->getContent();
?>
<section class="dashboard">
    <div class="container-fluid">
        <div class="row flex-nowrap h-100">
            <div class="col-auto col-md-3 col-xl-2 px-0 bg-light d-inline-block">
        
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
                <form method="POST" id="updateProduct" class="updateProducts" enctype="multipart/form-data">
                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h4 class="m-0 fw-bold"><i class="fas fa-sm fa-edit"></i>
                                <span><?= $productsWhere['ppi_product_name'] ?></span>
                            </h4>
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="<?=$BASE?>products/" class="btn btn-sm btn-secondary btn-icon-split">
                                    <span class="icon text-white"><i class="fas fa-arrow-left"></i> </span>
                                    <span class="text text-white">Back</span>
                                </a>
                                <button id="btn-save" class="btn btn-sm btn-primary btn-icon-split m-1" onclick="updateProduct()">
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
                                <input type="text" class="form-control" name="productName" id="productName" value="<?= $productsWhere['ppi_product_name'] ?>" placeholder="Type Here...">
                            </div>
                        </div>

                        
                        <div class="d-flex justify-content-center mb-4">
                            <label class="form-label mx-auto d-block" for="productsImg">
                            <div class="img-div">
                                <input class="form-control d-none" id="productsImg" name="productsImg" type="file" accept=".jpg, .jpeg, .png" value=""/>
                                <img src="<?=$BASE;?>assets/img/products/<?= $productsWhere["ppi_product_image"] ?>" class="w-25 img-board mx-auto d-block" id="productsPreview" value="" alt="Upload Picture"/>
                            </div>
                            </label>
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
                    </form>
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
                    <table class="table border table-bordered mt-3 display" id="products-table">
                        <thead>
                            <tr class="text-dark">
                            <th scope="col">#</th>
                            <th scope="col">Images</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
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

                    <tr>
                    <td class="counterCell text-dark"></td>
                    <td><img src ="../assets/img/products/<?=$image;?>" class="w-50 border-1 d-block mx-auto my-auto"></td>
                    <td class="fw-bold"><?=$titlee;?></td>
                    <td class="truncate"><?php echo htmlspecialchars_decode ($content);?></td>
                    <td><?=$status==1 ? "<p class='text-primary badge badge-bg p-2 mb-0'>Enable</p>":"<p class='text-danger badge badge-bg p-2 mb-0'>Disable</p>";?></td>
                    <td>
                        <div class="text-nowrap d-flex justify-content-around">
                            <a href="?update=<?=$id;?>/" class="btn btn-sm btn-success btn-icon-split text-white"><i class="fas fa-pen"></i> Update </a>
                            <a href="#" class="btn btn-sm btn-danger btn-icon-split text-white text-decoration-none" onclick="deleteLink(<?=$id;?>)"><i class="fa-solid fa-trash"></i> Delete </a>
                        </div>
                    </td>
                    </tr>  
                    <?php
                                }
                            }
                        }
                    ?>
                    </div>
                </div>

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
</section>
<script src ="<?=$BASE;?>assets/js/includes/include.products.js"></script>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
$(function(){    
    productsTable();
});
function updateProduc(token) {
    $("#updateProduct").trigger('submit');
}
</script> 