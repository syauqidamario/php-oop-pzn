<?php

namespace Data;

interface HasBrand{
    function getBrand(): string;
}

interface IsMaintenance{
    function isMaintenance():bool;
}

interface Car extends HasBrand
{
    function drive():void;
    function getTire():int;
}

class Nissan implements Car, IsMaintenance {
    function drive():void{
        echo "Driving a Nissan" . PHP_EOL;
    }

    function getTire():int{
        return 4;
    }

    public function getBrand():string{
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        // TODO: Implement isMaintenance() method.
        return false;
    }
}
