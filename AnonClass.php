<?php

interface HelloThere{
    function sayHello():void;
}

$helloThere = new class("Anon Class") implements HelloThere{
    private string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    function sayHello():void{
        echo "Hello Anon Class $this->name" . PHP_EOL;
    }
};

$helloThere->sayHello();
