<?php 
require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.user.php";

$user = new User(); 
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
      // $session->setSession("role", $user_accounts[6]);
       $session->setSession("name", $user_accounts[1]);
      $session->setSession("id", $user_accounts[0]);
      $response = array("message" => "Success Found");
      }


    break;
    default:
    header("Location:../page/error.php");
  }
  echo json_encode($response);
