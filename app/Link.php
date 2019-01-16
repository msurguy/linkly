<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model 
{

    protected $table = 'links';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function stats()
    {
        return $this->hasMany('Stats');
    }

}