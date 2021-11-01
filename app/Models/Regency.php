<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{

    //use HasUuid;

    protected $table = 'regencies';
    public $timestamps = true;

    protected $fillable = ['name', 'parent_id'];

    public function province()
    {
        return $this->belongsTo(Province::class, 'parent_id');
    }
}
