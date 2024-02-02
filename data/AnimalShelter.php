<?php

namespace Data;

require_once "Animal.php";
interface AnimalShelter{
    function adopt(string $name): \Data\Animal;
}

class CatShelter implements AnimalShelter{
    function adopt(string $name): \Data\Cat{
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter{
    public function adopt(string $name): Horse{
        $horse = new Horse();
        $horse->name = $name;
        return $horse;
    }
}