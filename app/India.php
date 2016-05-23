<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class India extends Model
{
    protected $table = 'india'; 

    public function country_list()
    {
        return $this->hasMany('App\Country_list');
    
    }
}
