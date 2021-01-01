<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.personne.personne')->With('personnes', Personne::all());
    }

    public function add()
    {
        //get carte list

        $c = Division::orderBy('created_at', 'desc')->get();
        return view('database.personne.personne_add', [
            'personnes' => Personne::all(),
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
        if($request->nom_personne == null) {
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
            $personne=new Personne;
        $personne->nom_personne = $request->nom_personne;
        $personne->division = $request->division;
        $personne->departement = $request->departement;
        $personne->direction = $request->direction;
        $personne->division_id = $request->division_id;
        $personne->save();
        Session::flash('success', 'La personne a ete ajoute avec succes.');

        return redirect( route('personne'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personne = Personne::where('id', $id)->first();
        return view('database.personne.personne_show', ['personne' => $personne]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personne = Personne::where('id', $id)->first();
        return view('database.personne.personne_edit', ['personne' => $personne, 'divisions' => Division::all()]);
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
        if($request->nom_personne == null) {
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
            $personne = Personne::find($id);
        $personne->nom_personne = $request->nom_personne;
        $personne->division = $request->division;
        $personne->departement = $request->departement;
        $personne->direction = $request->direction;
        $personne->division_id = $request->division_id;
        $personne->update();
        Session::flash('success', 'La personne a ete modifier avec succes.');

        return redirect( route('personne'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Personne::find($id)->delete();
        Session::flash('success', 'personne supprimee.');

        return redirect( route('personne'));
    }
}
