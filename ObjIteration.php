<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";

    public function getIterator()
    {
            yield "first" => $this->first;
            yield "second" => $this->second;
            yield "third" => $this->third;
            yield "fourth" => $this->fourth;
    }
}

$data = new Data();

foreach($data as $key => $value){
    echo "$key : $value" . PHP_EOL;
}

//Iterator is an interface for iterations.
//IteratorAggregate interface is used for manual iterations by override getIterator() function
