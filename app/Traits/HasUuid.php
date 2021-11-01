<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUuid
{

    /**
     * The "booting" method of the model, This help to magically create uuid for all new models
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid()->toString();
            }
        });

        self::saving(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid()->toString();
            }
        });
    }
}
