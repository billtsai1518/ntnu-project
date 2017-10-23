<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function records()
    {
        return $this->hasMany('App\Record', 'class_id');
    }
    
    public function sort_details()
    {
        return $this->hasManyThrough('App\SortDetail', 'App\Record', 'class_id', 'record_id');
    }
}
