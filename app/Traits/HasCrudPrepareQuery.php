<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasCrudPrepareQuery
{

    public function __prepareQuerySearchAbleList($query, $request)
    {
        if ($q = $request->query('q')) {

            $query->where(function ($qq) use ($q) {
                foreach ($this->searchAble as $v) {
                    if (Str::contains($v, '.')) {
                        $ex = explode('.', $v);
                        $qq->orWhereHas($ex[0], function ($qqq) use ($q, $ex) {
                            $qqq->whereRaw('LOWER(' . $ex[1] . ') like ?', ['%' . strtolower($q) . '%']);
                        });
                    } else {
                        $qq->orWhereRaw('LOWER(' . $v . ') like ?', ['%' . strtolower($q) . '%']);
                    }
                }
            });
            
        }

        return $query;
    }

    public function __prepareQueryRelationList($query)
    {
        foreach ($this->relationList as $value) {
            $query->with($value);
        }

        $this->__prepareQueryUnLockRelations($query);

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

    public function __prepareQueryRelationShow($query)
    {
        foreach ($this->relationShow as $value) {
            $query->with($value);
        }

        $this->__prepareQueryUnLockRelations($query);

        return $query;
    }


    public function __prepareQueryUnLockRelations($query)
    {
        if (!$this->lockRelationParam) {
            $relations = request('relations', '');
            if (!empty($relations)) {
                $exp = explode(',', $relations);
                foreach ($exp as $relation) {
                    $query->with($relation);
                }
            }
        }

        return $query;
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
