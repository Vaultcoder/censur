<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syria extends Model
{
    protected $table = 'syria'; 

    public function country_list()
    {
        return $this->hasMany('App\Country_list');
    
    }
}
