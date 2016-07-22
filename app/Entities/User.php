<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPZen\LaravelRbac\Traits\Rbac;
use \App\Entities\Events;

class User extends Authenticatable
{
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

    public function events()
    {
        return $this->belongsToMany(Events::class);
    }
}


