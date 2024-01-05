<?php

require_once "controller/controller.session.php";
require_once "controller/controller.utility.php";

$session = new Session();
$BASE = Utility::getBase();
$BASE_DIR = Utility::getBase(false);

$session->sessionDie($BASE_DIR."");
die();
