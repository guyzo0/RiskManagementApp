<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RisqueDivision;
use App\Models\Division;
use Session;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.division.div')->With('divisions', Division::all());
    }

    public function getForm()
    {
        $d = Division::orderBy('created_at', 'desc')->get();
        return view('formulaire/formdiv', ['divisions' => Division::all(),
                            'risqueDivisions' => RisqueDivision::all()])->with('division', $d);
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
        
        $risqueDivision=new RisqueDivision;
        $risqueDivision->titre = $request->titre;
        $risqueDivision->redacteur = $request->redacteur;
        $risqueDivision->participants = $request->participants;
        $risqueDivision->valideur = $request->valideur;
        $risqueDivision->contexte = $request->contexte;
        $risqueDivision->perimetre = $request->perimetre;
        $risqueDivision->consequence_metier = $request->consequence_metier;
        $risqueDivision->manifestation_origine = $request->manifestation_origine;
        $risqueDivision->menace = $request->menace;
        $risqueDivision->besoin_securite = $request->besoin_securite;
        $risqueDivision->niveau_impact = $request->niveau_impact;
        $risqueDivision->type_menace = $request->type_menace;
        $risqueDivision->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueDivision->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueDivision->setGravite_intrinseque();
        $risqueDivision->setLabel_gravite_intrinseque();
        $risqueDivision->mesures_confinement = $request->mesures_confinement;
        $risqueDivision->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueDivision->mesures_palliation = $request->mesures_palliation;
        $risqueDivision->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueDivision->impact_actuel = $request->impact_actuel;
        $risqueDivision->setImpact_residuel();
        $risqueDivision->mesures_dissuation = $request->mesures_dissuation;
        $risqueDivision->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueDivision->mesures_prevention = $request->mesures_prevention;
        $risqueDivision->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueDivision->potentialite_actuel = $request->potentialite_actuel;
        $risqueDivision->setPotentialite_residuel();
        $risqueDivision->setNiveau_gravite();
        $risqueDivision->setLabel_gravite();
        $risqueDivision->preconisations1 = $request->preconisations1;
        $risqueDivision->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueDivision->preconisation2 = $request->preconisation2;
        $risqueDivision->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueDivision->division_id = $request->division_id;
        $risqueDivision->save();
        Session::flash('success', 'Le risque sur la Division a ete ajoute avec succes.');

        return redirect( route('divVerify'));
    }

    public function list()
    {
        
        return view('validation.division.division')->with('risqueDivisions', RisqueDivision::all());
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
        return view('etat.division.div_show', ['division' => $division]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risqueDivision = RisqueDivision::where('id', $id)->first();
        return view('validation.division.division_edit', ['risqueDivision' => $risqueDivision, 
                                                        'divisions' => Division::all()]);
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
            $risqueDivision = RisqueDivision::find($id);
        $risqueDivision->titre = $request->titre;
        $risqueDivision->redacteur = $request->redacteur;
        $risqueDivision->participants = $request->participants;
        $risqueDivision->valideur = $request->valideur;
        $risqueDivision->contexte = $request->contexte;
        $risqueDivision->perimetre = $request->perimetre;
        $risqueDivision->consequence_metier = $request->consequence_metier;
        $risqueDivision->manifestation_origine = $request->manifestation_origine;
        $risqueDivision->menace = $request->menace;
        $risqueDivision->besoin_securite = $request->besoin_securite;
        $risqueDivision->niveau_impact = $request->niveau_impact;
        $risqueDivision->type_menace = $request->type_menace;
        $risqueDivision->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueDivision->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueDivision->setGravite_intrinseque();
        $risqueDivision->setLabel_gravite_intrinseque();
        $risqueDivision->mesures_confinement = $request->mesures_confinement;
        $risqueDivision->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueDivision->mesures_palliation = $request->mesures_palliation;
        $risqueDivision->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueDivision->impact_actuel = $request->impact_actuel;
        $risqueDivision->setImpact_residuel();
        $risqueDivision->mesures_dissuation = $request->mesures_dissuation;
        $risqueDivision->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueDivision->mesures_prevention = $request->mesures_prevention;
        $risqueDivision->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueDivision->potentialite_actuel = $request->potentialite_actuel;
        $risqueDivision->setPotentialite_residuel();
        $risqueDivision->setNiveau_gravite();
        $risqueDivision->setLabel_gravite();
        $risqueDivision->preconisations1 = $request->preconisations1;
        $risqueDivision->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueDivision->preconisation2 = $request->preconisation2;
        $risqueDivision->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueDivision->validation = 1;
        $risqueDivision->division_id = $request->division_id;
        $risqueDivision->update();
        Session::flash('success', 'L\'analyse de la division a ete validee avec succes.');

        return redirect( route('risque_division'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        risqueDivision::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee.');

        return redirect( route('risque_division'));
    }

    public function riskList()
    { 
        return view('validation.division.division_list')->with('risqueDivisions', RisqueDivision::all());
    }


    public function etat($id)
    {
        $risqueDivision = RisqueDivision::where('id', $id)->first();
        return view('validation.division.division_etat', ['risqueDivision' => $risqueDivision]);
    }



    public function global_form()
    {
        
        return view('global.form.division.div')->with('divisions', Division::all());
    }

    public function verify()
    {
        $risqueDivision = RisqueDivision::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.division.div_verify', ['risqueDivision' => $risqueDivision]);
    }
    public function delete()
    {
        risqueDivision::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formdiv'));
    }
}
