<?php

$matches = [];
$result = (bool)preg_match_all("/kazu|sa|ga|wa/o", "Kazuo Sagawa", $matches);
$result = preg_replace("/anri|minami/o", "***", "Anri Minami is cool");
$result = preg_split("/[\s,-]", "Eko Kurniawan Khannedy, Programmer Zaman Now");

var_dump($result);
