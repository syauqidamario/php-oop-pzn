<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Minato");
var_dump($company);
$company->programmer = new BackendProgrammer("Minato");
var_dump($company);
$company->programmer = new FrontendProgrammer("Kyouka");
var_dump($company);



