<?php 
require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.user.php";

$user = new User();
$liveSearch = new User();
$session = new Session();  
$user_name = $session->getSession("name");


$mode = isset($_GET['mode']) ? $_GET['mode'] : 'none';
switch($mode){
    
     case 'login':
      $user_email = $_POST["user_email"];
      $user_password = $_POST["user_password"];
      $user_accounts = $user->login($user_email, $user_password);

      if ($user_accounts <= 0){
          $response = array("message" => "Invalid");
      }
      else {

      $session->setSession("auth", true);
      $session->setSession("First_name", $user_accounts[1]);
      $session->setSession("id", $user_accounts[0]);
      $session->setSession("role", $user_accounts[3]);
      
      //  $session->setSession("lname", $user_accounts[2]);
      //  $session->setSession("img", $user_accounts[4]);

      $response = array("message" => "Success Found");
      }
      echo json_encode($response);
    break;

    case 'search':
      $input = $_POST['input'];
      $results = $liveSearch->getManualsLive($input);
      // $results= new  array[];
      if ($results) {
          echo '    
          <div class="row">
              <div class="">
                  <div class="card-body row">
         ';
          foreach ($results as $row) {
          echo ' 
          <div class="col-sm-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" data-aos-delay="fade-up">
            <div class="p-3 shadow mb-4 border-0 ">
              <div class="py-3">
                <img src ="../admin/assets/img/products/'.$row["ppi_product_image"].'" class="w-100 mb-3">
                <div class="d-sm-flex align-items-center justify-content-between">
                  <h6 class="m-0 fw-bold">
                      '. $row["ppi_product_name"] . '
                  </h6>
                </div>
              </div>
              <a class="btn btn-get-started w-100" href="?product=<?=$id;?>">View Product</a>
            </div>
          </div>';
          }
          echo "
              </div>
            </div>
          </div>";
          
        } else {
          echo'<h3 class="text-danger text-center fw-bold">Not Found!</h3>';
          
        }  
        // $response = array("message" => "Search Success");
        break; 
    default:
    header("Location:../page/error.php");
  }

