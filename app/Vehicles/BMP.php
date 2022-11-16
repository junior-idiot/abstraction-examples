<?php

namespace App\Vehicles;

use App\Core\Interfaces\ArmourInterface;
use App\Core\Vehicles\Car;

/**
 * Тут мы уже реализовываем интерфейс ArmourInterface
 * 
 */
class BMP extends Car implements ArmourInterface
{
    public int $speed = 60;

    public int $fuel = 500;

    public string $name = "БМП";

    public function shot()
    {
        echo "{$this->name} стреляет из 30-мм пушки 2А32";
    }

    public function reload()
    {
        echo "{$this->name} перезаряжает свою";
    }
}