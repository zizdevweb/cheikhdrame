<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spinneret extends Model
{
    //
    protected $guarded = [];

    public function School(){
        return $this->hasMany("App\School");
    }

    public function Registration(){
        return $this->belongsTo("App\Registration");
    }
    

}
