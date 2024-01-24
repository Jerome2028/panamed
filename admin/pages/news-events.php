<?php
$title =  "Admin - News-events";
require_once 'component/import.php';
require_once 'component/header.php';
$page =5;
// $newsEvents = new NewsEvents();
$newsEventsContent = $newsEvents->getContent();
?>
<body>
<section class="dashboard">
<div class="container-fluid">
    <div class="row flex-nowrap h-100">
        <div class="col-auto col-md-3 col-xl-2  px-0 bg-light  d-inline-block">

            <?php require_once 'component/sidenav.php';?>        

        </div>

        <div class="col py-3 overflow-auto">
            <div class="container-fluid mt-5">
                <?php
                    if(isset($_GET["update"])) {
                    $id = $_GET["update"];
                    $newsEventsWhere = $newsEvents->getContentWhere($id);
                ?>
                <div class="card border-0 mb-5">

                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="m-0 font-weight-bold font-primary"><i class="fas fa-sm fa-edit"></i>
                                <span class="badge rounded-pill bg-secondary font-primary">News-Events</span>
                            </h3>
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <a href="<?=$BASE?>news-events/" class="btn btn-sm btn-secondary btn-icon-split">
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
                            <input type="hidden" name="id" id="id" value="<?= $newsEventsWhere["id"] ?>" class="form-control" readonly>
                        </div>

                        <div class="row mb-4">
                            <label for="info_title" class="col-sm-2 col-form-label text-right"><span class="required">*</span> Title:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" id="title" value="<?= $newsEventsWhere['title'] ?>" placeholder="Type Here...">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label text-right"><span class="required">*</span> Content:</label>
                            <div class="col-sm-9">
                                <textarea name="news-content" id="news-content" class="form-control"  rows="3" required><?= $newsEventsWhere['content'] ?></textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label text-right">Status:</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="status" name="status">
                                <option <?= ($newsEventsWhere['status'] == 1 ? "selected" : "") ?> value="1">Enabled</option>
                                        <option  <?= ($newsEventsWhere['status'] == 0 ? "selected" : "") ?> value="0">Disabled</option>
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
                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="fw-bold mt-3"><i class="bi bi-megaphone"></i> News Events</span></h3>

                            <button type="button" id="addPosition" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon"><i class="fas fa-plus-square"></i> </span>
                                <span class="text">Add New</span>
                            </button>
                        </div>
                    </div>
                <div class="row bg-light d-flex align-items-stretch">
                <?php
                if(!empty($newsEventsContent)) {
                foreach ($newsEventsContent as $v) {
                $id = $v["id"];
                $title = $v["title"];
                $content = $v["content"];
                $status = $v["status"];
                $date_update = $v["date_update"];
                ?>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card rounded-0 p-3 shadow mb-4 border-0 w-100">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="fw-bold px-2"><?= $title ?></p>
                                    <div class="d-flex">
                                        <span class="badge bg-primary me-3 p-2" style="color: white;">Last update: <?= $date_update ?></span>
                                        <p><?php if($status== 1) {
                                            echo "<p class='text-primary badge bg-secondary p-2 mb-0'>Enable</p>";
                                        }
                                        else {
                                            echo "<p class='text-danger badge bg-secondary p-2 mb-0'>Disable</p>";
                                        } ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-nowrap">
                                    <a href="#" class="btn btn-sm btn-danger btn-icon-split text-white mb-0" onclick="deleteLink(<?=$id;?>)"><i class="fa-solid fa-trash"></i>&nbsp; Delete &nbsp;</a>
                                    <a href="?update=<?= $id ?>/" class="btn btn-sm btn-success btn-icon-split text-white"><i class="fas fa-pen"></i>&nbsp;Update</a>
                                </div>
                            </div>
                        </div>
                            
                        <div class="card-body py-3">
                            <div class="mt-3"><p><?= $content ?></p></div>
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
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" aria-labelledby="staticBackdropLabel">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle"></h5>
                                    </div>

                                    <div class="modal-body">
                                        <div class="d-none">
                                            <input type="hidden" id="news-id" name="news-id" class="form-control" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Title: <span class="required">*</span></label>
                                            <input type="text" class="form-control" name="news-title" id="news-title" placeholder="Type Here...">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Content: <span class="required">*</span></label>
                                            <textarea type="text" class="form-control" name="news-content" id="news-content" rows="6"  placeholder="Type Here..."></textarea>
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
                                        <button type="close" class="btn btn-sm btn-secondary btn-icon-split closeBtn" data-dismiss="modal">
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
</body>
<script src ="<?=$BASE;?>assets/js/includes/include.news-events.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>