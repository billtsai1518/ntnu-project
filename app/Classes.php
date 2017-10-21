<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function records()
    {
        return $this->hasMany('App\Record', 'class_id');
    }
}
