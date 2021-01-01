<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.division.division')->With('divisions', Division::all());
    }

    public function divIndex($d)
    {
        $division = Division::where('id', $id)->first();
        return view('get.div', ['division' => $division, 'equipement' => Equipement::all()]);
    }

    public function add()
    {
        //get carte list

        $c = Departement::orderBy('created_at', 'desc')->get();
        return view('database.division.division_add', [
            'divisions' => Division::all(),
            'departements' => Departement::all(),
            'directions' => Direction::all()
            ])->with('departement', $c);
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
        if($request->nom_division == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
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
            $division=new Division;
        $division->nom_division = $request->nom_division;
        $division->departement = $request->departement;
        $division->direction = $request->direction;
        $division->departement_id = $request->departement_id;
        $division->save();
        Session::flash('success', 'La division a ete ajoute avec succes.');

        return redirect( route('division'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $division = Division::where('id', $id)->first();
        return view('database.division.division_show', ['division' => $division]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Division::where('id', $id)->first();
        return view('database.division.division_edit', ['division' => $division, 'departements' => Departement::all()]);
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
        if($request->nom_division == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
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
            $division = Division::find($id);
        $division->nom_division = $request->nom_division;
        $division->departement = $request->departement;
        $division->direction = $request->direction;
        $division->departement_id = $request->departement_id;
        $division->update();
        Session::flash('success', 'Le carte a ete modifier avec succes.');

        return redirect( route('division'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Division::find($id)->delete();
        Session::flash('success', 'division supprimee.');

        return redirect( route('division'));
    }
}
