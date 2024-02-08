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
      // var_dump($user_accounts);
      $session->setSession("auth", true);
      $session->setSession("role", $user_accounts[3]);
      $session->setSession("fname", $user_accounts[1]);
      //  $session->setSession("lname", $user_accounts[2]);
      //  $session->setSession("img", $user_accounts[4]);

      $response = array("message" => "Success Found");
      }
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
          //   echo '<a href="assets/static/Manuals/'. $row["name"] . '" class="list-group-item list-group-item-action border-1">' . $row['name'] . '</a>';
          echo ' 
          <div class="col-sm-3 d-flex align-items-stretch">
            <div class="p-3 shadow mb-4 border-0 ">

            <div class="py-3">
            <a href="https://panamed.com.ph/shop/index.php?route=product/search&search='.$row["ppi_product_name"].'">
            <img src ="admin/assets/products/'.$row["ppi_product_image"].'" class="w-100 mb-3"><br>
              <div class="d-sm-flex align-items-center justify-content-between">
                    <h6 class="m-0 fw-bold">
                        '. $row["ppi_product_name"] . '>
                    </h6>
              </div>
            </div>
            </div>
            </a>
          </div>';
          }
          echo '
              </div>
            </div>
          </div>';
          $response = array ("message" => "Search Success");
        } else {
          echo'<h3 class="text-danger text-center fw-bold">Not Found!</h3>';
          
        }  
        break;
    default:
    header("Location:../page/error.php");
  }
  echo json_encode($response);
