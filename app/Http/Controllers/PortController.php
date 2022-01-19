<?php

namespace App\Http\Controllers;

use App\Models\RisquePort;
use App\Models\Port;
use App\Models\Carte;
use App\Models\Module;
use App\Models\Equipement;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.port.port')->With('ports', Port::all());
    }

    public function add()
    {
        //get carte list

        $c = Carte::orderBy('created_at', 'desc')->get();
        return view('database.port.port_add', [
            'cartes' => Carte::all(),
            'ports' => Port::all(),
            'modules' => Module::all(),
            'equipements' => Equipement::all(),
            'divisions' => Division::all(),
            'departements' => Departement::all(),
            'directions' => Direction::all()
            ])->with('carte', $c);
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
        return view('database.port.port_show', ['port' => $port]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $port = Port::where('id', $id)->first();
        return view('database.port.port_edit', ['port' => $port, 'cartes' => Carte::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $reques
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
            $port = Port::find($id);
        $port->nom_port = $request->nom_port;
        $port->type_port = $request->type_port;
        $port->carte = $request->carte;
        $port->module = $request->module;
        $port->equipement = $request->equipement;
        $port->division = $request->division;
        $port->departement = $request->departement;
        $port->direction = $request->direction;
        $port->carte_id = $request->carte_id;
        $port->update();
        Session::flash('success', 'Le port a ete modifier avec succes.');

        return redirect( route('port'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Port::find($id)->delete();
        Session::flash('success', 'port supprime.');

        return redirect( route('port'));
    }


    public function niveau_graviteGeneral()
{   
    $risquePort = RisquePort::all();
    $general_port=0;
    $d = $risquePort->id;
    $ld = last($d);
    do
    {
        $t = $risquePort->titre;
        for ($d=1; $d<=$ld; $d++)
        {
            if ($risquePort->titre===$t && $risquePort->validation===1)
            {
                $general_port = $general_port+0;
            }
            else
            {
                $general_port = $general_port + $risquePort->niveau_gravite;
            }
        }
            
    } 
    while($t != NULL );
    
     return view('global.form.port.general_port')->with('general_port', $general_port);
}
}
