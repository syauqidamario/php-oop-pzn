<?php

$dateTime = new DateTime();
$dateTime->setDate(1999, 6, 11);
$dateTime->setTime(10, 11, 12, 0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu Saat Ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2024-02-02 14:02:26", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}

//Date interval - manipulasi waktu & tanggal sebagian saja, misal cuma nambah 1 tahun/mengurai beberapa hari
//DateTimeZone - untuk menyesuaikan waktu sesuai timezone di konfigurasi date.timezone
//Format DateTime = utk membuat representasi string DateTime, argumennya adalah format string utk manipulasi cara menampilkan string format waktu
//Parase DateTime = parsing string menjadi DateTime sesuai format yg diinginkan