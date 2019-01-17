<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function links()
    {
        return $this->hasMany('App\Link');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function subscriptions()
    {
        return $this->hasOne('App\Subscription');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }
}
