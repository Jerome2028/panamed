<?php
$title = "Admin - Testimonials";
require_once 'component/import.php';
require_once 'component/header.php';
require_once 'component/search.php';
$page = 8;
$getallTestiContent = $testimonials->getContent();
?>
<section class="dashboard nav-spacer">
    <div class="container-fluid">
        <div class="row">
            <?php require_once 'component/sidenav.php';?>
            <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-8">
            <?php
                if(isset($_GET["update"])) {
                $id = $_GET["update"];
                $testimonialsWhere = $testimonials->getContentWhere($id);
                ?>
                <div class="container-fluid">
                <div class="modal fade" id="testimonialsUpdate" tabindex="-1" aria-labelledby="testimonialsUpdate" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="testimonialsUpdate">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="d-none">
                            <input type="hidden" name="id" id="id" value="<?= $testimonialsWhere["id"] ?>" class="form-control" readonly>
                        </div>
                        <p>test</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                <?php }else {?>
                <div class ="container-fluid card bg-light shadow-sm border-0 p-4">
                    <div class="card border-0  mb-5">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="fw-bold mt-3"><i class="bi bi-chat-quote"></i> Testimonials</span></h3>
                                <!-- <button type="button" id="addPosition" class="btn btn-sm btn-primary btn-icon-split p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <span class="icon"><i class="bi bi-plus-square-dotted"></i></span>
                                    <span class="fw-bold">Add New</span>
                                </button> -->
                            </div>
                        </div>
                        <div class="card-body testimonials">
                            <div class="swiper testimonials-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <?php
                                     if (!empty($getallTestiContent)){
                                    foreach($getallTestiContent as $v){        
                                    $id = $v['id'];
                                    $name = $v['name'];
                                    $content = $v['content'];                              
                                    ?>
                                    <div class="swiper-slide mt-5">
                                        <div class="testimonial-item position-relative">
                                            <div class="action-icon">
                                            <a href="?update=<?= $id;?>/" data-bs-toggle="modal" data-bs-target="#testimonialsUpdate"><span class="badge rounded-circle bg-success p-2 me-1 shadow"><i class="bi bi-pencil-square fs-5"></i></span></a>
                                            <a href="#delete=<?= $id;?>"><span class="badge rounded-circle bg-danger p-2 shadow"><i class="bi bi-trash fs-5"></i></span></a>
                                            </div>
                                            <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            <?=$content;?>
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                                            <img src="<?=$BASE;?>assets/img/user.png" class="testimonial-img" alt="">
                                            <h3><?=$name;?></h3>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                            <h4>Customer</h4>
                                        </div>
                                    </div>
                                    <?php 
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script>
    var swiper = new Swiper(".testimonials-slider",{
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>