<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Haber extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'body'
    ];
}
