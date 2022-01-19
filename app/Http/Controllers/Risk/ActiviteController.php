<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activite;
use App\Models\RisqueActivite;
use Session;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.activite.act')->With('activites', Activite::all());
    }

    public function getForm()
    {
        $a = Activite::orderBy('created_at', 'desc')->get();
        return view('formulaire/formact', ['activites' => Activite::all(),
                            'risqueActivites' => RisqueActivite::all()])->with('activite', $a);
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
        $risqueActivite=new RisqueActivite;
        $risqueActivite->titre = $request->titre;
        $risqueActivite->redacteur = $request->redacteur;
        $risqueActivite->participants = $request->participants;
        $risqueActivite->valideur = $request->valideur;
        $risqueActivite->contexte = $request->contexte;
        $risqueActivite->perimetre = $request->perimetre;
        $risqueActivite->consequence_metier = $request->consequence_metier;
        $risqueActivite->manifestation_origine = $request->manifestation_origine;
        $risqueActivite->menace = $request->menace;
        $risqueActivite->besoin_securite = $request->besoin_securite;
        $risqueActivite->niveau_impact = $request->niveau_impact;
        $risqueActivite->type_menace = $request->type_menace;
        $risqueActivite->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueActivite->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueActivite->setGravite_intrinseque();
        $risqueActivite->setLabel_gravite_intrinseque();
        $risqueActivite->mesures_confinement = $request->mesures_confinement;
        $risqueActivite->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueActivite->mesures_palliation = $request->mesures_palliation;
        $risqueActivite->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueActivite->impact_actuel = $request->impact_actuel;
        $risqueActivite->setImpact_residuel();
        $risqueActivite->mesures_dissuation = $request->mesures_dissuation;
        $risqueActivite->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueActivite->mesures_prevention = $request->mesures_prevention;
        $risqueActivite->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueActivite->potentialite_actuel = $request->potentialite_actuel;
        $risqueActivite->setPotentialite_residuel();
        $risqueActivite->setNiveau_gravite();
        $risqueActivite->setLabel_gravite();
        $risqueActivite->preconisations1 = $request->preconisations1;
        $risqueActivite->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueActivite->preconisation2 = $request->preconisation2;
        $risqueActivite->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueActivite->activite_id = $request->activite_id;
        $risqueActivite->save();
        Session::flash('success', 'verifier le form et enregistrer ou annuler et reprendre si incorrect.');

        return redirect( route('actVerify'));
    }

    public function list()
    {
        
        return view('validation.activite.activite')->with('risqueActivites', RisqueActivite::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activite = Activite::where('id', $id)->first();
        return view('etat.activite.act_show', ['activite' => $activite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risqueActivite = RisqueActivite::where('id', $id)->first();
        return view('validation.activite.activite_edit', ['risqueActivite' => $risqueActivite, 'activites' => Activite::all()]);
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
            $risqueActivite = RisqueActivite::find($id);
        $risqueActivite->titre = $request->titre;
        $risqueActivite->redacteur = $request->redacteur;
        $risqueActivite->participants = $request->participants;
        $risqueActivite->valideur = $request->valideur;
        $risqueActivite->contexte = $request->contexte;
        $risqueActivite->perimetre = $request->perimetre;
        $risqueActivite->consequence_metier = $request->consequence_metier;
        $risqueActivite->manifestation_origine = $request->manifestation_origine;
        $risqueActivite->menace = $request->menace;
        $risqueActivite->besoin_securite = $request->besoin_securite;
        $risqueActivite->niveau_impact = $request->niveau_impact;
        $risqueActivite->type_menace = $request->type_menace;
        $risqueActivite->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueActivite->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueActivite->setGravite_intrinseque();
        $risqueActivite->setLabel_gravite_intrinseque();
        $risqueActivite->mesures_confinement = $request->mesures_confinement;
        $risqueActivite->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueActivite->mesures_palliation = $request->mesures_palliation;
        $risqueActivite->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueActivite->impact_actuel = $request->impact_actuel;
        $risqueActivite->setImpact_residuel();
        $risqueActivite->mesures_dissuation = $request->mesures_dissuation;
        $risqueActivite->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueActivite->mesures_prevention = $request->mesures_prevention;
        $risqueActivite->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueActivite->potentialite_actuel = $request->potentialite_actuel;
        $risqueActivite->setPotentialite_residuel();
        $risqueActivite->setNiveau_gravite();
        $risqueActivite->setLabel_gravite();
        $risqueActivite->preconisations1 = $request->preconisations1;
        $risqueActivite->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueActivite->preconisation2 = $request->preconisation2;
        $risqueActivite->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueActivite->validation = 1;
        $risqueActivite->activite_id = $request->activite_id;
        $risqueActivite->update();
        Session::flash('success', 'L\'analyse de l\'activite a ete validee avec succes.');

        return redirect( route('risque_activite'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        risqueActivite::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_activite'));
    }

    public function riskList()
    { 
        return view('validation.activite.activite_list')->with('risqueActivites', RisqueActivite::all());
    }


    public function etat($id)
    {
        $risqueActivite = RisqueActivite::where('id', $id)->first();
        return view('validation.activite.activite_etat', ['risqueActivite' => $risqueActivite]);
    }



    public function global_form()
    {
    
        return view('global.form.activite.act')->with('activites', Activite::all());
    }

    public function verify()
    {
        $risqueActivite = RisqueActivite::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.activite.act_verify', ['risqueActivite' => $risqueActivite]);
    }
    public function delete()
    {
        risqueActivite::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formact'));
    }

}
