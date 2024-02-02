<?php

require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.careers.php";

$careers = new Careers();


$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) { 

    case "updateCareers";
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $status = $_POST["status"];
        $careers = $careers->updateCareers($id, $title, $content, $status);

        $response = array("message" => "Update Success");
        break;

    case "addCareers";
        // $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $sort_by = $_POST["sort_by"];
        $status = $_POST["status"];
        $careers = $careers->addCareers($title, $content, $sort_by, $status);

        $response = array("message" => "Success Insert");
        break;

    case "deleteCareers";
        $id = $_POST["id"];
        $careers = $careers->deleteCareers($id);

        $response = array("message" => "Delete Success");
        break;

    default;
        header("Location: ../404.php");

}
echo json_encode($response);