<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = " ", string $title = "Manager"){
        $this->name = $name;
        $this->title = $title;
    }

    function sayHi(string $name){
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager{
    public function __construct(string $name = " "){
        parent::__construct($name, "VP");
    }

    function sayHi(string $name){
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}