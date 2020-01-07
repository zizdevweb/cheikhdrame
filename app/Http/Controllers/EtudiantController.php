<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class EtudiantController extends Controller
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
          $student= Student ::find($id);
   if($student )
       $student ->delete();
   return redirect()->route('student.index');
    }
}
