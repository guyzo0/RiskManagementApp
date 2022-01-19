<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Processus;
use App\Models\RisqueProcessus;
use Session;

class ProcessusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.processus.pro')->With('processuses', Processus::all());
    }

    public function getForm()
    {
        $p = Processus::orderBy('created_at', 'desc')->get();
        return view('formulaire/formpro', ['processuses' => Processus::all(),
                            'risqueProcessuses' => RisqueProcessus::all()])->with('processus', $p);
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
        $risqueProcessus=new RisqueProcessus;
        $risqueProcessus->titre = $request->titre;
        $risqueProcessus->redacteur = $request->redacteur;
        $risqueProcessus->participants = $request->participants;
        $risqueProcessus->valideur = $request->valideur;
        $risqueProcessus->contexte = $request->contexte;
        $risqueProcessus->perimetre = $request->perimetre;
        $risqueProcessus->consequence_metier = $request->consequence_metier;
        $risqueProcessus->manifestation_origine = $request->manifestation_origine;
        $risqueProcessus->menace = $request->menace;
        $risqueProcessus->besoin_securite = $request->besoin_securite;
        $risqueProcessus->niveau_impact = $request->niveau_impact;
        $risqueProcessus->type_menace = $request->type_menace;
        $risqueProcessus->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueProcessus->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueProcessus->setGravite_intrinseque();
        $risqueProcessus->setLabel_gravite_intrinseque();
        $risqueProcessus->mesures_confinement = $request->mesures_confinement;
        $risqueProcessus->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueProcessus->mesures_palliation = $request->mesures_palliation;
        $risqueProcessus->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueProcessus->impact_actuel = $request->impact_actuel;
        $risqueProcessus->setImpact_residuel();
        $risqueProcessus->mesures_dissuation = $request->mesures_dissuation;
        $risqueProcessus->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueProcessus->mesures_prevention = $request->mesures_prevention;
        $risqueProcessus->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueProcessus->potentialite_actuel = $request->potentialite_actuel;
        $risqueProcessus->setPotentialite_residuel();
        $risqueProcessus->setNiveau_gravite();
        $risqueProcessus->setLabel_gravite();
        $risqueProcessus->preconisations1 = $request->preconisations1;
        $risqueProcessus->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueProcessus->preconisation2 = $request->preconisation2;
        $risqueProcessus->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueProcessus->processus_id = $request->processus_id;
        $risqueProcessus->save();
        Session::flash('success', 'Le risque sur le Processus a ete ajoute avec succes.');

        return redirect( route('proVerify'));
    }

    public function list()
    {
        
        return view('validation.processus.processus')->with('risqueProcessuses', RisqueProcessus::all());
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
        return view('etat.processus.pro_show', ['processus' => $processus]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risqueProcessus = RisqueProcessus::where('id', $id)->first();
        return view('validation.processus.processus_edit', ['risqueProcessus' => $risqueProcessus, 
                                                        'processuses' => Processus::all()]);
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
            $risqueProcessus = RisqueProcessus::find($id);
        $risqueProcessus->titre = $request->titre;
        $risqueProcessus->redacteur = $request->redacteur;
        $risqueProcessus->participants = $request->participants;
        $risqueProcessus->valideur = $request->valideur;
        $risqueProcessus->contexte = $request->contexte;
        $risqueProcessus->perimetre = $request->perimetre;
        $risqueProcessus->consequence_metier = $request->consequence_metier;
        $risqueProcessus->manifestation_origine = $request->manifestation_origine;
        $risqueProcessus->menace = $request->menace;
        $risqueProcessus->besoin_securite = $request->besoin_securite;
        $risqueProcessus->niveau_impact = $request->niveau_impact;
        $risqueProcessus->type_menace = $request->type_menace;
        $risqueProcessus->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueProcessus->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueProcessus->setGravite_intrinseque();
        $risqueProcessus->setLabel_gravite_intrinseque();
        $risqueProcessus->mesures_confinement = $request->mesures_confinement;
        $risqueProcessus->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueProcessus->mesures_palliation = $request->mesures_palliation;
        $risqueProcessus->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueProcessus->impact_actuel = $request->impact_actuel;
        $risqueProcessus->setImpact_residuel();
        $risqueProcessus->mesures_dissuation = $request->mesures_dissuation;
        $risqueProcessus->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueProcessus->mesures_prevention = $request->mesures_prevention;
        $risqueProcessus->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueProcessus->potentialite_actuel = $request->potentialite_actuel;
        $risqueProcessus->setPotentialite_residuel();
        $risqueProcessus->setNiveau_gravite();
        $risqueProcessus->setLabel_gravite();
        $risqueProcessus->preconisations1 = $request->preconisations1;
        $risqueProcessus->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueProcessus->preconisation2 = $request->preconisation2;
        $risqueProcessus->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueProcessus->validation = 1;
        $risqueProcessus->processus_id = $request->processus_id;
        $risqueProcessus->update();
        Session::flash('success', 'L\'analyse du processus a ete validee avec succes.');

        return redirect( route('risque_processus'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RisqueProcessus::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_processus'));
    }

    public function riskList()
    { 
        return view('validation.processus.processus_list')->with('risqueProcessuses', RisqueProcessus::all());
    }


    public function etat($id)
    {
        $risqueProcessus = RisqueProcessus::where('id', $id)->first();
        return view('validation.processus.processus_etat', ['risqueProcessus' => $risqueProcessus]);
    }
    
 

    public function global_form()
    {
        
        return view('global.form.processus.pro')->with('processuses', Processus::all());
    }

    public function verify()
    {
        $risqueProcessus = RisqueProcessus::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.processus.pro_verify', ['risqueProcessus' => $risqueProcessus]);
    }
    public function delete()
    {
        risqueProcessus::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formpro'));
    }

}
