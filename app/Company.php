<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
     'name', 'email', 'logo','website','image','comapny_id'
    ];

    public function employees(){

    	return $this->hasMany('App\Employee');
    }
}
