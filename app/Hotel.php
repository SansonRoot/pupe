<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Hotel extends Authenticatable
{
    //
    protected $guard = 'hotel';

    protected $guarded = ['id'];

    public function rooms(){
        return $this->hasMany('App\Room');
    }

}
