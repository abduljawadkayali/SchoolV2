<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rate extends Model
{
    use SoftDeletes;
    protected $fillable = [
            'title', 'description', 'star', 'user_name', 'user_photo', 'category'
    ];
}
