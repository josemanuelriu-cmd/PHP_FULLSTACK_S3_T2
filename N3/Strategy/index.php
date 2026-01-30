<?php

require_once 'classes/CarCouponGeneratorInterface.php';
require_once 'classes/BMWCouponGenerator.php';
require_once 'classes/MercedesCouponGenerator.php';

$BMWCarModel = "X5";
$bmwCouponGenerator = new BMWCouponGenerator();
$bmwCouponGenerator->addSeasonDiscount();
$bmwCouponGenerator->addStockDiscount();
echo $bmwCouponGenerator->generateCoupon($BMWCarModel) . PHP_EOL;

$MercedesCarModel = "GLE";
$mercedesCouponGenerator = new MercedesCouponGenerator();
$mercedesCouponGenerator->addSeasonDiscount();
$mercedesCouponGenerator->addStockDiscount();
echo $mercedesCouponGenerator->generateCoupon($MercedesCarModel) . PHP_EOL;