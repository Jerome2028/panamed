<?php
 $title = "Contact-us | Panamed Philippines Inc."; 
 $bannerTitle = "Contact-us";
 $page = 6; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 require_once 'component/banner.php';
 $captcha = utility::generateRandomString();
 ?>

<!-- <body>   -->
  <main>
    <?php (require_once 'component/navbar.php'); ?>
    <section class="contact-us section-bg">
      <div class ="container">
        <form action="controller/controller.form.php?mode=contact" method ="POST" class="contact" id="contact-us">
        <div class="card px-5 py-5">
        <h4 class="panamed-color">Reach to us!</h4>
        <div class="row gx-5 pt-3">
      
          <div class="col-sm-6">
            <p class="input-container">
              <input type="text" name="name" class="login-input">
              <label for="" unselectable="on">Name</label>
            </p>
          </div>

          <div class="col-sm-6">
            <p class="input-container">
               <input type="text"  name="email" class="login-input">
              <label for="" unselectable="on">user@email.com</label>
            </p>
          </div>

          <div class="col-sm-6">
            <p class="input-container">
              <input type="text" name="company" class="login-input">
              <label for="" unselectable="on">Company</label>
            </p>
          </div>

          <div class="col-sm-6">
            <p class="input-container">
              <input type="text" name="cp" class="login-input">
              <label for="" unselectable="on">Contact Number</label>
            </p>
          </div>

          <div class="col-sm-6">
            <p class="input-container">
              <input type="text" name="country" class="login-input">
              <label for="" unselectable="on">Country</label>
            </p>
          </div>

          <div class="col-sm-6">
          <p class="input-container">
              <input type="text" name="zip" class="login-input">
              <label for="" unselectable="on">Zipcode</label>
            </p>
          </div>

          <div class="col-sm-6">
          <p class="input-container">
              <input type="text" name="messages" class="login-input">
              <label for="" unselectable="on">Type your Message here...</label>
            </p>
          </div>
          <div class="col-sm-12">
            <div class="col-sm-4 mt-3">
              <p>type <span class="captcha"><?php echo $captcha; ?></span> on the field below inorder to prove us that you are human</p>
              <input required type="hidden" name="ppi_captcha" value="<?php echo $captcha; ?>">
              <input required type="text" class="form-control mb-4 mt-3" name="input_captcha" id="" placeholder="<?php echo $captcha; ?>">
              <a class="btn-get-started waves-effect waves-light" type="button" data-action='submit' onclick='onSubmit()'>Submit</a>
            </div>
          </div>
          <script>
            function onSubmit() {
                $(".contact").trigger('submit');
            }
          </script>
        </div>
              <script src="assets/js/form.js"></script>
        </form>
        </div>
          </section>
          <section>
            <div class="container">
              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Main Office:</p>
              <p class="lh-office">488 G. Araneta Avenue,<br>
              corner Del Monte Avenue<br>
              Brgy. Sienna, Quezon City 1114<br>
              Philippines<br>
              (Beside the BPI bank) </p>
              <p class="lh-office">
              <b>Telephone:</b> +63 2 8559 9558<br>
              <b>Mobile:</b> +63 917 8066683<br>
              <b>Fax:</b> +63 2 8820 9780<br>
              <b>Email:</b> <a class="panamed-font fw-bold" href="mailto:info@panamed.com.ph">info@panamed.com.ph</a>
              </p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Pampanga:</p>
              <p class="lh-office">Unit 1 , 2nd Floor RGM Building , B. Mendoza St., Brgy Sto Rosario , San Fernando , Pampanga</p>
              <p class="lh-office">
              <b>Telephone:</b>(45) 963-7985<br>
              <b>Fax:</b>(45) 435-1194<br>
              </p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Laguna:</p>
              <p class="lh-office">Room 403 Dan Hedan Bldg., Brgy. 1 Crossing, Calamba Laguna<br> </p>
              <p class="lh-office">
              <b>Telephone:</b>(49) 545-4249<br>
              <b>Fax:</b>(49) 545-4250</p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Iloilo:</p>
              <p class="lh-office">3rd Floor Golden Commercial Center Iznart St., Iloilo City<br> </p>
              <p class="lh-office">
              <b>Telephone:</b>(33) 338-2522<br>
              <b>Fax:</b>(33) 335-0825<br>
              </p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Bacolod:</p>
              <p class="lh-office">Room 203 2nd Floor JL Bldg., Burgos St. Brgy 19, Bacolod City<br> </p>
              <p class="lh-office">
              <b>Telephone:</b>(34) 458-3139<br>
              <b>Fax:</b>(34) 458-31395<br>
              </p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Cebu:</p>
              <p class="lh-office">A-2 J. King and Son's Warehouse, Complex Holy Name St., Mabolo, Cebu City<br> </p>
              <p class="lh-office">
              <b>Telephone:</b> (32) 231-5175<br>
              <b>Fax:</b>(32) 238-3878<br>
              </p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Cagayan De Oro:</p>
              <p class="lh-office">Unit 8, 2nd Floor Montblanc Bldg., No. 848 Burgos-Chaves St., Cagayan de Oro<br> </p>
              <p class="lh-office">
              <b>Telephone:</b>(8822) 721-011<br>
              <b>Fax:</b>(88) 856-4983<br>
              </p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Davao:</p>
              <p class="lh-office">Unit A-19, J. King & Son's Warehouse Complex, Purok 13, Bugac, Maa, Davao City<br> </p>
              <p class="lh-office">
              <b>Telephone:</b>(82) 295-6118<br>
              <b>Fax:</b>(82) 295-3924<br>
              </p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> Zamboanga:</p>
              <p class="lh-office">Unit 3, 2nd Floor Jazmin Tower, Mayor Jaldon St. Zamboanga City<br> </p>
              <p class="lh-office">
              <b>Telephone:</b>(62) 955-8767<br>
              <b>Fax:</b>(62) 955-8767<br>
              </p>
              <hr class="dashed">

              <p class ="fw-bold"><i class="fa-solid fa-location-dot"></i> La Union:</p>
              <p class="lh-office">No. 15 South Quezon Avenue, National Highway, Catbangen, San Fernando, La Union<br> </p>
              <hr class="dashed">
            </div>
          </section>    
    <?php include_once 'component/footer.php';?>

  </main>
<!-- </body> -->