<?php
namespace App\Model;

class User {
    private string $name;

    public function __construct($newName) {
        $this->name = $newName;
    }

    public function getName(): string {
        return $this->name;
    }
}
