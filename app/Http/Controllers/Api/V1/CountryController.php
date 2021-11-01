<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Modules\BaseCrud;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\Country as ResourcesCountry;
use App\Models\Country;

class CountryController extends BaseCrud
{

    public $model = Country::class;
    
    public $resource = ResourcesCountry::class;
    
    public $searchAble = ['title'];

    public $storeValidator = CountryRequest::class;

    public $updateValidator = CountryRequest::class;
    
    public $relationShow = ['provinces'];


}
