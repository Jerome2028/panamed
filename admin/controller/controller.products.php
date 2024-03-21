<?php

require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.products.php";

$productscontent = new ProductsContent();
// $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt');
$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) { 

    case "addProduct":
    $title = $_POST["products-title"];
    $description = $_POST["products-content"];
    $status = $_POST["status"];
    
    if($_FILES['productsImg']['name']!=""){
    $target_dir = "../../assets/img/products/";
    $img = $_FILES['productsImg']['name'];
    $path = pathinfo($img);
    $ext = $path['extension'];
    $temp_name = $_FILES['productsImg']['tmp_name'];
    $size = filesize($temp_name);
    $path_filename_ext = $target_dir.$img;
    move_uploaded_file($temp_name,$path_filename_ext);
    }
    $products = $productscontent->addProduct($title, $description, $img, $status);
    $response = array("message" => "Success Insert");
    break;

    case "updatesProduct":
    $id = $_POST["id"];
    $title = $_POST["productName"];
    $status = $_POST["status"];
    $productsImgValue = $_POST['productsImgValue'];
    $description = $_POST["products-content"];

    if($_FILES['productsImg']['name']!="") {
    $target_dir = "../../assets/img/products/";
    $img = $_FILES['productsImg']['name'];
    $path = pathinfo($img);
    $ext = $path['extension'];
    $temp_name = $_FILES['productsImg']['tmp_name'];
    $size = filesize($temp_name);
    $path_filename_ext = $target_dir.$img;
    move_uploaded_file($temp_name,$path_filename_ext);
    }

    if (empty($img)){
    $products = $productscontent->updateContent($id, $title, $productsImgValue, $description, $status);
    $response = array("message" => "Update Success");
    }
    else {
    $products = $productscontent->updateContent($id, $title, $img, $description, $status);
    $response = array("message" => "Update Success");
    }
    break;

    case "deleteProduct":
        $id = $_POST["id"];
        $products = $productscontent->deleteProduct($id);

        $response = array("message" => "Delete Success");
        break;

    default;
        header("Location: ../404.php");

}
echo json_encode($response);