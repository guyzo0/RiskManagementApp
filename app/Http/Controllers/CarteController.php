<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Module;
use App\Models\Equipement;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.carte.carte')->With('cartes', Carte::all());
    }

    public function add()
    {
        //get carte list

        $c = Module::orderBy('created_at', 'desc')->get();
        return view('database.carte.carte_add', [
            'cartes' => Carte::all(),
            'modules' => Module::all(),
            'equipements' => Equipement::all(),
            'divisions' => Division::all(),
            'departements' => Departement::all(),
            'directions' => Direction::all()
            ])->with('module', $c);
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
        if($request->nom_carte == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->module == null) {
            Session::flash('error', 'le champ Module ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->equipement == null) {
            Session::flash('error', 'le champ Equipement ne doit pas etre vide.');
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
            $carte=new Carte;
        $carte->nom_carte = $request->nom_carte;
        $carte->module = $request->module;
        $carte->equipement = $request->equipement;
        $carte->division = $request->division;
        $carte->departement = $request->departement;
        $carte->direction = $request->direction;
        $carte->module_id = $request->module_id;
        $carte->save();
        Session::flash('success', 'La carte a ete ajoute avec succes.');

        return redirect( route('carte'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carte = Carte::where('id', $id)->first();
        return view('database.carte.carte_show', ['carte' => $carte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carte = Carte::where('id', $id)->first();
        return view('database.carte.carte_edit', ['carte' => $carte, 'modules' => Module::all()]);
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
        if($request->nom_carte == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->module == null) {
            Session::flash('error', 'le champ Module ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->equipement == null) {
            Session::flash('error', 'le champ Equipement ne doit pas etre vide.');
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
            $carte = Carte::find($id);
        $carte->nom_carte = $request->nom_carte;
        $carte->module = $request->module;
        $carte->equipement = $request->equipement;
        $carte->division = $request->division;
        $carte->departement = $request->departement;
        $carte->direction = $request->direction;
        $carte->module_id = $request->module_id;
        $carte->update();
        Session::flash('success', 'La carte a ete modifier avec succes.');

        return redirect( route('carte'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carte::find($id)->delete();
        Session::flash('success', 'carte supprime.');

        return redirect( route('carte'));
    }
}
