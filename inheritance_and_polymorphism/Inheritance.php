<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Tomioka";
$manager->sayHi("Munakata");

$vp = new VicePresident();
$vp->name="Matsumura";
$vp->sayHi("Tomioka");

