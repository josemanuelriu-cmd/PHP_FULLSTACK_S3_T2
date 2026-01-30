<?php

require_once('Dishwasher.php');

class MyDishwasherFacade
{
    private Dishwasher $dishwasher;

    public function __construct(Dishwasher $dishwasher) {
        $this->dishwasher = $dishwasher;
    }

    public function turnOn()
    {
        $this->dishwasher->turnOn();
        $this->dishwasher->waitingTostart();
        $this->dishwasher->addStartProgram();
    }

    public function start()
    {                
        $this->dishwasher->addSoap();
        $this->dishwasher->fetchingWater();
        $this->dishwasher->washDishes();
        $this->dishwasher->rinse();
    }

    public function turnOff()
    {
        $this->dishwasher->turnOff();
        $this->dishwasher->waitingToCoolDown();
    }
}
?>