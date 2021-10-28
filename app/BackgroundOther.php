<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BackgroundOther extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'type','title','body','vidio','image','image1','image2','image3','subtitle','subbody'
    ];
}
