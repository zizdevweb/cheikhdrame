<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//

Route::get('/accueil', function () {
    return view('accueil');
});
//

Route::get('/sante', function () {
    return view('sante');
});

Route::get('/compt', function () {
    return view('compt');
});

Route::get('/agro', function () {
    return view('agro');
});

Route::get('/reseau', function () {
    return view('reseau');
});


Route::get('/page', function () {
    return view('page');
});

Route::get('/', function () {
    return view('accueil');
});


Route::get('/plateforme', function () {
    return "je suis sur le routeur";
});
Route::get("/plateforme/{id}", function ($id) {
    return "je suis le plateforme $id";
});
///creation d'un controleur
//
//

//Route::get("/","Homecontroller@index");
//Route::get("/professor/edit/{id}", "Professorcontroller@edit")->name('editer_professor');





Route::get("/spinneret/{id}", "Homecontroller@show");

//Route::get("/spinneret", "Spinneretcontroller@index");

//Route::get("/filiere/formulaire", "Spinneretcontroller@create");

Route::resource('filiere', 'FiliereController');

Route::post("/spinneret/traitement", "Spinneretcontroller@store");

Route::patch("/spinneret/edit/{id}", "Spinneretcontroller@update")->name('update_spinneret');

Route::get("/spinneret/edit/{id}", "Spinneretcontroller@edit")->name('editer_spinneret');


Route::get('/professeur/create', 'ProfesseurController@create')->name('create_professor')->middleware('auth');





//Route::get("/professor/{id}", "Homecontroller@show");
Route::get("/professor/{id}", "Homecontroller@show");

//Route::get("/professor/formulaire", "Professorcontroller@create");

//Route::get("/professor", "Professorcontroller@index");

Route::post("/professor/traitement", "Professorcontroller@store");

Route::resource('professeur', 'ProfesseurController');


Route::patch("/professor/edit/{id}", "Professorcontroller@update")->name('update_professor');

Route::get("/professor/edit/{id}", "Professorcontroller@edit")->name('editer_professor');




Route::get("/level/{id}", "Homecontroller@show");

//Route::get("/professor/formulaire", "Professorcontroller@create");

//Route::get("/professor", "Professorcontroller@index");

Route::post("/level/traitement", "Levelcontroller@store");

Route::resource('niveau', 'Niveaucontroller');


Route::patch("/level/edit/{id}", "Levelcontroller@update")->name('update_level');

Route::get("/level/edit/{id}", "Levelcontroller@edit")->name('editer_level');





Route::get("/people/{id}", "Homecontroller@show");

//Route::get("/people/formulaire", "Peoplecontroller@create");

//Route::get("/people", "Peoplecontroller@index");

Route::post("/people/traitement", "Peoplecontroller@store");

Route::resource('personnel', 'Personnelcontroller');


Route::patch("/people/edit/{id}", "Peoplecontroller@update")->name('update_people');

Route::get("/people/edit/{id}", "Peoplecontroller@edit")->name('editer_people');



Route::get("/student/{id}", "Homecontroller@show");

//Route::get("/etudiant/formulaire", "Studentcontroller@create");

//Route::get("/student", "Studentcontroller@index");

Route::post("/student/traitement", "Studentcontroller@store");

Route::resource('etudiant', 'EtudiantController');


Route::patch("/student/edit/{id}", "Studentcontroller@update")->name('update_student');

Route::get("/student/edit/{id}", "Studentcontroller@edit")->name('editer_student');





Route::get("/registration/{id}", "Homecontroller@show");

//Route::get("/inscription/formulaire", "Inscriptioncontroller@create");
//
//Route::get("/inscription", "Inscriptioncontroller@index");

Route::post("/registration/traitement", "Registrationcontroller@store");

Route::resource('inscription', 'Inscriptioncontroller');


Route::patch("/registration/edit/{id}", "Registrationcontroller@update")->name('update_registration');

Route::get("/registration/edit/{id}", "Registrationcontroller@edit")->name('editer_registration');




Route::get("/school/{id}", "Homecontroller@show");

Route::get("/school/formulaire", "Schoolcontroller@create");

Route::get("/school", "Schoolcontroller@index");

Route::post("/school/traitement", "Schoolcontroller@store");

Route::resource('school', 'Schoolcontroller');


Route::patch("/school/edit/{id}", "Schoolcontroller@update")->name('update_school');

Route::get("/school/edit/{id}", "Schoolcontroller@edit")->name('editer_school');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
