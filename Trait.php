<?php

require_once "data/SayGoodbye.php";

use Data\Traits\{Person, SayHi, SayGoodBye};

$person = new Person();
$person->goodBye("Akio");
$person->hello("Hirochika");

$person->name = "Masaki";
var_dump($person);

$person->run();
