<?php
include_once "Sheep.php";

for ($i = 0; $i <= rand(1, 50); $i++) {
    $sheep = new Sheep();
    echo $sheep->getName() . "<br>";
}

echo Sheep::getCount() . "<br>";
