<div id="header" class="fixed-top d-flex align-items-center header-transparent shadow">
<div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light"><a href="<?= $BASE; ?>"><span>  <img src ="<?= $BASE; ?>assets/img/logo.png"> </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="nav-link <?= $page==1 ? "active" : ""?>" href="<?=$BASE;?>">Home</a></li>
          <li class="dropdown">
          <a class="nav-link <?= $page==2 || $page==7 || $page==8 ? "active" : ""?>">About Us <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="navlink <?= $page==2 ? "active" : ""?>" href="<?=$BASE; ?>about-us">About Us</a></li>
              <li><a  class="nav-link <?= $page==7 ? "active" : ""?>" href="<?=$BASE;?>awards">Awards</a></li>
              <li><a  class="nav-link <?= $page==8 ? "active" : ""?>" href="<?=$BASE;?>careers">Careers</a></li>
            </ul>
          </li>
          <li><a  class="nav-link <?= $page==3 ? "active" : ""?>" href="<?=$BASE;?>news-events">News and Events</a></li>
          <li><a  class="nav-link <?= $page==4 ? "active" : ""?>" href="<?=$BASE;?>products">Products</a></li>
          <li><a  class="nav-link <?= $page==5 ? "active" : ""?>" href="<?=$BASE;?>brochures">Brochures</a></li>
          <li><a  class="nav-link <?= $page==6 ? "active" : ""?>" href="<?=$BASE;?>contact-us">Contact Us</a></li>
          <div><a href="https://panamed.com.ph/shop/" class="btn-get-started">Shop Now</a></div>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</div>
<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<!-- <script>
$(document).ready(function () {
  $(".nav li").removeClass("active");
  $('#home').addClass('active');
});
</script> -->