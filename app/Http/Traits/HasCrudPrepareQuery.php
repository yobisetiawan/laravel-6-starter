<?php

namespace App\Http\Traits;

trait HasCrudPrepareQuery
{

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

    public function __prepareDataStore($data)
    {
        return $data;
    }

    public function __prepareQueryRowShow($query)
    {
        return $query;
    }


    public function __prepareDataUpdated($data)
    {
        return $data;
    }

    public function __prepareQueryRowUpdate($query)
    {
        return $query;
    }

    public function __prepareQueryRowDestroy($query)
    {
        return $query;
    }
}
