<?php
include "Human.php";


$human = Human::getInstance();
$human->setName("mahdi");
$human->setFamily("nobahar");

echo $human->getName() . "<br>";
echo $human->getFamily() . "<br>";
