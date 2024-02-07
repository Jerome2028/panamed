<?php

require "controller/controller.session.php";
require "controller/controller.utility.php";
require "controller/controller.db.php";
require "model/model.news-events.php";
require "model/model.products.php";
require "model/model.careers.php";
require "model/model.user.php";

$session = new Session();
$newsEvents = new NewsEvents();
$products = new ProductsContent();
$careers = new Careers();
$userr = new User();
// $userid = $session->getSession("id");
//  $fname = $session->getSession("fname");
// $lname = $session->getSession("lname");
$userole = $session->getSession("role");
$userimg = $session->getSession("img");


$BASE = Utility::getBase();
$BASE_DIR = Utility::getBase(false);


$isLoggedIn = $session->getSession('auth');

if(!$isLoggedIn) { header("location: ".$BASE_DIR."");}

?>

<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

