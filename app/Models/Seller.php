<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model 
{

    protected $table = 'sellers';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}