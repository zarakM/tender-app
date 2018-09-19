<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public function country()
    {
        return $this->hasOne('App\Country');
    }

    public function province()
    {
        return $this->hasOne('App\Province');
    }
    public function city()
    {
        return $this->hasOne('App\CIty','c_ities_id');
    }
    public function client()
    {
        return $this->hasOne('App\Client');
    }


    public function associate()
    {
        return $this->hasMany('App\Associate');
    }
    public function staff()
    {
        return $this->hasMany('App\Staff');
    }
}
