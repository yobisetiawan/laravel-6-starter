<?php

namespace App\Http\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseCrud extends Controller
{

    public $model;

    public $resource;

    public $row;

    public $searchAble = [];

    public $modelKey = 'id';


    public function index(Request $request)
    {
        $query = $this->model::query();

        $this->__prepareQueryList($query);

        $this->__prepareQuerySearchAbleList($query, $request);

        $query = $request->query('type') == 'pagination' ? $query->paginate() : $query->get();

        return $this->resource::collection($query);
    }

    public function __prepareQuerySearchAbleList($query, $request)
    {
        if ($q = $request->query('q')) {

            $query->where(function ($qq) use ($q) {
                foreach ($this->searchAble as $v) {
                    $qq->orWhereRaw('LOWER(' . $v . ') like ?', ['%' . strtolower($q) . '%']);
                }
            });
        }

        return $query;
    }

    public function __prepareQueryList($query)
    {
        return $query;
    }

    public function store(Request $request)
    {
        return $this->__successStore();
    }

    public function show($id)
    {
        $query = $this->model::where($this->modelKey, $id);

        $this->__prepareQueryShow($query);

        $this->row = $query->firstOrFail();

        return new $this->resource($this->row);
    }

    public function __prepareQueryShow($query)
    {
        return $query;
    }


    public function update(Request $request, $id)
    {
        $query = $this->model::where($this->modelKey, $id);
        $this->__prepareQueryUpdate($query);
        $this->row = $query->firstOrFail();

        return $this->__successUpdate();
    }

    public function __prepareQueryUpdate($query)
    {
        return $query;
    }

    public function __successUpdate()
    {
        return $this->__success();
    }

    public function destroy($id)
    {
        return $this->DBSafe(function () use ($id) {

            $query = $this->model::where($this->modelKey, $id);

            $this->__prepareQueryDestroy($query);

            $this->row = $query->firstOrFail();

            $this->row->delete();

            return $this->__successDestroy();
        });
    }

    public function __prepareQueryDestroy($query)
    {
        return $query;
    }

    public function __successDestroy()
    {
        return $this->__success();
    }

    public function __success()
    {
        return ['success' => true];
    }
}
