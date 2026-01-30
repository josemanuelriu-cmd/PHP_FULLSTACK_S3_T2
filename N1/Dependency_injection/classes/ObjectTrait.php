<?php

trait ObjectTrait 
{
    public function ICarryIt(string $objectName): void
    {
        echo "Llevo " . $objectName . PHP_EOL;
    }
}

?>