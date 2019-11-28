<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/plateforme', function () {
    return "je suis sur le routeur";
});
Route::get("/plateforme/{id}", function ($id) {
    return "je suis le plateforme $id";
});
//creation d'un controleur

Route::get("/plateforme","Plateformescontroller@index");
Route::get("/categories","categoriescontroller@index");
Route::get("/categories/{id}","Plateformescontroller@show");

//Route::get("/","Homecontroller@index");

Route::get("/plateformes/{id}", "Homecontroller@show");