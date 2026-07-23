<?php
include "Singleton.php";
include "HasName.php";

class Human {
    use HasName, Singleton;

    private string $family;

    public function setFamily($newFamily): void {
        $this->family = $newFamily;
    }

    public function getFamily(): string {
        return $this->family;
    }
}
