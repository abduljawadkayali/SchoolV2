<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HaberCard extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title','type','body','image'
    ];
}
