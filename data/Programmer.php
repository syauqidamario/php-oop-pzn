<?php
class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer{}
class FrontendProgrammer extends Programmer{}

class Company
{
    var Programmer $programmer;
}

function sayHello(Programmer $programmer)
{
    if($programmer instanceof BackendProgrammer){
        echo "Hello Backend Programmer $programmer->name-san" . PHP_EOL;
    }
    else if($programmer instanceof FrontendProgrammer){
        echo "Hello Frontend Programmer $programmer->name-san" . PHP_EOL;
    }
    else if($programmer instanceof Programmer){
        echo "Hello Programmer $programmer->name-san" . PHP_EOL;
    }
}

sayHello(new Programmer("Hikari"));
sayHello(new BackendProgrammer("Spana"));
sayHello(new FrontendProgrammer("Hikaru"));