<?php

//use itu untuk import class, function, dan constant
//ini utk menghindari duplikasi karena menyebut namespace yg sama berkali-kali
require_once "data/Conflict.php";
require_once "data/Helper.php";

//use Data\One\Conflict as Conflict1;
//use Data\Two\Conflict as Conflict2;
use Data\One\{Conflict as Conflict1, Conflict as Conflict2};
//use function Helper\helpMe as help;
use function Helper\{helpMe as help};
//use const Helper\APPLICATION as APP;
use const Helper\{APPLICATION as APP};

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();
echo APP . PHP_EOL;

//Alias = making other name of a class/function/constant
//Group use = a PHP feature to import more than one classes, functions, and constants on one use syntax


