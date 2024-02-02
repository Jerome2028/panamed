<?php

require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.products.php";

$productsContent = new ProductsContent();
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt');
$path = 'uploads/';
$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) { 

    case "updateProducts";
        if($_FILES['img']['name']!="") {
            $target_dir = "../assets/img/uploads/communication-arts/";
            $file = $_FILES['img']['name'];
            $path = pathinfo($file);
            $ext = $path['extension'];
            $temp_name = $_FILES['img']['tmp_name'];
            $path_filename_ext = $target_dir.$file;

     
            $id = $_POST["products-id"];
            $title = $_POST["products-title"];
            $content = $_POST["products-content"];
            // $img = $_POST["image"];
            $status = $_POST["status"];

            move_uploaded_file($temp_name,$path_filename_ext);
            $newsEvents = $newsEvents->updateContent($id, $title,  $img, $content, $status);

        $response = array("message" => "Update Success");
        break;
    }

    case "addProduct";
    // if(!empty($_POST['products-title']) || !empty($_POST['products-content']) || $_FILES['image']){
        $id = $_POST["id"];
        $title = $_POST["products-title"];
        $content = $_POST["products-content"];
        $status = $_POST["status"];
        $filename = $_FILES['file']['name'];
        $location = "upload/".$filename;
        $uploadOk = 1;

        /* Valid Extensions */
        $valid_extensions = array("jpg","jpeg","png");
        /* Check file extension */
        if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
        $uploadOk = 0;
        }
        $productsContent = $productsContent->addProduct($title, $content, $path, $status);
        
        $response = array("message" => "Success Insert");
        break;
    // }

    case "updateCourse";
        $course_id = $_POST["course_id"];
        $course = $_POST["course"];
        $sort_by = $_POST["sort_by"];
        $status = $_POST["status"];
        $communicationArts = $communicationArts->updateCourse($course_id, $course, $sort_by, $status);

        $response = array("message" => "Update Success");
        break;

    case "deleteProduct";
        $id = $_POST["id"];
        $productsContent = $productsContent->deleteProduct($id);

        $response = array("message" => "Delete Success");
        break;

    default;
        header("Location: ../404.php");

}
echo json_encode($response);