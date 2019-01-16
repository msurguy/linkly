<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model 
{

    protected $table = 'statistics';
    public $timestamps = true;

    public function link()
    {
        return $this->belongsTo('Link');
    }

}