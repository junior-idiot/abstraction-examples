<?php

namespace App\Core\Interfaces;

interface MovementInterface
{
    public function moveForward();

    public function moveBack();

    public function moveLeft();

    public function moveRight();
}