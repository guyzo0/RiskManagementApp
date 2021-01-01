<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Departement;
use App\Models\Direction;
use Session;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('database.departement.departement')->With('departements', Departement::all());
    }


    public function add()
    {
        //get carte list

        $c = Direction::orderBy('created_at', 'desc')->get();
        return view('database.departement.departement_add', [
            'departements' => Departement::all(),
            'directions' => Direction::all()
            ])->with('direction', $c);
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
        if($request->nom_departement == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->direction == null) {
            Session::flash('error', 'le champ Direction ne doit pas etre vide.');
            return redirect()->back();
        }
            $departement=new Departement;
        $departement->nom_departement = $request->nom_departement;
        $departement->direction = $request->direction;
        $departement->direction_id = $request->direction_id;
        $departement->save();
        Session::flash('success', 'Le departement a ete ajoute avec succes.');

        return redirect( route('departement'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departement = Departement::where('id', $id)->first();
        return view('database.departement.departement_show', ['departement' => $departement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departement = Departement::where('id', $id)->first();
        return view('database.departement.departement_edit', ['departement' => $departement, 'directions' => Direction::all()]);
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
        if($request->nom_departement == null) {
            Session::flash('error', 'le champ Nom ne doit pas etre vide.');
            return redirect()->back();
        }
        if($request->direction == null) {
            Session::flash('error', 'le champ Direction ne doit pas etre vide.');
            return redirect()->back();
        }
            $departement = Departement::find($id);
        $departement->nom_departement = $request->nom_departement;
        $departement->direction = $request->direction;
        $departement->direction_id = $request->direction_id;
        $departement->update();
        Session::flash('success', 'Le carte a ete modifier avec succes.');

        return redirect( route('departement'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departement::find($id)->delete();
        Session::flash('success', 'departement supprime.');

        return redirect( route('departement'));
    }
}
