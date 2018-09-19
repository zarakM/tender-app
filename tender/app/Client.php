<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
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
}
