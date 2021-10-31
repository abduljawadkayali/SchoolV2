<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Branch;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'number', 'group_id', 'branch_id', 'region_id', 'discount_id','status'
    ];

 public function result()
    {
        return $this->HasMany(Result::class);
    }


    public function group()
    {
    	return $this->belongsTo('App\Group');
    }
    public function region()
    {
        return $this->belongsTo('App\Region');
    }
    public function discount()
    {
        return $this->belongsTo('App\Discount');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function branch()
    {
    	return $this->belongsTo('App\Branch');
    }
}
