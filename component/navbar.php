<div id="header" class="fixed-top d-flex align-items-center header-transparent shadow">
  <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
    
        <h1 class="text-light"><a href="<?= $BASE; ?>"><span>  <img src ="<?= $BASE; ?>assets/img/logo.png"> </span></a></h1>
  
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <li class="waves-effect waves-light"><a class="nav-link  <?= $page==1 ? "active" : ""?>" href="<?=$BASE;?>">Home</a></li>
          <li class="dropdown">
          <a class="nav-link <?= $page==2 || $page==7 || $page==8 ? "active" : ""?>">About Us <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="waves-effect waves-light"><a class="navlink <?= $page==2 ? "active" : ""?>" href="<?=$BASE; ?>about-us">About Us</a></li>
              <li class="waves-effect waves-light"><a  class="nav-link <?= $page==7 ? "active" : ""?>" href="<?=$BASE;?>awards">Awards</a></li>
              <li class="waves-effect waves-light"><a  class="nav-link <?= $page==8 ? "active" : ""?>" href="<?=$BASE;?>careers">Careers</a></li>
            </ul>
          </li>
          <li class="waves-effect waves-light"><a class="nav-link <?= $page==3 ? "active" : ""?>" href="<?=$BASE;?>news-events/">News and Events</a></li>
          <li class="waves-effect waves-light"><a class="nav-link <?= $page==4 ? "active" : ""?>" href="<?=$BASE;?>products">Products</a></li>
          <li class="waves-effect waves-light"><a class="nav-link <?= $page==5 ? "active" : ""?>" href="<?=$BASE;?>brochures">Brochures</a></li>
          <li class="waves-effect waves-light"><a class="nav-link <?= $page==6 ? "active" : ""?>" href="<?=$BASE;?>contact-us">Contact Us</a></li>
          
        </ul>
        
        <a href="https://panamed.com.ph/shop/" class="btn-get-started waves-effect waves-light ms-4"><i class="bx bx-cart me-1"></i></box-icon> Shop Now</a>
        <!-- <i class="bi bi-list mobile-nav-toggle" i> -->

        <i class="bi bi-list mobile-nav-toggle" data-bs-toggle="offcanvas" data-bs-target="#navbarr"></i>
      </nav><!-- .navbar -->
      <div class="offcanvas offcanvas-end nav-bar" id="navbarr" tabindex="-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-3">
          <h3 class="offcanvas-title">Menu</h3>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item waves-effect waves-light">
            <a class="nav-link <?= $page==1 ? "active" : ""?>" href="<?=$BASE;?>">Home</a>
          </li>
    
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle fw-normal <?= $page==2 || $page==7 || $page==8 ? "active" : ""?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About us
            </a>
            <ul class="dropdown-menu shadow position-static">
              <li><a class="nav-link <?= $page==2 ? "active" : ""?> dropdown-item" href="<?=$BASE; ?>about-us">About Us</a></li>
              <li><a class="nav-link <?= $page==7 ? "active" : ""?> dropdown-item" href="<?=$BASE;?>awards">Awards</a></li>
              <li><a class="nav-link <?= $page==8 ? "active" : ""?> dropdown-item" href="<?=$BASE;?>careers">Careers</a></li>
            </ul>
          </li>
          <li class="nav-item waves-effect waves-light"><a class="nav-link <?= $page==3 ? "active" : ""?>" href="<?=$BASE;?>news-events">News and Events</a></li>
          <li class="nav-item waves-effect waves-light"><a class="nav-link <?= $page==4 ? "active" : ""?>" href="<?=$BASE;?>products">Products</a></li>
          <li class="nav-item waves-effect waves-light"><a class="nav-link <?= $page==5 ? "active" : ""?>" href="<?=$BASE;?>brochures">Brochures</a></li>
          <li class="nav-item waves-effect waves-light "><a class="nav-link <?= $page==6 ? "active" : ""?>" href="<?=$BASE;?>contact-us">Contact Us</a></li>
        </ul>
  
        </div>
      </div>
</nav>
</div>
</div>
<div class="container">

</div>
<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
