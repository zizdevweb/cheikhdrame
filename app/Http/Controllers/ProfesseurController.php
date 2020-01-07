<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

     public function __construct()
{
   $this->middleware('auth');
}
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
        return view('professor.create');

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

        $data = $request->validate([
       'nom'=>'required|min:5',
       'prenom' => 'required|max:7|numeric',
       'salaire' => 'max:1000000'
   ]);

           $professor = new Professor();
        $professor->nom = $request->input('nom');
        $professor->prenom = $request->input('prenom');
        $professor->salaire = $request->input('salaire');

        $professor->save();
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
        $professor = Professor ::find($id);
   if($professor )
       $professor ->delete();
   return redirect()->route('professor .index');
}


}
