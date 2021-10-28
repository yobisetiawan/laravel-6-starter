<?php

namespace App\Http\Traits;

trait HasCrudSuccessResult
{

    public function __successDestroy()
    {
        return $this->__success();
    }

    public function __success()
    {
        return ['success' => true];
    }

    public function __successUpdate()
    {
        return $this->__success();
    }

    public function __successStore()
    {
        return $this->__success();
    }
}
