<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //

    public function Professor()
    {
    return $this->hasOne('App\Professor');
}

public function Student()
{
return $this->hasOne('App\Student');
}
}

