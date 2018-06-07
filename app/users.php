<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class users extends Authenticatable
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

public function orders(){
    return $this->hasMany(orders::class);
}

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     public function isRole(){
        return $this->role; // mysql table column
      }
    protected $hidden = [
        'password', 'remember_token',
    ];

}
