<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{

    use HasUuid;

    protected $table = 'provinces';
    public $timestamps = true;


    protected $fillable = ['name', 'parent_id'];


    public function country()
    {
        return $this->belongsTo(Country::class, 'parent_id');
    }

    public function regencies()
    {
        return $this->hasMany(Regency::class, 'parent_id');
    }
}
