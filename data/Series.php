<?php

class Series
{
    var string $title;
    var ?string $series_writer = null;
    var string $series_producer = "Yosuke Minato";

    function seriesTitle(string $title){
        echo "The series is titled $title" . PHP_EOL;
    }
}
