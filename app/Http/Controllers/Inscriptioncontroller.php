<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
class Inscriptioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $registration = \App\Registration::orderBy('created_at', 'DESC')->get();

        return view('registration.index', compact('registration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          $registration = new Registration();
        $registration->nom = $request->input('nom');
        $registration->prenom = $request->input('prenom');
        $registration->email = $request->input('datedenaissance');
         $registration->email = $request->input('lieudenaissance');
          $registration->email = $request->input('situationmatrimonial');
           $registration->email = $request->input('telephone');
            $registration->email = $request->input('email');
            $registration->email = $request->input('statut');
             $registration->email = $request->input('adresse');
              $registration->email = $request->input('genre');
               $registration->email = $request->input('message');

        $registration->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          //
        $registration=Registration ::find($id);
   if($registration )
       $registration ->delete();
   return redirect()->route('registration .index');
}

}
