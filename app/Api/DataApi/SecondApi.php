<?php

namespace App\Api\DataApi;

use App\Api\Data\DataObject;
use App\Api\Interfaces\ApiDataInterface;
use stdClass;

class SecondApi implements ApiDataInterface
{
    
	/**
	 * @return \App\Api\Data\DataObject
	 */
	public function getData(): \App\Api\Data\DataObject 
    {
        //получаем данные, бла бла. И да, я знаю как работает функция иксмл_парс. Но для примера предположим, что она возвращает нам объект
        $data = "<data><name>Ivan</name><surname>Grib</surname></data>";
        $parser = xml_parser_create();

        $dataObject = new stdClass();
        $dataObject->name = "Ivan";
        $dataObject->surname = "Grib";

        return new DataObject($dataObject->name, $dataObject->surname);
	}
}