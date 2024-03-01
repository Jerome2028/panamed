<?php

require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.brochures.php";

$brochures = new Brochures();
$response = [];
$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) { 

    case "addBrochure";
        // $id = $_POST["id"];
        $title = $_POST["brochure-name"];
        $sort_by = $_POST["sort_by"];
        $status = $_POST["status"];
        
        if($_FILES['brochureImg']['name']!="") {
            $target_dir = "...admin/assets/img/brochures/thumbnail/";
            $img = $_FILES['brochureImg']['name'];
            $path = pathinfo($img);
            $ext = $path['extension'];
            $temp_name = $_FILES['brochureImg']['tmp_name'];
            $path_filename_ext = $target_dir.$img;
            move_uploaded_file($temp_name,$path_filename_ext);
        }

        if($_FILES['pdf-upload']['name']!="") {
            $target_dir = "../assets/img/brochures/";
            $file = $_FILES['pdf-upload']['name'];
            $path = pathinfo($file);
            $ext = $path['extension'];
            $temp_name = $_FILES['pdf-upload']['tmp_name'];
            $path_filename_ext = $target_dir.$file;
            move_uploaded_file($temp_name,$path_filename_ext);
        }
   $brochures = $brochures->addContent($title, $img, $file, $sort_by, $status);
//    echo $title . "-" . $status . "-" . $img ."-" .$size . "-" .$file;

        $response = array("message" => "Insert Success");
        break;

    case "updateContent";
        $id = $_POST["id"];
        $title = $_POST["productName"];
        $status = $_POST["status"];

        if($_FILES['productsImg']['name']!="") {
            $target_dir = "../assets/img/brochures/thumbnail/";
            $img = $_FILES['productsImg']['name'];
            $path = pathinfo($img);
            $ext = $path['extension'];
            $temp_name = $_FILES['productsImg']['tmp_name'];
            $size = filesize($temp_name);
            $path_filename_ext = $target_dir.$img;
            move_uploaded_file($temp_name,$path_filename_ext);
        }

        if (empty($img) || empty($file)){
            $brochures = $brochures->updateContentFile($id, $title, $status);
            $response = array("message" => "Update Success");
            // echo json_encode($response);
        }
        else {
        // echo $title . "-" . $status . "-" . $img ."-" .$size . "-" .$file;
        $brochures = $brochures->updateContent($id, $title, $img , $file, $status);
        $response = array("message" => "Update Success");
        // echo json_encode($response);
        }
            $response = array("message" => "Update Success");
        break;

    case "deleteBrochures";
        $id = $_POST["id"];
        $brochures = $brochures->deleteBrochures($id);

        $response = array("message" => "Success Delete");
        break;

        default;
        header("Location: ../error-page");
}
echo json_encode($response);