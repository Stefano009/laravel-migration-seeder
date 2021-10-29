<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    //
    public function travels() {
        // return $this->belongsTo(Travel::class, 'c_id');  da cercare documentation per collegare id a fk
    }
}
