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

<body>  
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
              <input type="text" name="message" class="login-input">
              <label for="" unselectable="on">Type your Message here...</label>
            </p>
          </div>
          <div class="col-sm-12">
            <div class="col-sm-4 mt-3">
              <p>type <span class="captcha"><?php echo $captcha; ?></span> on the field below inorder to prove us that you are human</p>
              <input required type="hidden" name="ppi_captcha" value="<?php echo $captcha; ?>">
              <input required type="text" class="form-control mb-4 mt-3" name="input_captcha" id="" placeholder="<?php echo $captcha; ?>">
              <a class="btn-get-started" type="button" data-action='submit' onclick='contactus()'>Submit</a>
            </div>
          </div>
          <script>
            function contactus(token) {
                $("#contact-us").trigger('submit');
            }
          </script>
        </div>
              <script src="assets/js/form.js"></script>
        </form>
        </div>
      </div>    
  </section>
  <script>
    $(function() {
    $(".contact").on("submit", function(e) {

        e.preventDefault();

        var error = false; var message = '';
     
        var ppi_captcha = $(this).find("input[name='ppi_captcha']").val();
        var input_captcha = $(this).find("input[name='input_captcha']").val();
        var name = $(this).find("input[name=name]").val();
        var cp = $(this).find("input[name=cp]").val();
        var message = $(this).find("input[name=message]").val();
        var email = $(this).find("input[name=email]").val();
        
        if (ppi_captcha != input_captcha) {
            error = true;
            message = 'Please Retype the captcha correctly';
        }
        if (name== "" )||cp== "" || message == ""{
          error = true;
          message = 'Please enter Required value';
        }
        if (email == "") {
            error = true;
            message = 'Email Required';
        }

        if (error) {
          const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
          }
        });
        Toast.fire({
          icon: "error",
          title: message
        });
            return
        }

        $(".contact, body").css({
            opacity: "0.5",
            cursor: "wait"
        });

        var $inputs = $(this).find("input, select, button, textarea");
        var action = $(this).attr("action");
        var type = $(this).attr("method");
        var formData = new FormData(this);

        $inputs.prop("disabled", true);
        window.onbeforeunload = function() {
            return "Are you sure you want to navigate away from this page?";
        };
    
        $.ajax({
            url: action,
            type: type,
            data: formData,
            success: function(data) {
            var responseVal = jQuery.parseJSON(data);
                
                window.onbeforeunload = null;

                $(".contact, body").css({
                    opacity: "1",
                    cursor: "auto"
                });

                $inputs.prop("disabled", false);
                $(":submit").val("submit");

                const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "success",
                title: "Signed in successfully"
              });
                
                $inputs.val("");

                if(data.toLowerCase().trim() == "action complete") {
                    console.log('success');
                    window.location.href = "thank_you.php";
                    return
                }

            },
            cache: false,
            contentType: false,
            processData: false
        });
    
});
});
  </script>
    <?php include_once 'component/footer.php';?>

  </main>
</body>