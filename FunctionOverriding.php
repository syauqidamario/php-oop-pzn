<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Toru";
$manager->sayHi("Kunio");

$vp = new VicePresident();
$vp->name = "Takahiro";
$vp->sayHello("Jun");
