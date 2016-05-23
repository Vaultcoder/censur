<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country_list extends Model
{
    protected $table = 'country_list'; 

    public function sweden()
    {
        return $this->belongsTo('App\Sweden');

    }
    public function china()
    {
        return $this->belongsTo('App\China');
    }
    public function india()
    {
        return $this->belongsTo('App\India');
    }
    public function vietnamn()
    {
        return $this->belongsTo('App\Vietnamn');
    }
    public function syria()
    {
        return $this->belongsTo('App\Syria');
    }
}
        // return $this->belongsTo('App\Sweden');