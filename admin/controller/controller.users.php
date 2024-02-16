<?php
require_once "controller.db.php";
require_once "../model/model.user.php";

$user = new User();
$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode){

    case "updateProfile";

    $id = $_POST["profile-id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    
     if($_FILES['imgInput']['name']) {
        $target_dir = "../assets/img/products/userProfile/";
        $file = $_FILES['imgInput']['name'];
        $path = pathinfo($file);
        $ext = $path['extension'];
        $temp_name = $_FILES['imgInput']['tmp_name'];
        $path_filename_ext = $target_dir.$file;
        move_uploaded_file($temp_name,$path_filename_ext);
    }

        // echo $fname .' - '. $lname .' - '. $file .' - '. $id;
        
        if (empty($file)){
            $user->updateProfileInfo($fname, $lname, $id);
        }
        else {
            $user->updateProfileWithImg($fname, $lname, $file, $id); 
        }
        // $user->updateProfile($fname, $lname, $file, $id);
        $response = array("message" => "Success");
 
    break;
}
echo json_encode($response);
?>