<?php

namespace App\Vehicles;

use App\Core\Interfaces\ArmourInterface;
use App\Core\Vehicles\Plane;

/**
 * Всё как и в случае с БМП, только это самолёт
 * 
 */
class F16 extends Plane implements ArmourInterface
{
    public int $speed = 300;

    public int $fuel = 2500;

    public string $name = "F-16 Flight Falcon";

    public function shot()
    {
        echo "{$this->name} стреляет из 5-ствольного пулемёта";
    }

    public function reload()
    {
        echo "{$this->name} перезаряжает пулемёт";
    }
}