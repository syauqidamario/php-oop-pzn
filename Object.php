<?php

require_once "data/Series.php";

$series = new Series();
var_dump($series);

$series = new Series;
$series->title = "Kamen Rider Gotchard";
//$series->series_producer = "Yosuke Minato";
$series->series_writer = "Hiroki Uchida";

echo "Title: {$series->title}" . PHP_EOL;
echo "Series Producer: {$series->series_producer}" . PHP_EOL;
echo "Series Writer: {$series->series_writer}" . PHP_EOL;