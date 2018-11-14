<?php

namespace App;

use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
=======
use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
}
