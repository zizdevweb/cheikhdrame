<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //

    public function Student(){
        return $this->belongsTo("App\Student");
    }

    public function Spinneret(){
        return $this->hasMany("App\Spinneret");
    }

    public function Level(){
        return $this->belongsTo("App\Level","niveau");
    }

}

