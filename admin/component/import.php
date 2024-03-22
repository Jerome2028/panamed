<?php

require "controller/controller.session.php";
require "controller/controller.utility.php";
require "controller/controller.db.php";
require "model/model.testimonials.php";
require "model/model.news-events.php";
require "model/model.brochures.php";
require "model/model.products.php";
require "model/model.careers.php";
require "model/model.user.php";


$testimonials = new Testimonials();
$products = new ProductsContent();
$newsEvents = new NewsEvents();
$brochures = new Brochures();
$session = new Session();
$careers = new Careers();
$userr = new User();

$fname = $session->getSession("First_name");
$Userlname = $session->getSession("Last_name");
$userid = $session->getSession("id");


$BASE = Utility::getBase();
$BASE_DIR = Utility::getBase(false);

$isLoggedIn = $session->getSession('auth');
if(!$isLoggedIn) { header("location: ".$BASE_DIR."");}

$userole = $session->getSession("role");
$loggedInRoleString = Utility::getRoleString($userole);
// $loggedInName = str_replace("_", " ", $session->getSession('admin_name'));

$isMarketing = ($userole == 3) ? true : false;
$isAdmin = ($userole == 5) ? true : false;
$isHr = ($userole == 2) ? true : false;

?>

