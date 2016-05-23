<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vietnamn extends Model
{
    protected $table = 'vietnamn'; 

    public function country_list()
    {
        return $this->hasMany('App\Country_list');
    
    }
}
