<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Acount extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'student_id', 'payment', 'fee'
    ];
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
