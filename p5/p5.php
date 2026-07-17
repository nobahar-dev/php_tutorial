<?php
$employee = ['erfan' => 25, 'sara' => 30, 'ahmad' => 34];
$colors = ['red', 'green', 'blue'];

var_dump($employee);
var_dump($colors);

echo "<hr>";

$je_employee = json_encode($employee);
$je_colors = json_encode($colors);
echo $je_employee, "<br>";
echo $je_colors, "<br>";

echo "<hr>";

$employee_json = '{"john": 25, "lady": 30, "master": 34}';
$colors_json = "{'red', 'green', 'blue'}";

var_dump($employee_json);
var_dump($colors_json);

$jd_employee = json_encode($employee_json);

var_dump($jd_employee);