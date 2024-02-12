<?php

require_once "controller.db.php";
require_once "controller.session.php";
require_once "../model/model.news-events.php";

$newsEvents = new NewsEvents();


$mode = isset($_GET["mode"]) ? $_GET["mode"] : NULL;

switch($mode) { 

    case "updateContent";
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $status = $_POST["status"];
        $newsEvents = $newsEvents->updateContent($id, $title, $content, $status);

        $response = array("message" => "Update Success");
        break;

    case "addEvents";
        // $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $sort_by = $_POST["sort_by"];
        $status = $_POST["status"];
        $newsEvents = $newsEvents->addEvents($title, $content, $sort_by, $status);

        $response = array("message" => "Success Insert");
        break;

    case "deleteNews";
        $id = $_POST["id"];
        $newsEvents = $newsEvents->deleteNews($id);

        $response = array("message" => "Delete Success");
        break;

    default;
        header("Location: ../404.php");

}
echo json_encode($response);