<?php

require_once "classes/Person.php";

$MyWallet = New Wallet();
$MyHouseKeys = New HouseKeys();
$MyCarKeys = New CarKeys();
$MyTransportCard = New TransportCard();
$MySmartphone = New Smartphone();

$Yesterday = New Person($MyWallet,$MyHouseKeys,$MyCarKeys,$MyTransportCard,$MySmartphone);
echo "Ayer salí de casa con:" . PHP_EOL;
$Yesterday->GoOut();

echo PHP_EOL;

$Today = New Person($MyWallet,$MyHouseKeys,null,$MyTransportCard,$MySmartphone);
echo "Hoy salgo de casa con:" . PHP_EOL;
$Today->GoOut();

?>