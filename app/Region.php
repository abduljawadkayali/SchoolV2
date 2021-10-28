<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name','price'
    ];
    function student(){
        $this->hasMany('students');
    }
}
