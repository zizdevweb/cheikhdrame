<?php

namespace App\Http\Controllers;

use App\Spinneret;
;class Spinneretcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $spinneret = \App\Spinneret::orderBy('created_at', 'DESC')->get();

        return view('spinneret.index', compact('spinneret'));



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('spinneret.create');

        $Spinneret = \App\Spinneret::pluck('name','id');
        return view('spinneret.create', compact('professor'));

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
        $spinneret = new Spinneret();
        $spinneret->nom = $request->input('nom');
        $spinneret->description = $request->input('description');


        $spinneret->save();
        return redirect('/');


        $spinneret->Professor_id = $request->input('Professor_id');
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
        $spinneret = \App\Spinneret::find($id);//on recupere le produit
        return view('spinneret.edit', compact('spinneret'));

        $spinneret = \App\Spinneret::find($id);
        $Professor = \App\Professor::pluck('name','id');
        return view('spinneret.edit', compact('spinneret','Professor'));

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
        $spinneret = \App\Spinneret::find($id);

        if ($spinneret) {
            $spinneret->update([
                'nom' => $request->input('nom'),
                'description' => $request->input('description'),

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
          $spinneret = Professor ::find($id);
   if($spinneret )
       $spinneret ->delete();
   return redirect()->route('spinneret .index');
    }
}
