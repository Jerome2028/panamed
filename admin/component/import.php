<?php

require "controller/controller.session.php";
require "controller/controller.utility.php";
require "controller/controller.db.php";
require "model/model.news-events.php";
require "model/model.products.php";
require "model/model.careers.php";
require "model/model.user.php";

$session = new Session();
$products = new ProductsContent();
$newsEvents = new NewsEvents();
$careers = new Careers();
$userr = new User();

$fname = $session->getSession("First_name");
$userole = $session->getSession("role");
$userid = $session->getSession("id");


$BASE = Utility::getBase();
$BASE_DIR = Utility::getBase(false);


$isLoggedIn = $session->getSession('auth');

if(!$isLoggedIn) { header("location: ".$BASE_DIR."");}

?>

<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

