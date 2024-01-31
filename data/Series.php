<?php

class Series
{
    const WRITER = "Keiichi Hasegawa";
    var string $title;
    var ?string $series_writer = null;
    var string $series_producer = "Yosuke Minato";

    function seriesTitle(string $title){
        if(is_null($title)){
            echo "The series is titled $title" . PHP_EOL;
        }
        else{
            echo "The series after $title is {$this->title}" . PHP_EOL;
        }

    }
}
