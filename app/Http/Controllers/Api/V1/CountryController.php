<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Modules\BaseCrud;
use App\Http\Resources\Country as ResourcesCountry;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends BaseCrud
{

    public $model = Country::class;
    public $resource = ResourcesCountry::class;
    public $searchAble = ['title'];
}
