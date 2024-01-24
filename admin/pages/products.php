<?php
$title =  "Admin - Products";
require_once 'component/import.php';
require_once 'component/header.php';
$page =2;
$productsContent = $productsContent->getContent();
?>
<body>
<section class="dashboard">
    <div class="container-fluid">
        <div class="row flex-nowrap h-100">
            <div class="col-auto col-md-3 col-xl-2 px-0 bg-light  d-inline-block">
        
                <?php require_once 'component/sidenav.php';?>
        
            </div>

            <div class="col py-3 overflow-auto">
                <div class="container-fluid mt-5">
                <?php
                    if(isset($_GET["update"])) {
                    $id = $_GET["update"];
                    $newsEventsWhere = $newsEvents->getContentWhere($id);
                ?>
                
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
                <div class="row">

                        <?php
                        if(!empty($productsContent)) {
                        foreach ($productsContent as $v) {
                        // $id = $v["ppi_product_id"];
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
