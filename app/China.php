<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class China extends Model
{
    protected $table = 'china'; 

    public function country_list()
    {
        return $this->hasMany('App\Country_list');
    
    }
}
