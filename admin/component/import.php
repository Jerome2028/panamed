<?php

require "controller/controller.session.php";
require "controller/controller.utility.php";
require "controller/controller.db.php";
require "model/model.news-events.php";
require "model/model.products.php";

$session = new Session();
$newsEvents = new NewsEvents();
$productsContent = new ProductsContent();
$BASE = Utility::getBase();
$BASE_DIR = Utility::getBase(false);


$isLoggedIn = $session->getSession('auth');

if(!$isLoggedIn) { header("location: ".$BASE_DIR."");}

?>
