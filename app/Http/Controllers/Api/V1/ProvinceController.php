<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Modules\BaseCrud;
use App\Http\Requests\ProvinceRequest;
use App\Http\Resources\ProvinceResource;
use App\Models\Province;

class ProvinceController extends BaseCrud
{

    public $model = Province::class;

    public $resource = ProvinceResource::class;

    public $storeValidator = ProvinceRequest::class;

    public $updateValidator = ProvinceRequest::class;

    public $searchAble = ['name', 'country.name'];

    public $relationList = ['country'];

    public $relationShow = ['country', 'regencies'];
}
