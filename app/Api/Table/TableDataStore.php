<?php

namespace App\Api\Table;

use App\Api\Data\DataObject;

class TableDataStore
{
    public static function add(DataObject $data) : void
    {
        //Опять же, для простоты будем думать, что ОРМка уже подключена (например Елокейнт или Доктрин)
        // DataTable::create([
        //     'name' => $data->name,
        //     'surname' => $data->surname
        // ]);

        echo "Data has been added!".PHP_EOL;
        var_dump([
            'name' => $data->name,
            'surname' => $data->surname
        ]);
        echo PHP_EOL;
    }
}