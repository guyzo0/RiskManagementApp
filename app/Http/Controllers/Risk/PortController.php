<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Port;
use App\Models\Carte;
use App\Models\Module;
use App\Models\Equipement;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.port.por')->With('ports', Port::all());
    }

    public function getForm()
    {
        return view('formulaire/formpor');
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
        if($request->nom_port == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->type_port == null) {
            Session::flash('error', 'le champ Type ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->carte == null) {
            Session::flash('error', 'le champ Carte ne doit pas etre vide.');
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
            $port=new Port;
        $port->nom_port = $request->nom_port;
        $port->type_port = $request->type_port;
        $port->carte = $request->carte;
        $port->module = $request->module;
        $port->equipement = $request->equipement;
        $port->division = $request->division;
        $port->departement = $request->departement;
        $port->direction = $request->direction;
        $port->carte_id = $request->carte_id;
        $port->save();
        Session::flash('success', 'Le port a ete ajoute avec succes.');

        return redirect( route('port'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $port = Port::where('id', $id)->first();
        return view('etat.port.por_show', ['port' => $port]);
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
    }
}
