<?php

require_once "Wallet.php";
require_once "HouseKeys.php";
require_once "CarKeys.php";
require_once "TransportCard.php";
require_once "Smartphone.php";

class Person
{
    private Wallet $wallet;
    private HouseKeys $houseKeys;
    private ?CarKeys $carKeys;
    private ?TransportCard $transportCard;
    private Smartphone $smartphone;

    public function __construct(Wallet $wallet,HouseKeys $houseKeys,?CarKeys $carKeys,?TransportCard $transportCard,Smartphone $smartphone) {
        $this->wallet = $wallet;
        $this->houseKeys = $houseKeys;
        $this->carKeys = $carKeys;
        $this->transportCard = $transportCard;
        $this->smartphone = $smartphone;
    }

    public function GoOut(): void
    {
        $mensaje = "";
        if ($this->wallet) {
            $mensaje .= $this->wallet->ICarryIt();
        }
        if ($this->houseKeys) {        
            $mensaje .= $this->houseKeys->ICarryIt();
        }
        if ($this->carKeys) {
            $mensaje .= $this->carKeys->Show();
        }
        if ($this->transportCard) {
            $mensaje .= $this->transportCard->ICarryIt();
        }
        if ($this->smartphone) {
            $mensaje .= $this->smartphone->ICarryIt();
        }
        echo $mensaje;
    }
}


?>