<?php

namespace App\Api\DataApi;

use App\Api\Data\DataObject;
use App\Api\Interfaces\ApiDataInterface;

class OtherOneApi implements ApiDataInterface
{
    
	/**
	 * @return \App\Api\Data\DataObject
	 */
	public function getData(): \App\Api\Data\DataObject 
    {
        $csvData = "Jenua;Pogorelov";

        $data = explode(";", $csvData);

        return new DataObject($data[0], $data[1]);
	}
}