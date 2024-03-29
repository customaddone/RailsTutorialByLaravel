<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $guarded = array('id');

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     /* UserはMicropostを複数持つ */
     public function microposts()
     {
         return hasMany('App\Micropost');
     }
}
