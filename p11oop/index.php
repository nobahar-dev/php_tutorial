<?php

class Person {
    private string $name;

    public function __construct($newName) {
        $this->name = $newName;
    }

    public function getName(): string {
        return $this->name;
    }
}

function f() {
    echo "function f() <br>";
}

function g() {
    echo "function g() <br>";
}

$func = "f";
if (function_exists($func)) {
    $func();
} else {
    echo "function not found";
}

$class = "Person";
$person = new $class("mahdi");
echo $person->getName() . "<br>";

























