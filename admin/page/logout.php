<?php

require_once "controller/controller.session.php";
require_once "controller/controller.utility.php";

$Session = new Session();
$BASE = Utility::getBase();
$BASE_DIR = Utility::getBase(false);

$Session->sessionDie($BASE_DIR);
// die();
// session_start();
// session_unset();
// header ("location:<?= $BASE; /");
?>