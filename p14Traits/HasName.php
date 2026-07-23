<?php

trait HasName {
    private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName($newName): void {
        $this->name = $newName;
    }
}
