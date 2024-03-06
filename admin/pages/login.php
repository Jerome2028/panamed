
<?php
    date_default_timezone_set("Asia/Manila");
    $title = "Panamed - Admin"; 
    require_once "controller/controller.utility.php";
    require_once "controller/controller.session.php";

    $session = new Session();

    $BASE = Utility::getBase();
    $BASE_DIR = Utility::getBase(false);

    if($session->getSession('auth')) { header("location: ".$BASE_DIR. "dashboard/"); die(); }
    require_once 'component/header.php'; 
?>
<section class="login-dashboard">
    <div class="container-fluid p-0">
        <div class="body-bg"></div>
        <div class ="container">
            <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="card text-dark bg-light shadow w-100 border-0 rounded-0" style="max-width: 50rem;">
                    <div class="row">   
                        <div class="col-sm-6 p-5">
                            <img src ="<?= $BASE; ?>assets/img/logo.png" class="w-50 d-block mx-auto mb-3">
                            <form action ="controller/controller.login.php?mode=login" autocomplete="off" id="login" method ="POST" class="login">
                                <label for="cname" class="form-label">Username</label>
                                <input type="text" id="user_email" name='user_email' class="form-control rounded-0" placeholder="Enter user name here" autocomplete="off">
                                <label for="cname" class="form-label mt-3">Password</label>
                                <input type="password" id="user_password" name='user_password' class="form-control rounded-0" placeholder="Enter password here" autocomplete="off">
                                <button class="mt-3 btn btn-dark w-50 m-auto d-block p-1 waves-effect waves-light" type="button" onclick = 'submitdata()' data-action='submit'><span class><i class="bi bi-box-arrow-in-right"></i>&nbsp; Log in</span></button>
                            </form>    
                        </div>
                        <div class="col-sm-6 m-0 p-0">
                            <img src ="<?= $BASE; ?>assets/img/building.jpg" class="w-100 h-100 img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</html>
<script>
    function submitdata(token) {
        $(".login").trigger('submit');
        }
    </script>
<script type="text/javascript" src="<?= $BASE; ?>assets/js/login.js"></script>