<?php

require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.testimonials.php";

$testimonials = new Testimonials();
$response = [];
$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) {
    case 'update':
    $id = $_POST['id'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];



    if($_FILES['testimonialsImg']['name']) {
        $target_dir = "../../assets/img/testimonials/";
        $img = $_FILES['testimonialsImg']['name'];
        $path = pathinfo($img);
        $ext = $path['extension'];
        $temp_name = $_FILES['testimonialsImg']['tmp_name'];
        $path_filename_ext = $target_dir.$img;
        move_uploaded_file($temp_name,$path_filename_ext);
    }
    $star = $_POST['rate'];
    $status = $_POST['status'];

    // echo $status;
    // echo $id. '-' .$name. '-' .$comment. '-' .$img.'-' .$star. '-' .$status;
    $testimonials = $testimonials->updateContent($id, $name, $comment, $img, $star, $status);

    $response = array("message"=>"Testimony Updated");
    break;
 }
echo json_encode($response);
