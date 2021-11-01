<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $fillable = ['title', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
