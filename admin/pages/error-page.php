<?php
 $title = "404 - Page not Found | Panamed Philippines Inc."; 
require_once 'component/import.php';
require_once 'component/header.php';
// require_once 'component/navbar.php';
?>
<body class="bg-light">  
    <main>

    <section class="not-found">
      <div class ="container text-center p-5">
      <div class= "card-sm shadow border border-0 px-3 py-5">
      
        <img src ="<?=$BASE;?>assets/img/404.png" class="w-25 img-responsive mx-auto d-block">
        <h1><span class ="text-danger">404</span> - Page not found!</h1>
        <p class="mt-2">Oh dear, this link isn’t working. Don't worry, you can find lots about us in our <a href="<?= $BASE; ?>"><span class="panamed-color">homepage.</span></a></p></center>  
          <div class="d-flex align-items-center justify-content-center">
                <a href="<?=$BASE;?>" class="btn-get-started text-white">Take me Home</a>
            </div> 
        </div>
      </div>   
    </section>
  </main>
</body>