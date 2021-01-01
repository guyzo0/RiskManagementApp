<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Equipement;
use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.module.module')->With('modules', Module::all());
    }

    public function add()
    {
        //get carte list

        $c = Equipement::orderBy('created_at', 'desc')->get();
        return view('database.module.module_add', [
            'modules' => Module::all(),
            'equipements' => Equipement::all(),
            'divisions' => Division::all(),
            'departements' => Departement::all(),
            'directions' => Direction::all()
            ])->with('equipement', $c);
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
        if($request->nom_module == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
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
            $module=new Module;
        $module->nom_module = $request->nom_module;
        $module->equipement = $request->equipement;
        $module->division = $request->division;
        $module->departement = $request->departement;
        $module->direction = $request->direction;
        $module->equipement_id = $request->equipement_id;
        $module->save();
        Session::flash('success', 'Le module a ete ajoute avec succes.');

        return redirect( route('module'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = Module::where('id', $id)->first();
        return view('database.module.module_show', ['module' => $module]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::where('id', $id)->first();
        return view('database.module.module_edit', ['module' => $module, 'equipements' => Equipement::all()]);
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
        if($request->nom_module == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
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
            $module = Module::find($id);
        $module->nom_module = $request->nom_module;
        $module->equipement = $request->equipement;
        $module->division = $request->division;
        $module->departement = $request->departement;
        $module->direction = $request->direction;
        $module->equipement_id = $request->equipement_id;
        $module->update();
        Session::flash('success', 'Le module a ete modifier avec succes.');

        return redirect( route('module'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Module::find($id)->delete();
        Session::flash('success', 'module supprime.');

        return redirect( route('module'));
    }
}
