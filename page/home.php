<?php
 $title = "Panamed Philippines Inc."; 
 $page = 1;
require_once 'component/import.php';
require_once 'component/header.php';
require_once 'component/navbar.php';
?>
  
 <!-- ======= Hero Section ======= -->
 
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">You Have A Better Choice</h2>
          <p class="animate__animated animate__fadeInUp">We are pleased to announce
            the successful ISO 9001:2015 certification of Panamed Philippines, Inc. Is valid from October 2022 until November 2025.</p>
          <a href="https://panamed.com.ph/shop/" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">Shop Now</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Panamed Philippines Incorporated</h2>
          <p class="animate__animated animate__fadeInUp">Panamed Philippines, Inc. is a professional organization engaged in the importation, marketing and distribution of quality medical devices that has...</p>
          <a href="about-us" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section>

<main id ="main">

    <!-- ======= Services Section ======= -->
  <section class="services">
      <div class="container">
        <h5 class="fw-bold">Featured Product</h5>
      <div class="swiper services-carousel">
        <div class="swiper-wrapper">

          <div class="swiper-slide d-flex align-items-stretch relativee">
            <div class="" data-aos="fade-up" data-aos-delay="fade-up">
              <div class="icon-box icon-box-hover shadow">
                <img src ="<?=$BASE; ?>assets/img/products/Unimex-N95-Face-Mask-Particulate-Respirator.jpg" class="img-responsive">
                  <div class="overlay-text overlay">
                  <div>
                    <h4 class="title"><a href="">Unimex N95 Respirator</a></h4>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="swiper-slide d-flex align-items-stretch relativee">
            <div class="" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
                <div class="icon-box icon-box-hover shadow">
                <img src ="<?=$BASE; ?>assets/img/products/Panamed-Face-Shield-and-Panamed-Protective-Goggles-2.jpg" class="img-responsive">
                  <div class="overlay-text overlay">
                      <div>
                        <h4 class="title"><a href="">Panamed Protective Goggles</a></h4>
                      </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="swiper-slide d-flex align-items-stretch relativee">
            <div class="" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
                <div class="icon-box icon-box-hover shadow">
                <img src ="<?=$BASE; ?>assets/img/products/kn95-w-with-box.png" class="img-responsive">PPI-PIS-Panamed-Face-Shield
                  <div class="overlay-text overlay">
                    <div>
                      <h4 class="title"><a href="">Panamed KN95-w Particulate Respirator</a></h4>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide d-flex align-items-stretch relativee">
            <div class="" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
              <div class="icon-box icon-box-hover shadows">
              <img src ="<?=$BASE; ?>assets/img/products/PPI-PIS-Panamed-Face-Shield.jpg" class="img-responsive">
                <div class="overlay-text overlay">
                  <div>
                    <h4 class="title"><a href="">Panamed Face Shields</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide d-flex align-items-stretch relativee">
            <div class="" data-aos="fade-up" data-aos-delay="fade-up">
              <div class="icon-box icon-box-hover shadow">
                <img src ="<?=$BASE; ?>assets/img/products/Unimex-N95-Face-Mask-Particulate-Respirator.jpg" class="img-responsive">
                  <div class="overlay-text overlay">
                  <div>
                    <h4 class="title"><a href="">Unimex N95 Respirator</a></h4>
                    <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="swiper-slide d-flex align-items-stretch relativee">
            <div class="" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
                <div class="icon-box icon-box-hover shadow">
                <img src ="<?=$BASE; ?>assets/img/products/Panamed-Face-Shield-and-Panamed-Protective-Goggles-2.jpg" class="img-responsive">
                  <div class="overlay-text overlay">
                      <div>
                        <h4 class="title"><a href="">Panamed Protective Goggles</a></h4>
                      </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="swiper-slide d-flex align-items-stretch relativee">
            <div class="" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
              <div class="icon-box icon-box-hover shadow">
              <img src ="<?=$BASE; ?>assets/img/products/kn95-w-with-box.png" class="img-responsive">PPI-PIS-Panamed-Face-Shield
                <div class="overlay-text overlay">
                  <div>
                    <h4 class="title"><a href="">Panamed KN95-w Particulate Respirator</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide d-flex align-items-stretch relativee">
            <div class="" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
              <div class="icon-box icon-box-hover shadows">
              <img src ="<?=$BASE; ?>assets/img/products/PPI-PIS-Panamed-Face-Shield.jpg" class="img-responsive">
                <div class="overlay-text overlay">
                  <div>
                    <h4 class="title"><a href="">Panamed Face Shields</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination "></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev "></div>
      </div>
    </div>
  </section>

    <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 video-box" data-aos="fade-right" date-aos-delay="200">
          <img src="<?=$BASE; ?>assets/img/building.jpg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-left" date-aos-delay="200">
          <div class="icon-box">
            <div class="icon mt-4 waves-effect waves-light"><i class="bx bxs-megaphone"></i></div>
            <h4 class="title">Welcome to <span class="panamed-color">Panamed</span></h4>
            <p class="description"><span class="panamed-color">Panamed Philippines, Inc.</span> is a professional organization engaged in the importation, marketing and distribution of quality medical  devices  that has significantly marked its presence in the medical healthcare industry for more than 20 years of delivering exceptional service to Filipinos. Guided by our Vision and Mission, our goal is to give our clients the best choice of product.</p>
          </div>

          <div class="icon-box">
            <div class="icon waves-effect waves-light"><i class="fa-regular fa-handshake"></i></div>
            <!-- <h4 class="title"><a href="">Nemo Enim</a></h4> -->
            <p class="description"> In such we align our partnership with various hospitals such as The Medical City, St. Luke’s Medical Center, Cardinal Santos Medical  Center, Makati Medical Center, Philippine Heart Center, Philippine General Hospital, among others.We market and distribute high quality products at an affordable price that are trusted by healthcare professionals.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

      <!-- ======= Trusted by Healthcare ======= -->
  <?php require_once 'page/trusted.php'; ?>
  <section class="section-bg core-values">
    <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
      <h5 class="title">Our<span class="panamed-color"> Core Values</span></h5>
      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink waves-effect waves-light">
            <div class="icon"><i class="fa-regular fa-handshake"></i></div>
            <h4 class="title"><a href="">Commitment</a></h4>
            <p class="description">We are committed on what we do and we promise to deliver on time outcome.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-cyan waves-effect waves-light">
            <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
            <h4 class="title"><a href="">Honesty</a></h4>
            <p class="description">We are honest on dealing with our suppliers, customers, stake holders, employees and through the rest of our business transactions.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-green waves-effect waves-light">
            <div class="icon"><i class="fa-regular fa-sun"></i></div>
            <h4 class="title"><a href="">Optimism</a></h4>
            
            <p class="description">We look at the positive side of things and situations, which allows us to have positive mindset that leads to positive results.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box icon-box-blue waves-effect waves-light">
            <div class="icon"><i class="fa-regular fa-lightbulb"></i></div>
            <h4 class="title"><a href="">Innovative</a></h4>
            <p class="description">We are always innovative on our products, solution and work flow.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box icon-box-red waves-effect waves-light">
            <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
            <h4 class="title"><a href="">Care</a></h4>
            <p class="description">We are highly competent, dedicated, technically skilled and actively responsive in caring for the needs of our customers, their families and we care for the people who are affected by calamities and disasters.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="content">
            <div class="icon-box icon-box-yellow waves-effect waves-light">
              <div class="icon"><i class="fa-regular fa-star"></i></div>
              <h4 class="title"><a href="">Excellence</a></h4>
              <p class="description">We do things to achieve excellent and not just mediocre results.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
      <div class="container">
          <p class="text-center title">Quality products at <span class="panamed-color">Great Prices!</span></p>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active waves-effect waves-light">All</li>
              <li data-filter=".filter-app" class="waves-effect waves-light">Personal Protective Equipment</li>
              <li data-filter=".filter-card" class="waves-effect waves-light">Digestive</li>
              <li data-filter=".filter-web" class="waves-effect waves-light">Sterilization Supplies</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/products/1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MC Enteral Feeding Bag1500ml FOR MC Enteral Feeding Pump EP-60C</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&product_id=655&search=Panamed+Powered+Air+Purifying+Respirator" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/products/7.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Panamed Anti-Skid Shoe Cover 100's</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&product_id=80&search=shoe+cover" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/products/2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Panamed N95 Particulate Respirator</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&product_id=640&search=panamed" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/products/6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Avanos MIC-key Low Profile Feeding Tube</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&path=25&product_id=67" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/products/11.png" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Steripak Self-Sealing Sterilization Pouch</h4>
              <a href="https://panamed.com.ph/shop/index.php?route=product/product&path=62&product_id=646" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/products/5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MC Enteral Feeding Pump EP-60C</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&path=25&product_id=771" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/products/4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Unimex N95 Face Mask, 20's</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&product_id=637&search=n95&description=true" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/products/12.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Steripak SMS Wrap Blue 120cmx120cm (200s)</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&path=62&product_id=753" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/products/8.png" class="img-fluid" alt="">
              <div class="portfolio-info text-center">
                <h4>Panamed Basic Coverall, PPE (Sold per piece)</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&path=142&product_id=633" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
                </div>
              </div>
            </div>
          

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/products/9.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Panamed Safety Goggles</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&product_id=635&search=safety+goggle" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
                </div>
              </div>
            </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/products/10.png" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>Steripak Sterilization Flat Reel</h4>
                <a href="https://panamed.com.ph/shop/index.php?route=product/product&product_id=635&search=safety+goggle" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              <a href="https://panamed.com.ph/shop/index.php?route=product/product&product_id=82&search" class="btn-get-started animate__animated animate__fadeInUp scrollto waves-effect waves-light">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
          <p class="text-center title">Want More? <a class="panamed-color" href="https://panamed.com.ph/shop/">Shop with us!</a> and get the products you want!</p>
          <div class="d-flex justify-content-center mt-4">
          <a href="https://panamed.com.ph/shop/" class="btn-get-started animate__animated animate__fadeInUp waves-effect waves-light">Shop Now</a>
        </div>
      </div>
    </section>

    <section id="testimonials" class="testimonials section-bg"  data-aos-delay="200" data-aos-delay="fade-up">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3 class="panamed-color">What Our Customers Say About us</h3>
          <p></p>
        </div>

        <div class="testimonials-slider swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Panamed is our trusted brand when it comes to face mask that's why I'm glad that they already released a kids size. I am satisfied with my purchase and the items are well packed
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/user.png" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                 <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                <h4>Customer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The packaging was great and the boxes were intact. It can be given as a gift. The mask are complete and individually wrapped. Color is nice.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/user.png" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                <h4>Customer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I received all my orders on time and in good condition. Highly-recommended shop!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/user.png" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                <h4>Customer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Excellent quality, also its FDA approved!! Proven because I search it before ordering this.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/user.png" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                <h4>Customer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  My 3rd time buying this mask from this shop. Thanks for an efficient service. Still my preferred masks!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/user.png" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                <h4>Customer</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
</section>
</main>
<?php include_once 'component/footer.php';?>

