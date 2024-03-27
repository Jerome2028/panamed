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
                <div class="card border-0 mb-5 mt-5">
                <form action="../controller/controller.testimonials.php?mode=updateContent" method="POST" id="testimonialsUpdate" class="updatetestimonials" enctype="multipart/form-data">
                <div class="card-header py-3">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="m-0 fw-bold"><i class="fas fa-sm fa-edit"></i><?= $testimonialsWhere['name'] ?></h4>
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <a href="<?=$BASE?>testimonials/" class="btn btn-sm btn-secondary btn-icon-split">
                                <span class="icon text-white"><i class="fas fa-arrow-left"></i> </span>
                                <span class="text text-white">Back</span>
                            </a>
                            <a id="btn-save" class="btn btn-sm btn-primary btn-icon-split m-1 text-white" onclick="updateTestimonial()">
                                <span class="icon"><i class="fas fa-save"></i></span>
                                <span class="text">Save</span>
                            </a>
                        </div>              
                    </div>
                </div>
                <div class="card-body testimonials">
                    <div class="d-none">
                        <input type="hidden" name="id" id="id" value="<?= $testimonialsWhere["id"] ?>" class="form-control" readonly>
                    </div>
                    <div class="testimonial-item position-relative">
                        <p class="d-flex justify-content-center ">
                            <i class="bx bxs-quote-alt-left quote-icon-left me-2"></i>
                            <textarea type="text" class="form-control" name="comment" rows="7" placeholder="Type your message here..."></textarea>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            <input type="hidden" name="v-content" value="<?=$testimonialsWhere['content'] ?>">
                        </p>
                        <label class="form-label" for="testimonialsImg">
                            <div class="img-div">
                                <input class="form-control d-none" id="testimonialsImg" name="testimonialsImg" type="file" accept=".jpg, .jpeg, .png" value=""/>
                                <img class="testimonial-img" id="testImg" name="testImg" src="<?=$BASE;?>../assets/img/testimonials/<?=$testimonialsWhere['img'] ?>">
                            </div>
                        </label>
                        <h4 class="text-disable mb-1">Tap to change Profile</h4>
                        <input type="text" class="form-control fw-bold w-auto" id="name" name="name" placeholder="<?= $testimonialsWhere['name'] ?>">
                        <input type="hidden" name="v-name" value="<?= $testimonialsWhere['name']?>">

                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5"/>
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4"/>
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3"/>
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2"/>
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1"checked/>
                            <label for="star1" title="text">1 star</label>
                        </div>
                        <!-- <h4 class="fst-italic">Customer</h4> -->
                        <div class="row mb-4">
                        <!-- <label class="col-sm-2 col-form-label text-right">Status:</label> -->
                        <div class="col-sm-6">

                            <div class="form-check form-switch form-switch-lg p-3">
                                <input class="form-check-input" type="checkbox" id="toggle-status" name="toggle-status" value="1" checked>
                                <input class="form-check-input btn-lg" type="hidden" id="status" name="status" value="1">
                                <!-- <label class="form-check-label" for="status">Checked switch checkbox input</label> -->
                            </div>
             
                        </div>
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
                        <h3 class="fw-bold mt-3"><i class="bi bi-chat-quote"></i> Testimonials</h3>
                            <button type="button" id="addPosition" class="btn btn-sm btn-primary btn-icon-split p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <span class="icon"><i class="bi bi-plus-square-dotted"></i></span>
                                <span class="fw-bold">Add New</span>
                            </button>
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
                                $img = $v['img'];                              
                                ?>
                                <div class="swiper-slide mt-5">
                                    <div class="testimonial-item position-relative">
                                        <div class="action-icon">
                                            <a href="?update=<?= $id;?>/" ><span class="badge rounded-circle bg-success p-2 me-1 shadow"><i class="bi bi-pencil-square fs-5"></i></span></a>
                                            <a href="#delete=<?= $id;?>"><span class="badge rounded-circle bg-danger p-2 shadow"><i class="bi bi-trash fs-5"></i></span></a>
                                        </div>
                                        <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        <?=$content;?>
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                                        <img src="<?=$BASE;?>../assets/img/testimonials/<?= $img;?>" class="testimonial-img" alt="">
                                        <h3><?=$name;?></h3>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                        <h4>Customer</h4>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <form id="testimonialsAdd" class="addTestimonials" enctype="multipart/form-data">
                <div class="modal modal-lg fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle"><i class="fas fa-plus"></i> Add New Testimonials</h5>
                            </div>
                            
                            <div class="modal-body">
                                <div class="card-body testimonials">
                                    <div class="testimonial-item position-relative">
                                        <p class="d-flex justify-content-center ">
                                        <i class="bx bxs-quote-alt-left quote-icon-left me-2"></i>
                                        <textarea type="text "class="form-control text-break" rows="7" placeholder="Type your message here..."></textarea>
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <label class="form-label" for="testimonialsImg">
                                            <div class="img-div">
                                                <img src="<?=$BASE;?>assets/img/user.png" class="testimonial-img" alt="">
                                                <input class="form-control d-none" id="testimonialsImg" name="testimonialsImg" type="file" accept=".jpg, .jpeg, .png"/>
                                            </div>
                                        </label>
                                            <h4 class="text-disable mb-2">Tap to change Profile</h4>
                                            <input type="text" class="form-control ms-3 w-auto" placeholder="Customer Name">

                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5"/>
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4"/>
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3"/>
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2"/>
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1"checked/>
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                        <!-- <h4 class="fst-italic">Customer</h4> -->
                                    </div>
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
</section>
<script src="<?=$BASE;?>assets/js/includes/include.testimonial.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    function updateTestimonial() {
    $('#testimonialsUpdate').trigger('submit');
    }
    var swiper = new Swiper(".testimonials-slider",{
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
    });

    $("#toggle-status").on('change',function(){
        if($(this).is(':checked')){
            $('#status').val('1');

        }
        else {
            $('#status').val('0');
        }
    });
</script>

