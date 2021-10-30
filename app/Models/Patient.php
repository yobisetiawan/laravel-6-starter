<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model 
{

    protected $table = 'patients';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}