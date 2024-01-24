<?php

require "controller/controller.session.php";
require "controller/controller.utility.php";

require "controller/controller.db.php";
require "admin/model/model.news-events.php";
require "admin/model/model.products.php";

$s = new Session();
$BASE = Utility::getBase();
$newsEvents = new NewsEvents();
$productsContent = new ProductsContent();


