<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sweden extends Model
{
    protected $table = 'sweden'; 

    public function country_list()
    {
        return $this->hasMany('App\Country_list');
    
    }
}

    // {
    //     return $this->hasOne('App\Country_list');
    
    // }