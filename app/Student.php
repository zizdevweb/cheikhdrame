<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $guarded = [];

    public function Registration(){
        return $this->hasMany("App\Registration");
    }

    public function People()
    {
    return $this->belongsTo('App\People');
}
}

