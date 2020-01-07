<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
class Peoplecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $people = \App\People::orderBy('created_at', 'DESC')->get();

        return view('people.index', compact('people'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('people.create');

        $people = \App\People::pluck('name','id');
        return view('people.create', compact('professor'));

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
        $people = new people();
        $people->nom = $request->input('nom');
        $people->prenom= $request->input('prenom');


        $people->save();
        return redirect('/');


        $people->Professor_id = $request->input('Professor_id');
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
        {
            //
            $people = \App\People::find($id);//on recupere le produit
            return view('people.edit', compact('people'));

            $people = \App\People::find($id);
            $People = \App\People::pluck('name', 'id');
            return view('people.edit', compact('people', 'Professor'));
        }
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
        $people = \App\People::find($id);

        if ($people) {
            $people->update([
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),

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
