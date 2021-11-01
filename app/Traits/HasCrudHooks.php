<?php

namespace App\Traits;

trait HasCrudHooks
{

    public function __beforeStored()
    {
        return false;
    }

    public function __afterStored()
    {
        return false;
    }


    public function __beforeUpdated()
    {
        return false;
    }


    public function __afterUpdated()
    {
        return false;
    }

    public function __beforeDestroyed()
    {
        return false;
    }

    public function __afterDestroyed()
    {
        return false;
    }
}
