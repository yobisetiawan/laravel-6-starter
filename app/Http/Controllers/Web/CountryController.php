<?php

namespace App\Http\Controllers\Web;

use App\Http\Modules\BaseWebCrud;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;
use App\Models\Country;

class CountryController extends BaseWebCrud
{

    public $model = Country::class;

    public $storeValidator = CountryRequest::class;

    public $updateValidator = CountryRequest::class;

    public $searchAble = ['name'];

    public $viewPath = 'pages.country';

    public $redirectSuccess =  '/countries';
}
