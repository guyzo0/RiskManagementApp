<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.equipement.equipement')->With('equipements', Equipement::all());
    }

    public function equIndex($d)
    {
        $equipement = Equipement::where('id', $id)->first();
        return view('get.equ', ['equipement' => $equipement, 'modules' => Module::all()]);
    }

    public function add()
    {
        //get carte list

        $c = Division::orderBy('created_at', 'desc')->get();
        return view('database.equipement.equipement_add', [
            'equipements' => Equipement::all(),
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
        if($request->nom_equipement == null) {
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
            $equipement=new Equipement;
        $equipement->nom_equipement = $request->nom_equipement;
        $equipement->division = $request->division;
        $equipement->departement = $request->departement;
        $equipement->direction = $request->direction;
        $equipement->division_id = $request->division_id;
        $equipement->save();
        Session::flash('success', 'L\' equipement a ete ajoute avec succes.');

        return redirect( route('equipement'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipement = Equipement::where('id', $id)->first();
        return view('database.equipement.equipement_show', ['equipement' => $equipement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipement = Equipement::where('id', $id)->first();
        return view('database.equipement.equipement_edit', ['equipement' => $equipement, 'divisions' => Division::all()]);
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
        if($request->nom_equipement == null) {
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
            $equipement = Equipement::find($id);
        $equipement->nom_equipement = $request->nom_equipement;
        $equipement->division = $request->division;
        $equipement->departement = $request->departement;
        $equipement->direction = $request->direction;
        $equipement->division_id = $request->division_id;
        $equipement->update();
        Session::flash('success', 'L\'equipement a ete modifier avec succes.');

        return redirect( route('equipement'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipement::find($id)->delete();
        Session::flash('success', 'equipement supprime.');

        return redirect( route('equipement'));
    }
}
