<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'subject_id', 'class_id', 'name', 'description','image', 'book'
        
    ];
}
