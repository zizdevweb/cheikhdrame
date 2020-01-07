<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
class Professorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $professors = \App\Professor::orderBy('created_at', 'DESC')->get();

        return view('professor.index', compact('professors'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
       // return view('professor.create');

        //$Spinneret = \App\Spinneret::pluck('name','id');
        //return view('professors.create', compact('spinnerets'));
        return view('professor.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $professor = new Professor();
        $professor->nom = $request->input('nom');
        $professor->prenom = $request->input('prenom');
        $professor->salaire = $request->input('salaire');

        $professor->save();
        return redirect('/');


        $professor->Spinneret_id = $request->input('Spinneret_id');

//        $professor = new Professor();
//
//        $professor->name= $request->input('name');
//        $professor->salaire = $request->input('salaire');
//
//        $professor->save();
//        return redirect('/');
//
        $data = $request->validate([
            'nom'=>'required|min:5',
            'prenom'=>'required|min:5',
            'salaire' => 'required|max:7|numeric'
            ]);
//        $professor = new Professor();
//        $professor->spinnerets_id = $request->input('spinnerets_id');
//
//        $professor->name = $request->input('name');
//
//        $professor->salaire = $request->input('salaire');
//
//        $professor->spinnerets_id = $request->input('spinnerets_id');
//        $professor->save();

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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {

        $professor = \App\Professor::find($id);//on recupere le produit
        return view('professor.edit', compact('professor'));

        $professor = \App\Professor::find($id);
        $Spinneret = \App\Spinneret::pluck('name','id');
        return view('professor.edit', compact('professor','Spinneret'));




//       $Professor = \App\Professor::find($id);//on recupere le professor
//        return view('professor.edit', compact('professor'));
//
//        $professor = \App\Professor::find($id);
//        $Spinneret = \App\Spinneret::pluck('name','id');
//        return view('professor.edit', compact('professor','Spinneret'));

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

        $professor = \App\Professor::find($id);

        if($professor){
            $professor->update([
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'salaire' => $request->input('salaire'),
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

    public function ajout()
    {

    }
}
