<?php

namespace App\Http\Controllers;

use App\Models\Processus;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class ProcessusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.processus.processus')->With('processuses', Processus::all());
    }

    public function add()
    {
        //get carte list

        $c = Division::orderBy('created_at', 'desc')->get();
        return view('database.processus.processus_add', [
            'processuses' => Processus::all(),
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
        if($request->nom_processus == null) {
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
            $processus=new Processus;
        $processus->nom_processus = $request->nom_processus;
        $processus->division = $request->division;
        $processus->departement = $request->departement;
        $processus->direction = $request->direction;
        $processus->division_id = $request->division_id;
        $processus->save();
        Session::flash('success', 'Le processus a ete ajoute avec succes.');

        return redirect( route('processus'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $processus = Processus::where('id', $id)->first();
        return view('database.processus.processus_show', ['processus' => $processus]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $processus = Processus::where('id', $id)->first();
        return view('database.processus.processus_edit', ['processus' => $processus, 'divisions' => Division::all()]);
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
        if($request->nom_processus == null) {
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
            $processus = Processus::find($id);
        $processus->nom_processus = $request->nom_processus;
        $processus->division = $request->division;
        $processus->departement = $request->departement;
        $processus->direction = $request->direction;
        $processus->division_id = $request->division_id;
        $processus->update();
        Session::flash('success', 'Le processus a ete modifier avec succes.');

        return redirect( route('processus'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        processus::find($id)->delete();
        Session::flash('success', 'processus supprime.');

        return redirect( route('processus'));
    }
}
