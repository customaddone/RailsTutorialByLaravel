<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $guarded = array('id');

    public function user()
    {
        return belongsTo('App\User');
    }
}
