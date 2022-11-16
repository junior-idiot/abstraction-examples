<?php

use App\Vehicles\BMP;
use App\Vehicles\Bmwe34;
use App\Vehicles\Boeng737;
use App\Vehicles\F16;
use App\Vehicles\Golf2;

include "vendor/autoload.php";

$golf2 = new Golf2();

$bmw = new Bmwe34();

//GOLF
$golf2->getFuel();
echo PHP_EOL;
$golf2->moveForward();
echo PHP_EOL;
$golf2->moveRight();
echo PHP_EOL;
///BMW
echo PHP_EOL;
$bmw->moveForward();
echo PHP_EOL;
$bmw->moveBack();
echo PHP_EOL;
$bmw->getFuel();
echo PHP_EOL;

$boeng = new Boeng737();

echo PHP_EOL;
$boeng->getFuel();
echo PHP_EOL;
$boeng->moveForward();
echo PHP_EOL;
$boeng->flyTop();
echo PHP_EOL;

$bmp = new BMP();

echo PHP_EOL;
$bmp->getFuel();
echo PHP_EOL;
$bmp->moveForward();
echo PHP_EOL;
$bmp->shot();
echo PHP_EOL;

$f16 = new F16();

echo PHP_EOL;
$f16->getFuel();
echo PHP_EOL;
$f16->flyTop();
echo PHP_EOL;
$f16->shot();
echo PHP_EOL;