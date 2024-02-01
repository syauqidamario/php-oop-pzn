<?php

$array = [
    "firstName" => "Kazuo",
    "lastName" => "Sagawa"
];

$obj = (object)$array;

var_dump($obj);

echo $obj->firstName . PHP_EOL;
echo $obj->lastName . PHP_EOL;

$arrayAgain = (array) $obj;
var_dump($arrayAgain);

require_once "data/Person.php";

$person = new Person("Kazuo", "Tsuburaya Pro");
var_dump($person);
