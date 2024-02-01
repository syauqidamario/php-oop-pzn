<?php

namespace Data;

abstract class Location
{
    public string $name;
}

class City extends Location{

}

class Province extends Location{

}

class Village extends Location{

}