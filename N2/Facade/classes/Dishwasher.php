<?php

class Dishwasher
{
    public function turnOn()
    {
        echo "Encendido el lavavajillas..." . PHP_EOL;
    }
    public function waitingTostart()
    {
        echo "Esperando a que se prepare... ..." . PHP_EOL;
    }
    public function addStartProgram()
    {
        echo "Iniciando el programa de lavado..." . PHP_EOL;
    }
    public function addSoap()
    {
        echo "Añadiendo jabón..." . PHP_EOL;
    }
    public function washDishes()
    {
        echo "Lavando los platos..." . PHP_EOL;
    }
    public function fetchingWater()
    {
        echo "Cogiendo agua..." . PHP_EOL;
    }
    public function rinse()
    {
        echo "Aclarando platos..." . PHP_EOL;
    }
    public function turnOff()
    {
        echo "Apagado el lavavajillas..." . PHP_EOL;
    }
    public function waitingToCoolDown()
    {
        echo "Esperando a que se enfríe... ... ... ... ... ... :-)" . PHP_EOL;
    }
}
?>