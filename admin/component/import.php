<?php

require "controller/controller.session.php";
require "controller/controller.utility.php";

$session = new Session();
$BASE = Utility::getBase();
$BASE_DIR = Utility::getBase(false);

// $session = new Session();
// $BASE = Utility::getBase();
// $BASE_DIR = Utility::getBase(false);

$isLoggedIn = $session->getSession('auth');

if(!$isLoggedIn) { header("location: ".$BASE_DIR."");}
    $user = $session->getSession("name");
?>
