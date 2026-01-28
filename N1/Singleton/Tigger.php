<?php
class Tigger
{
    private static ?Tigger $instance = null;

    private int $counter = 0;

    private function __construct(){
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance(): Tigger {
        if (self::$instance === null) {
            self::$instance = new Tigger();
        }

        return self::$instance;
    }

    private function __clone() {}
    public function __wakeup() {}

    public function roar(): void {
        $this->counter++;
        echo "Grrr!" . PHP_EOL;
    }

    public function getCounter(): int {
        return $this->counter;
    }
}
?>