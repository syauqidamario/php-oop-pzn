<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Seiji";
$manager->sayHi("Toshihiko");

$vp = new VicePresident();
$vp->name = "Keiichi";
$vp->sayHi("Toshihiko");