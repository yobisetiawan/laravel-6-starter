<?php

namespace App\Traits;

trait HasCrudExtraData
{

    public function __extraDataList($data)
    {
        return $data;
    }

    public function __extraDataCreate($data)
    {
        return $data;
    }


    public function __extraDataShow($data)
    {
        return $data;
    }

    public function __extraDataEdit($data)
    {
        return $data;
    }
}
