<?php

namespace Data;

abstract class Animal
{
    public string $name;
    public abstract function run();
    public abstract function eat(\AnimalFood  $food);
}

class Cat extends Animal{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
    public function eat(\AnimalFood $food)
    {
        // TODO: Implement eat() method.
        echo "Cat is eating".PHP_EOL;
    }
}

class Horse extends Animal{
    public function run(): void
    {
        echo "Horse $this->name is running" . PHP_EOL;
    }
    public function eat(\AnimalFood $food)
    {
        // TODO: Implement eat() method.
        echo"Horse is eating".PHP_EOL;
    }
}