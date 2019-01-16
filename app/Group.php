<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model 
{

    protected $table = 'groups';
    public $timestamps = true;

    public function users()
    {
        return $this->belongsToMany('User');
    }

}