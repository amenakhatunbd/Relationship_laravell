<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'batch_id','address','phone'
    ];
    public function result(){
      return $this->hasMany('App\Result');
    }
}
