<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\school;

class Homecontroller extends Controller

{


    public function index (){

        return view("plateformes.index");

    }

    public function show($id){

    return view("plateformes.show",compact("id"));
}

}
