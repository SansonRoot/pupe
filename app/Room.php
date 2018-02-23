<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //

    protected $guarded = ['id'];

    public function hotel(){
        return $this->belongsTo('App\Hotel');
    }

}
