<?php

class Person {
    private string $name;
    private string $family;
    private int $age;

    public function setName($newName): void {
        $this->name = $newName;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setFamily($newFamily): void {
        $this->family = $newFamily;
    }

    public function getFamily(): string {
        return $this->family;
    }

    public function setAge($newAge): void {
        $this->age = $newAge;
    }

    public function getAge(): int {
        return $this->age;
    }
}

$person = new Human();
$person->setName('Mahdi');
$person->setFamily('Nobahar');
$person->setAge(33);

$name = $person->getName();
$family = $person->getFamily();
$age = $person->getAge();

echo "my name is $name, and family is $family, and i'm $age years old";
