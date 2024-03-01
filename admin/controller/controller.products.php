<?php

require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.products.php";

$productscontent = new ProductsContent();
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt');
$path = 'uploads/';
$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) { 

    case "updateProducts";
    $id = $_POST["id"];
    $title = $_POST["productName"];
    $status = $_POST["status"];
    $description = $_POST["products-content"];

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

    if (empty($img)){
        $products = $productscontent->updateContent($id, $title, $description, $status);
        // echo $id. "-" . $title . "-" $
        $response = array("message" => "Update Success");
        // echo json_encode($response);
    }
    else {
    // echo $title . "-" . $status . "-" . $img ."-" .$size . "-" .$file;
    $productsimg = $productscontent->updateContentfile($id, $title, $img, $description, $status);
    $response = array("message" => "Update Success");
    // echo json_encode($response);
    }
        break;
    

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

    case "deleteProduct";
        $id = $_POST["id"];
        $productsContent = $productsContent->deleteProduct($id);

        $response = array("message" => "Delete Success");
        break;

    default;
        header("Location: ../404.php");

}
echo json_encode($response);