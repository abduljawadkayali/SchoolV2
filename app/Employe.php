<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employe extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'date', 'title', 'description', 'about', 'years',
        'image', 'page','mail', 'whatsup', 'facebook'
    ];
}
