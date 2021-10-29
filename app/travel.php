<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    //
    public function workers(){
        // return $this->hasMany(Worker::class, 'c_id');da cercare documentation per collegare id a fk
    }
}
