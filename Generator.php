<?php

function getOdd(int $max): Iterator{
    for($i = 0; $i <= $max; $i++){
        if($i % 2 == 1){
            yield $i;
        }
    }
}

$odd = getOdd(100);
foreach($odd as $value){
    echo "Odd $value" . PHP_EOL;
}
