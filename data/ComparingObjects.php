<?php
require_once "Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Yuji";
$student1->value = 40;

$student2 = new Student();
$student2->id = "2";
$student2->name = "Kengo";
$student2->value = 100;

var_dump($student1 == $student2);
var_dump($student1 === $student2);