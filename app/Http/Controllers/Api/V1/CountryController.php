<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Modules\BaseCrud;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;
use App\Models\Country;

class CountryController extends BaseCrud
{

    public $model = Country::class;
    
    public $resource = CountryResource::class;

    public $storeValidator = CountryRequest::class;

    public $updateValidator = CountryRequest::class;

    public $searchAble = ['name'];
    
    public $relationShow = ['provinces.regencies', 'regencies'];


}
