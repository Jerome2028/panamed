<footer id="footer">
<div class="footer-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>Our Newsletter</h4>
        <p class="text-white">Subscribe Our Newsletter & Join US.</p>
      </div>
      <div class="col-lg-6">
        <form action="controller/controller.form.php?mode=email" method ="POST" class="email">
          <input type="email" name="footemail" placeholder="youremail@email.com">
          <input type="submit" value="Subscribe" data-action='Subscribe' onclick='subscribe()'>
          <!-- <script>
            function subscribe(token) {
                $(".email").trigger('submit');
            }
          </script> -->
           <script src="assets/js/footer-mail.js"></script>
        </form>
       
  
      </div>
 
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

    <div class="col-lg-3 col-md-6 footer-links">
        <h4>About Us</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=$BASE;?>">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=$BASE;?>about-us">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=$BASE;?>awards">Awards</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=$BASE;?>careers">Careers</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=$BASE;?>brochures">Brochures</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=$BASE;?>products">Products</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=$BASE;?>news-events">News and Events</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?=$BASE;?>contact-us">Contact Us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Shop</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Shop Online</h4>
        <p>
          488 G. Araneta Avenue,<br>
          corner Del Monte Avenue<br>
          Brgy. Sienna, Quezon City 1114 <br>
          Philippines<br>
          (Beside the BPI bank)<br>
        </p><br>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Shop Now</a>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h4>Connect with Us</h4>
        <p>
        Tel:  +63 2 8559 9558<br>
        <!-- Fax:  +63 2 8820 9780<br> -->
        info@panamed.com.ph<br>
        </p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-youtube"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script> -->

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>