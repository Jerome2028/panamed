<?php
$title =  "Admin - Brochures";
require_once 'component/import.php';
require_once 'component/header.php';
require_once 'component/search.php';
$page = 7;
$brochuresContent = $brochures->getContent();
?>
<section class="dashboard">
<div class="container-fluid">
    <div class="row">
    <?php require_once 'component/sidenav.php';?>
    <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-8 brochures">
            <?php
                if(isset($_GET["update"])) {
                $id = $_GET["update"];
                $brochureWhere = $brochures->getContentWhere($id);
            ?>
            <div class="container-fluid">
                <div class="card border-0 mb-5 mt-5">
                <form method="POST" id="updateBrochure" class="updateBrochures" enctype="multipart/form-data">
                <div class="card-header py-3">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="m-0 fw-bold"><i class="fas fa-sm fa-edit"></i>
                            <span><?= $brochureWhere['title'] ?></span>
                        </h4>
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <a href="<?=$BASE?>brochures/" class="btn btn-sm btn-secondary btn-icon-split">
                                <span class="icon text-white"><i class="fas fa-arrow-left"></i> </span>
                                <span class="text text-white">Back</span>
                            </a>
                            <a id="btn-save" class="btn btn-sm btn-primary btn-icon-split m-1 text-white" onclick="updateBrochure()">
                                <span class="icon"><i class="fas fa-save"></i></span>
                                <span class="text">Save</span>
                            </a>
                        </div>              
                    </div>
                </div>
            
                <div class="card-body">
                    <div class="d-none">
                        <input type="hidden" name="id" id="id" value="<?= $brochureWhere["id"] ?>" class="form-control" readonly>
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <label class="form-label" for="brochureImg">
                        <div class="img-div mx-auto d-block">
                            <input class="form-control d-none" id="brochureImg" name="brochureImg" type="file" accept=".jpg, .jpeg, .png" value=""/>
                            <img src="<?=$BASE;?>../assets/img/brochures/thumbnail/<?= $brochureWhere["img"] ?>" class="w-25 img-board mx-auto d-block" id="brochurePreview" value="<?=$user_account['img'];?>" alt="Upload Picture"/>
                        </div>
                        </label>
                    </div>

                    <input type="hidden" name="b_image" id="b_img" value="<?=$brochureWhere["img"]?>">
                    <input type="hidden" name="b_file" id="b_file" value="<?=$brochureWhere["file"]?>">

                    <div class="row mb-4">
                        <label class="form-label col-sm-2">Upload PDF <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input class="form-control" name="pdf-upload" id="pdf-upload" type="file" accept=".pdf" value="" placeholder=""/>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="info_title" class="col-sm-2 col-form-label text-right">Title:<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" id="title" value="<?= $brochureWhere['title'] ?>" placeholder="Type Here...">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label text-right">Status:</label>
                        <div class="col-sm-9">
                            <select class="form-control dropdown-toggle" id="status" name="status">
                                <option <?= ($brochureWhere['status'] == 1 ? "selected" : "") ?> value="1">Enabled</option>
                                <option  <?= ($brochureWhere['status'] == 0 ? "selected" : "") ?> value="0">Disabled</option>
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

        <div class ="container-fluid shadow-sm border-0 pt-4">
            <div class="card border-0">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h3 class="fw-bold mt-3"><i class="bi bi-newspaper"></i> Brochures</h3>

                        <button type="button" id="addPosition" class="btn btn-sm btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                            <span class="icon"><i class="fas fa-plus-square"></i></span>
                            <span class="text">Add New</span>
                        </button>
                    </div>
                </div>
            <div class="row d-flex align-items-stretch">
            <?php
            if(!empty($brochuresContent)) {
            foreach ($brochuresContent as $v) {
            $id = $v["id"];
            $title = $v["title"];
            $img = $v["img"];
            $file = $v["file"];
            $status = $v["status"];
            $date_added = $v["date_added"];
            ?>
            <div class="col-xl-4 col-lg-6 col-md-6 panamed-img mb-3 mt-3">
                <div class="card rounded-0 shadow border-light p-3">
                    <div class="card-header p-0">
                        <img src ="<?=$BASE;?>../assets/img/brochures/thumbnail/<?= $img; ?>" class="w-100 shadow">
                    </div>
                        
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-9 col-sm-8 mt-3">
                                <p class="fw-bold fs-6"><?= $title ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-4 text-end mt-3">                                 
                                <?php if($status== 1) {
                                echo "<p class='text-primary badge badge-bg p-2'>Enable</p>";
                                }
                                else {
                                echo "<p class='text-danger badge badge-bg p-2'>Disable</p>";
                                } ?>
                            </div>
                            <div class="col-lg-12 col-sm-12 text-end mt-3">
                                <div class="input-group border-0">
                                    <span class="input-group-text" id="brochure-link"><span class="text-danger fw-bold me-1">PDF </span><i class="bi bi-link fs-5 fw-bold"></i></span>
                                    <input type="text" class="form-control" placeholder="<?=$file;?>" aria-label="File Name" aria-describedby="brochure-link" value=""disabled>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 px-4">
                                <div class="row gx-4 d-flex justify-content-end">
                                    <a href="#delete=<?= $id ?>" class="col-xl-3 col-lg-4 col-md-6 btn btn-danger btn-icon-split text-white p-2" onclick="deleteBrochures(<?=$id;?>)"><i class="fa-solid fa-trash"></i>&nbspDelete&nbsp;</a>&nbsp;&nbsp;
                                    <a href="?update=<?= $id ?>/" class="col-xl-3 col-lg-4 col-md-6 btn btn-success btn-icon-split text-white p-2"><i class="fas fa-pen"></i>&nbsp;Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
                    }
                }
            ?>
            </div>
            <?php } ?>
            <form id="brochuresAdd" class="addBrochures" enctype="multipart/form-data">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle"><i class="fas fa-plus"></i> Add New Brochures</h5>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex justify-content-center mb-3">
                                <label class="form-label mx-auto d-block" for="brochureImg">
                                    <div class="img-div">
                                        <input class="form-control d-none" id="brochureImg" name="brochureImg" type="file" accept=".jpg, .jpeg, .png" value=""/>
                                        <img src="<?=$BASE;?>assets/img/no-image.svg" class="w-25 img-board mx-auto d-block" id="brochurePreview" value="<?=$user_account['img'];?>" alt="Upload Picture"/>
                                    </div>
                                </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Brochure Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="brochure-name" id="brochure-name" placeholder="Type Here...">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Upload PDF <span class="required">*</span></label>
                                <input class="form-control" name="pdf-upload" id="pdf-upload" type="file" accept=".pdf" value="" placeholder=""/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sort By:</label>
                                <input type="number" class="form-control" name="sort_by" id="sort_by" value="0">
                            </div>

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

                            <button  type="submit" class="btn btn-sm btn-primary btn-icon-split submit-btn" >
                                <span class="icon"><i class="fas fa-save"></i></span>
                                <span class="text">Save</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>
<script src ="<?=$BASE;?>assets/js/includes/include.brochures.js"></script>
<script>
    function updateBrochure(token) {
        $("#updateBrochure").trigger('submit');
    }
</script>