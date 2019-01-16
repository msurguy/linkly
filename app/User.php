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
        return $this->hasMany('Link');
    }

    public function payments()
    {
        return $this->hasMany('Payment');
    }

    public function subscriptions()
    {
        return $this->hasOne('Subscription');
    }

    public function tags()
    {
        return $this->hasMany('Tag');
    }

    public function groups()
    {
        return $this->belongsToMany('Group');
    }
}
