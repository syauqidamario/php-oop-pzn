<?php

class Zero{
    private array $properties = [];

    public function __call($name, $arguments){
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments){
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }

    public function __get($name){
        return $this->properties[$name];
    }

    public function __set($name, $value){
        $this->properties[$name] = $value;
    }

    public function __isset($name){
        return isset($this->properties[$name]);
    }

    public function __unset($name){
        unset($this->properties[$name]);
    }
}

$zero = new Zero();
$zero->firstName = "Haruki";
$zero->lastName = "Natsukawa";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

$zero->sayHello("Haruki", "Natsukawa");
Zero::sayHello("Haruki", "Natsukawa");