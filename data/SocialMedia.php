<?php

//The word "final" is used so the class couldn't be inherited.

class SocMed{
    public string $name;
}

class FB extends SocMed{
    final public function login(string $username, string $password):void{

    }
}

//This class, "FB" could be overrode

//class FakeFB extends FB{
    //public function login(string $username, string $password):void{}
//}

//The class "FakeFB" can't be inherited.
