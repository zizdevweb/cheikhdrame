<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
class Schoolcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $school = \App\School::orderBy('created_at', 'DESC')->get();

        return view('school.index', compact('school'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('school.create');

        $Spinnerets = \App\Spinneret::pluck('name','id');
        return view('school.create', compact('spinnerets'));

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
    $school = new Professor();
    $school->nom = $request->input('nom');
    $school->adreese = $request->input('adresse');
    $school->type = $request->input('type');

    $school->save();
    return redirect('/');


    $school->Spinneret_id = $request->input('Spinneret_id');
    return redirect('/');

    $data = $request->validate([
        'nom' => 'required|min:5',
        'adresse' => 'required|min:5',
        'type' => 'required|max:7|numeric'
    ]);
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

        $school = \App\School::find($id);//on recupere le produit
        return view('school.edit', compact('school'));

        $school = \App\School::find($id);
        $Spinneret = \App\Spinneret::pluck('name','id');
        return view('school.edit', compact('school','Spinneret'));



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
        $school = \App\School::find($id);

        if($school){
            $school->update([
                'nom' => $request->input('nom'),
                'adresse' => $request->input('adresse'),
                'type' => $request->input('type'),
            ]);
        }

        return redirect()->back();


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
    }
}
