<?php
require_once 'ObjectTrait.php';
class CarKeys
{
    use ObjectTrait;

    public function Show(): void
    {
        echo $this->ICarryIt("las llaves del coche");
    }
}
?>