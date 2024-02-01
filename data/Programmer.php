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
    echo "Hi $programmer->name" . PHP_EOL;
}

sayHello(new Programmer("Hikari"));
sayHello(new BackendProgrammer("Spana"));
sayHello(new FrontendProgrammer("Hikaru"));