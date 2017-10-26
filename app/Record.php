<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $timestamps = false;
    
    public function sort_details()
    {
        return $this->hasMany('App\SortDetail');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function classes()
    {
        return $this->belongsTo('App\Classes', 'class_id');
    }

}
