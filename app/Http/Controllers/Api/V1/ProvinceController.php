<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Modules\BaseCrud;
use App\Http\Requests\ProvinceRequest;
use App\Http\Resources\Province as ResourcesProvince;
use App\Models\Province;

class ProvinceController extends BaseCrud
{

    public $model = Province::class;

    public $resource = ResourcesProvince::class;

    public $searchAble = ['title', 'country.title'];

    public $storeValidator = ProvinceRequest::class;

    public $updateValidator = ProvinceRequest::class;

    public $relationList = ['country'];

    public $relationShow = ['country'];
}
