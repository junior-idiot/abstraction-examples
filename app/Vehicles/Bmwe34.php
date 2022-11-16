<?php

namespace App\Vehicles;

use App\Core\Vehicles\Car;

/**
 * Всё как в случае с гольфиком :)
 * 
 */
class Bmwe34 extends Car
{
    public int $speed = 100;

    public int $fuel = 300;

    public string $name = "Бэха тридцатьчетвёрка";
}