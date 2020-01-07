<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $guarded = [];

    public function Spinneret(){
        return $this->belongsTo("App\Spinneret","filiere_id");
    }

    public function People()
    {
    return $this->belongsTo('App\People');
}

}
