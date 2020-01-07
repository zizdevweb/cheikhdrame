<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    public function Registration(){
        return $this->hasMany("App\Registration");
    }

}
