<?php

namespace App\Http\Controllers;

use App\Models\departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.direction.direction')->With('directions', Direction::all());
    }


    public function add()
    {
        //get carte list

        return view('database.direction.direction_add', [
            'directions' => Direction::all()
            ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->nom_direction == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }
            $direction=new Direction;
        $direction->nom_direction = $request->nom_direction;
        $direction->save();
        Session::flash('success', 'La direction a ete ajoute avec succes.');

        return redirect( route('direction'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direction = Direction::where('id', $id)->first();
        return view('database.direction.direction_show', ['direction' => $direction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direction = Direction::where('id', $id)->first();
        return view('database.direction.direction_edit', ['direction' => $direction]);
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
        if($request->nom_direction == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }

            $direction = Direction::find($id);
        $direction->nom_direction = $request->nom_direction;
        $direction->update();
        Session::flash('success', 'Le carte a ete modifier avec succes.');

        return redirect( route('direction'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Direction::find($id)->delete();
        Session::flash('success', 'departement supprime.');

        return redirect( route('direction'));
    }
}
