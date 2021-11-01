<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasUuid;

    protected $table = 'countries';
    public $timestamps = true;

    protected $fillable = ['name', 'code'];


    public function provinces()
    {
        return $this->hasMany(Province::class, 'parent_id');
    }

    public function regencies()
    {
        return $this->hasManyThrough( 
            Regency::class,
            Province::class,
            'parent_id',
            'parent_id'
        );
    }
}
