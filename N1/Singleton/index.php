<?php

require_once 'Tigger.php';

$tigger = Tigger::getInstance();
$tigress = Tigger::getInstance();

$tigger->roar();
echo $tigger->getCounter() . PHP_EOL;
$tigger->roar();
$tigger->roar();
$tigress->roar();

echo $tigger->getCounter(); 
?>