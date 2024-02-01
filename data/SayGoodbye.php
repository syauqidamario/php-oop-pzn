<?php
namespace Data\Traits;

trait SayGoodBye{
    function goodBye(?string $name):void{
        if(is_null($name)){
            echo "Farewell" . PHP_EOL;
        }
        else{
            echo "Farewell $name" . PHP_EOL;
        }
    }
}

trait SayHi{
    function hello(?string $name):void{
        if(is_null($name)){
            echo "Hello there" . PHP_EOL;
        }
        else{
            echo "Hello there, $name" . PHP_EOL;
        }
    }
}

trait HasName{
    public string $name;
}

trait CanRun{
    public abstract function run():void;
}

class ParentPerson{
    public function goodBye(?string $name):void{
        echo "Farewell in person" . PHP_EOL;
    }

    public function hello(?string $name):void{
        echo "Hello in person" . PHP_EOL;
    }
}

trait All{
    use SayGoodBye, SayHi, HasName, CanRun;
}

class Person extends ParentPerson{
    use All;
    use SayGoodBye, SayHi, HasName, CanRun{
        //can be overrode
        //hello as private;
        //goodBye as private;
    }

    public function run():void{
        echo "Person $this->name is running" . PHP_EOL;
    }
}
