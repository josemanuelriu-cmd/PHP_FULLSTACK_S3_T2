<?php

require_once 'Tigger.php';

$tigger = Tigger::getInstance();

$tigger->roar();
echo $tigger->getCounter() . PHP_EOL;
$tigger->roar();
$tigger->roar();

echo $tigger->getCounter(); 
?>