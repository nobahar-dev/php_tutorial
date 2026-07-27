<?php
class Sheep {
    private string $name;
    private static int $count = 0;

    public function __construct() {
        $this->name = "sheep-" . rand(100, 999);
        self::$count++;
    }

    public function getName(): string {
        return $this->name;
    }

    public static function getCount(): int {
        return self::$count;
    }
}
