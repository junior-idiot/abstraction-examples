<?php
use App\Api\DataApi\FirstApi;
use App\Api\DataApi\OtherOneApi;
use App\Api\DataApi\SecondApi;
use App\Api\Interfaces\ApiDataInterface;
use App\Api\Table\TableDataStore;

require "vendor/autoload.php";

$vendors = [
    new FirstApi(),
    new SecondApi(),
    new OtherOneApi(),
];

foreach ($vendors as $vendor) {
    if ($vendor instanceof ApiDataInterface) {
        TableDataStore::add(
            $vendor->getData()
        );
    }
}