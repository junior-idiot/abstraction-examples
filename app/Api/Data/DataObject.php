<?php

namespace App\Api\Data;

class DataObject
{
    public string $name;

    public string $surname;

    public function __construct(
        string $name,
        string $surname,
    )
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}