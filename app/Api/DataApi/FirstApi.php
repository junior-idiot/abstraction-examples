<?php

namespace App\Api\DataApi;

use App\Api\Data\DataObject;
use App\Api\Interfaces\ApiDataInterface;

class FirstApi implements ApiDataInterface
{
    
	/**
	 * @return \App\Api\Data\DataObject
	 */
	public function getData(): \App\Api\Data\DataObject 
    {
        //Через условный GuzzleHTTP получаем данные
        $data = '{"name":"Aleks","surname":"Sjukov"}';

        $dataObject = json_decode($data, true);

        return new DataObject($dataObject["name"], $dataObject["surname"]);
	}
}