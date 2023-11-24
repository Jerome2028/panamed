<?php
 $title = "404 - Page not Found | Panamed Philippines Inc."; 
require_once 'component/import.php';
require_once 'component/header.php';
require_once 'component/navbar.php';
?>
      <body>  
          <main>
          <?php (require_once 'component/navbar.php'); ?>
          <section class="not-found">
            <div class ="container">
          <center><h1>404 - Page not found</h1>
        <p class="mt-2 text-center">Oh dear, this link isn’t working. Don't worry, you can find lots about us in our <a href="<?= $BASE; ?>"><span class="panamed-color">homepage.</span></a></p></center>
            </div>    
      </section>
          <?php include_once 'component/footer.php';?>
        </main>
      </body>