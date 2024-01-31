<?php

class Manager
{
    var string $name;

    function sayHi(string $name){
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager{

}