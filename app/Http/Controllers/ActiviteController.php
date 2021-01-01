<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.activite.activite')->With('activites', Activite::all());
    }

    public function add()
    {
        //get carte list

        $c = Division::orderBy('created_at', 'desc')->get();
        return view('database.activite.activite_add', [
            'activites' => Activite::all(),
            'divisions' => Division::all(),
            'departements' => Departement::all(),
            'directions' => Direction::all()
            ])->with('division', $c);
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
        if($request->nom_activite == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->division == null) {
            Session::flash('error', 'le champ Division ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->departement == null) {
            Session::flash('error', 'le champ Departement ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->direction == null) {
            Session::flash('error', 'le champ Direction ne doit pas etre vide.');
            return redirect()->back();
        }
            $activite=new Activite;
        $activite->nom_activite = $request->nom_activite;
        $activite->division = $request->division;
        $activite->departement = $request->departement;
        $activite->direction = $request->direction;
        $activite->division_id = $request->division_id;
        $activite->save();
        Session::flash('success', 'La carte a ete ajoute avec succes.');

        return redirect( route('activite'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activite = Activite::where('id', $id)->first();
        return view('database.activite.activite_show', ['activite' => $activite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activite = Activite::where('id', $id)->first();
        return view('database.activite.activite_edit', ['activite' => $activite, 'divisions' => Division::all()]);
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
        if($request->nom_activite == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->division == null) {
            Session::flash('error', 'le champ Division ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->departement == null) {
            Session::flash('error', 'le champ Departement ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->direction == null) {
            Session::flash('error', 'le champ Direction ne doit pas etre vide.');
            return redirect()->back();
        }
            $activite = Activite::find($id);
        $activite->nom_activite = $request->nom_activite;
        $activite->division = $request->division;
        $activite->departement = $request->departement;
        $activite->direction = $request->direction;
        $activite->division_id = $request->division_id;
        $activite->update();
        Session::flash('success', 'L\'activite a ete modifier avec succes.');

        return redirect( route('activite'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activite::find($id)->delete();
        Session::flash('success', 'activite supprime.');

        return redirect( route('activite'));
    }
}
