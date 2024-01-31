<?php

require_once "data/Person.php";

$eko = new Person("Hotaro", "Japan");
$eko->name = "Hotaro";
$eko->sayHello("Ace");

$joko = new Person("Daichi", "Ozoraland");
$joko->name = "Daichi";
$joko->sayHello(null);

$eko->info();
$joko->info();