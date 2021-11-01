<?php

namespace App\Http\Modules;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Traits\HasCrudHooks;
use App\Traits\HasCrudPrepareQuery;
use App\Traits\HasCrudSuccessResult;
use Illuminate\Http\Request;

class BaseCrud extends Controller
{

    use HasCrudHooks, HasCrudPrepareQuery, HasCrudSuccessResult;

    public $model;

    public $resource;

    public $row;

    public $searchAble = [];

    public $modelKey = 'id';

    public $storeValidator;

    public $updateValidator;

    public $relationList=[];
    
    public $relationShow=[];

    public $lockRelationParam = true;


    public function index(Request $request)
    {
        $query = $this->model::query();

        $this->__prepareQueryRelationList($query);
        
        $this->__prepareQueryList($query);

        $this->__prepareQuerySearchAbleList($query, $request);

        $query = $request->query('type') == 'pagination' ? $query->paginate() : $query->get();

        return $this->resource::collection($query);
    }


    public function store(Request $request)
    {
        return $this->DBSafe(
            function () {
                $req = app($this->storeValidator);

                $this->__beforeStored();

                $dt = new $this->model();

                $data = $req->validated();

                $data = $this->__prepareDataStore($data);

                $dt->fill($data);

                $dt->save();

                $this->row = $dt;

                $this->__afterStored();

                return $this->__successStore();
            }
        );
    }


    public function show($id)
    {
        $query = $this->model::where($this->modelKey, $id);

        $this->__prepareQueryRelationShow($query);

        $this->__prepareQueryRowShow($query);

        $this->row = $query->firstOrFail();

        return new $this->resource($this->row);
    }

    public function update(Request $request, $id)
    {
        return $this->DBSafe(
            function () use ($id) {
                $req = app($this->updateValidator);

                $query = $this->model::where($this->modelKey, $id);

                $this->__prepareQueryRowUpdate($query);

                $this->row = $query->firstOrFail();

                $this->__beforeUpdated();

                $data = $req->validated();

                $data = $this->__prepareDataUpdated($data);

                $this->row->fill($data);

                $this->row->save();

                $this->__afterUpdated();

                return $this->__successUpdate();
            }
        );
    }


    public function destroy($id)
    {
        return $this->DBSafe(
            function () use ($id) {

                $query = $this->model::where($this->modelKey, $id);

                $this->__prepareQueryRowDestroy($query);

                $this->row = $query->firstOrFail();

                $this->__beforeDestroyed();

                $this->row->delete();

                $this->__afterDestroyed();

                return $this->__successDestroy();
            }
        );
    }
}
