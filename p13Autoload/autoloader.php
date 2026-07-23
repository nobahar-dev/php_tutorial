<?php

function myAutoloader($class) {
    $classFile = __DIR__ . "/$class.php";
    if (file_exists($classFile) && is_readable($classFile)) {
        include $classFile;
    } else {
        die("$classFile no found.");
    }
}

spl_autoload_register("myAutoloader");
