<?php

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Mochi");
$cat->eat(new AnimalFood());

$horseStable = new \Data\DogShelter();
$horse = $horseStable->adopt("Bruno");
$horse->eat(new AnimalFood());