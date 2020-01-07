<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spinneret;
class FiliereController extends Controller
{
    /**Controller
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

            $spinneret= \App\Spinneret::orderBy('created_at', 'DESC')->get();

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

        $spinneret = Spinneret::find($id);
        if ($spinneret)
            $spinneret->delete();
        return redirect()->route('spinneret.index');
    }
}
