<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Modules\BaseCrud;
use App\Http\Requests\RegencyRequest;
use App\Http\Resources\RegencyResource;
use App\Models\Regency;

class RegencyController extends BaseCrud
{

    public $model = Regency::class;

    public $resource = RegencyResource::class;

    public $storeValidator = RegencyRequest::class;

    public $updateValidator = RegencyRequest::class;

    public $searchAble = ['name'];
}
