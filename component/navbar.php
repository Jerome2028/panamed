<div id="header" class="fixed-top d-flex align-items-center header-transparent shadow">
<div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light"><a href="<?= $BASE; ?>"><span>  <img src ="<?= $BASE; ?>assets/img/logo.png"> </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link <?php if($page==1) {echo "active";} else {echo"";}?>" href="<?=$BASE;?>">Home</a></li>
          <li class="dropdown">
          <a class="nav-link <?php if(($page==2) || ($page==7) || ($page==8))  {echo "active";} else {echo"";}?>">About Us <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="navlink <?php if($page==2) {echo "active";} else {echo"";}?>" href="<?=$BASE; ?>about-us">About Us</a></li>
              <li><a  class="nav-link <?php if($page==7) {echo "active";} else {echo"";}?>" href="<?=$BASE;?>awards">Awards</a></li>
              <li><a  class="nav-link <?php if($page==8) {echo "active";} else {echo"";}?>" href="<?=$BASE;?>careers">Careers</a></li>
            </ul>
          </li>
          <li><a  class="nav-link <?php if($page==3) {echo "active";} else {echo"";}?>" href="<?=$BASE;?>news-events">News and Events</a></li>
          <li><a  class="nav-link <?php if($page==4) {echo "active";} else {echo"";}?>" href="<?=$BASE;?>products">Products</a></li>
          <li><a  class="nav-link <?php if($page==5) {echo "active";} else {echo"";}?>" href="<?=$BASE;?>brochures">Brochures</a></li>
          <li><a  class="nav-link <?php if($page==6) {echo "active";} else {echo"";}?>" href="<?=$BASE;?>contact-us">Contact Us</a></li>
          <li><a href=""><box-icon name='cart'></box-icon> Shop Now</a></li>
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