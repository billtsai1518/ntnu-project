<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SortDetail extends Model
{
    public $timestamps = false;

    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio');
    }

}
