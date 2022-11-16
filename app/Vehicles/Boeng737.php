<?php

namespace App\Vehicles;

use App\Core\Vehicles\Plane;

/**
 * Тут ситуация аналогична той, что мы реализовывали с машинами - нам достаточно унаследоваться от класса Plane и дело в шляпе
 */
class Boeng737 extends Plane
{
    public int $speed = 1000;

    public int $fuel = 1500;

    public string $name = "Boeng 737 ЖМЫХ АЙРЛАЙНС";
}