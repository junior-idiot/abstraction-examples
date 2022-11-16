<?php

namespace App\Api\Interfaces;

use App\Api\Data\DataObject;


interface ApiDataInterface 
{
    public function getData() : DataObject;
}