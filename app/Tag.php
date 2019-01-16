<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model 
{

    protected $table = 'tags';
    public $timestamps = true;

    public function links()
    {
        return $this->belongsToMany('Link');
    }

}