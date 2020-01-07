<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $guarded = [];

    public function spinnerets(){
        return $this->belongsTo("App\spinneret");
    }
}
