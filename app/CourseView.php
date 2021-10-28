<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseView extends Model
{ use SoftDeletes;
    protected $fillable = [
        'title','teacher','body','type','price','image','course_category_id'
    ];
    public function courseCategory()
    {
        return $this->belongsTo('App\CourseCategory','course_category_id','id');
    }
}
