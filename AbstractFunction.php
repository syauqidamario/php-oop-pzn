<?php

require_once "data/Animal.php";

use Data\Cat;

$cat = new Cat();
$cat->name = "Yuna";
$cat->run();

$dog = new Cat();
$dog->name = "Tsubasa";
$dog->run();