<?php
$title =  "Admin - Careers";
require_once 'component/import.php';
require_once 'component/header.php';
$page = 4;
$careersContent = $careers->getContent();
?>
<!-- <body> -->
<section class="dashboard ">
    <div class="container-fluid">
        <div class="row flex-nowrap h-100">
            <div class="col-auto col-md-3 col-xl-2  px-0 bg-light  d-inline-block">


            
            <?php require_once 'component/sidenav.php';?>
        
        

            </div>
            
        <div class="col p-0 overflow-auto">
            <?php  require_once 'component/search.php';?>
            <div class="container-fluid mt-5">
                <?php
                    if(isset($_GET["update"])) {
                    $id = $_GET["update"];
                    $careersWhere = $careers->getContentWhere($id);
                ?>
                <div class="card border-0 mb-5">

                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h4 class="m-0 fw-bold"><i class="fas fa-sm fa-edit"></i>
                                <span><?= $careersWhere['title'] ?></span>
                            </h4>
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="<?=$BASE?>career/" class="btn btn-sm btn-secondary btn-icon-split">
                                    <span class="icon text-white"><i class="fas fa-arrow-left"></i> </span>
                                    <span class="text text-white">Back</span>
                                </a>
                                <a class="btn btn-sm btn-primary btn-icon-split m-1 text-white" id="btn-save" href="<?=$BASE;?>career/">
                                    <span class="icon"><i class="fas fa-save"></i></span>
                                    <span class="text">Save</span>
                                </a>
                            </div>              
                        </div>
                    </div>
                
                    <div class="card-body">
                        <div class="d-none">
                            <input type="hidden" name="careers-id" id="careers-id" value="<?= $careersWhere["id"] ?>" class="form-control" readonly>
                        </div>

                        <div class="row mb-4">
                            <label for="info_title" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Title:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="careers-title" id="careers-title" value="<?= $careersWhere['title'] ?>" placeholder="Type Here...">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="info_title" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Image upload:</label>
                            <div class="col-sm-9">
                                <input type="file" name="images[]"multiple>
                                <button type="submit" class ="btn btn-get-started p-2" name="upload">Upload</button>
                                <div id="uploadStatus"></div>
                                <div class="gallery" id="imagesPreview"></div>

                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Content:</label>
                            <div class="col-sm-9">
                                <textarea name="careers-content" id="careers-content" class="form-control h-auto"  rows="9" required><?= $careersWhere['content'] ?></textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label text-right">Status:</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="status" name="status">
                                <option <?= ($careersWhere['status'] == 1 ? "selected" : "") ?> value="1">Enabled</option>
                                        <option  <?= ($careersWhere['status'] == 0 ? "selected" : "") ?> value="0">Disabled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            } else {
            ?>

            <div class ="container-fluid card bg-light shadow-sm border-0 p-4">
                <div class="card border-0">
                    <div class="card-header py-3  align-items-stretch">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="fw-bold mt-3"><i class="bi bi-chat-left-text"></i> Careers</h3>

                            <button type="button" id="addPosition" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon"><i class="fas fa-plus-square"></i> </span>
                                <span class="text">Add New</span>
                            </button>
                        </div>
                    </div>
                <div class="row bg-light d-flex align-items-stretch">
                <?php
                if(!empty($careersContent)) {
                foreach ($careersContent as $v) {
                $id = $v["id"];
                $title = $v["title"];
                $content = $v["content"];
                $status = $v["status"];
                $date_update = $v["date_update"];
                ?>
                <div class="col-md-5 d-flex align-items-stretch">
                    <div class="card rounded-0 p-3 shadow-sm mb-4 border-0 w-100">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-sm-7">
                                    <p class="fw-bold px-2 fs-6"><?= $title ?></p>
                                    <div class="d-flex">
                                        <span class="badge bg-primary me-3 p-2" style="color: white;">Last update: <?= $date_update ?></span>
                                        <p><?php if($status== 1) {
                                            echo "<p class='text-primary badge badge-bg p-2 mb-0'>Enable</p>";
                                        }
                                        else {
                                            echo "<p class='text-danger badge badge-bg p-2 mb-0'>Disable</p>";
                                        } ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-5 text-nowrap">
                                    <a href="#delete=<?= $id ?>" class="btn btn-sm btn-danger btn-icon-split text-white mb-0" onclick="deleteCareers(<?=$id;?>)"><i class="fa-solid fa-trash"></i>&nbsp; Delete &nbsp;</a>
                                    <a href="?update=<?= $id ?>/" class="btn btn-sm btn-success btn-icon-split text-white"><i class="fas fa-pen"></i>&nbsp;Update</a>
                                </div>
                            </div>
                        </div>
                            
                        <div class="card-body py-3">
                            <div class="mt-3"><p><?= $content; ?></p></div>
                        </div>
                    </div>
                </div>
                
                <?php
                        }
                    }
                ?>
                </div>
                <?php    
                    }
                ?>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle"></h5>
                                    </div>

                                    <div class="modal-body">
                                        <div class="d-none">
                                            <input type="hidden" id="careers-id" name="careers-id" class="form-control" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Title: <span class="required">*</span></label>
                                            <input type="text" class="form-control" name="careers-title" id="careers-title" placeholder="Type Here..." required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Content: <span class="required">*</span></label>
                                            <textarea class="form-control w-50" name="careers-content" id="careers-content"></textarea>
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
</section>
<!-- </body> -->
<script src ="<?=$BASE;?>assets/js/includes/include.career.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>