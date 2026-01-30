<?php

require_once('classes/MyDishwasherFacade.php');

$Dishwasher = new MyDishwasherFacade(new Dishwasher());
$Dishwasher->turnOn();
$Dishwasher->start();
$Dishwasher->turnOff();