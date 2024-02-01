<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
        return new ArrayIterator([
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth,
        ]);
    }
}

$data = new Data();

foreach($data as $key => $value){
    echo "$key : $value" . PHP_EOL;
}

//Iterator is an interfacte for iterations.
//IteratorAggregate interface is used for manual iterations by override getIterator() function
