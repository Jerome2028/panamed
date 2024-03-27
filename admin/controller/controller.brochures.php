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
            $target_dir = "../../assets/img/brochures/thumbnail/";
            $img = $_FILES['brochureImg']['name'];
            $path = pathinfo($img);
            $ext = $path['extension'];
            $temp_name = $_FILES['brochureImg']['tmp_name'];
            $path_filename_ext = $target_dir.$img;
            move_uploaded_file($temp_name,$path_filename_ext);
        }

        if($_FILES['pdf-upload']['name']!="") {
            $target_dir = "../../assets/img/brochures/";
            $file = $_FILES['pdf-upload']['name'];
            $path = pathinfo($file);
            $ext = $path['extension'];
            $temp_name = $_FILES['pdf-upload']['tmp_name'];
            $path_filename_ext = $target_dir.$file;
            move_uploaded_file($temp_name,$path_filename_ext);
        }
        $brochures = $brochures->addContent($title, $img, $file, $sort_by, $status);

        $response = array("message" => "Insert Success");
        break;

    case "updateContent";
        $target_dirOne = "../../assets/img/brochures/thumbnail/";
        $img = $_FILES['brochureImg']['name'];
        $pathOne = pathinfo($img);
        $temp_nameOne = $_FILES['brochureImg']['tmp_name'];
        $path_filename_extOne = $target_dirOne.$img;
        move_uploaded_file($temp_nameOne,$path_filename_extOne);

        $target_dirTwo = "../../assets/img/brochures/";
        $file = $_FILES['pdf-upload']['name'];
        $pathTwo = pathinfo($file);
        $temp_nameOne = $_FILES['pdf-upload']['tmp_name'];
        $path_filename_extTwo = $target_dirTwo.$file;
        move_uploaded_file($temp_nameOne,$path_filename_extTwo);

        if(($file != "") && ($img != "")){
        $id = $_POST["id"];
        $title = $_POST["title"];
        $status = $_POST["status"];
        $b_img = $_POST["b_image"];
        $b_file = $_POST["b_file"];

        $brochures= $brochures->updateContent($id, $title, $img, $file, $status);
        $response = array ("message" => "Update Success");
        }

        elseif(($file == "") && ($img != "")){
        $id = $_POST["id"];
        $title = $_POST["title"];
        $status = $_POST["status"];
        $b_img = $_POST["b_image"];
        $b_file = $_POST["b_file"];
        $brochures= $brochures->updateContent($id, $title, $img, $b_file, $status);
        $response = array ("message" => "Update Success");
        }

        elseif(($file != "") && ($img == "")){
        $id = $_POST["id"];
        $title = $_POST["title"];
        $status = $_POST["status"];
        $b_img = $_POST["b_image"];
        $b_file = $_POST["b_file"];
        $brochures= $brochures->updateContent($id, $title, $b_img, $file, $status);
        $response = array ("message" => "Update Success");
        }
        
        else {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $status = $_POST["status"];
        $b_img = $_POST["b_image"];
        $b_file = $_POST["b_file"];

        $brochures= $brochures->updateContent($id, $title, $b_img, $b_file, $status);
        $response = array ("message" => "Update Success");
        }
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