<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class Studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $students= \App\Student::orderBy('created_at', 'DESC')->get();

        return view('student.index', compact('students'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');

        /*$People = \App\People::pluck('name','id');
        return view('student.create', compact('people'));*/

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
        $student = new Student();
        $student->nom = $request->input('nom');
        $student->prenom = $request->input('prenom');
        $student->age = $request->input('age');
        $student->datedenaissance = $request->input('datedenaisance');
        $student->lieudenaissance = $request->input('lieudenaissance');
        $student->telephone = $request->input('telephone');
        $student->save();

        return redirect('/');


        $student->People_id = $request->input('People_id');

        $data = $request->validate([
            'nom' => 'required|min:5',
            'prenom' => 'required|min:5',
            'age' => 'required|max:3|numeric'
//           'datedenaissance'=>'required|min:5',
//        'lieudenaissance'=>'required|min:5',
//      'telephone'=>'required|min:5',
    ]);


//        $student = new Professor();
//        $student->spinnerets_id = $request->input('spinnerets_id');
//
//        $student->name = $request->input('name');
//
//        $student->salaire = $request->input('salaire');
//
//        $student->spinnerets_id = $request->input('spinnerets_id');
//        $student->save();

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

        $student = \App\Student::find($id);//on recupere le produit
        return view('student.edit', compact('student'));

        $student = \App\Student::find($id);

        $People = \App\People::pluck('name','id');
        return view('student.edit', compact('student','People'));


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
        $student = \App\Student ::find($id);

        if($student ){
            $student ->update([
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'age' => $request->input('age'),
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
