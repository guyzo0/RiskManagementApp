<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipement;
use App\Models\RisqueEquipement;
use Session;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.equipement.equ')->With('equipements', Equipement::all());
    }

    public function getForm()
    {
        $e = Equipement::orderBy('created_at', 'desc')->get();
        return view('formulaire/formequ', ['equipements' => Equipement::all(),
                            'risqueEquipements' => RisqueEquipement::all()])->with('equipement', $e);
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
        $risqueEquipement=new RisqueEquipement;
        $risqueEquipement->titre = $request->titre;
        $risqueEquipement->redacteur = $request->redacteur;
        $risqueEquipement->participants = $request->participants;
        $risqueEquipement->valideur = $request->valideur;
        $risqueEquipement->contexte = $request->contexte;
        $risqueEquipement->perimetre = $request->perimetre;
        $risqueEquipement->consequence_metier = $request->consequence_metier;
        $risqueEquipement->manifestation_origine = $request->manifestation_origine;
        $risqueEquipement->menace = $request->menace;
        $risqueEquipement->besoin_securite = $request->besoin_securite;
        $risqueEquipement->niveau_impact = $request->niveau_impact;
        $risqueEquipement->type_menace = $request->type_menace;
        $risqueEquipement->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueEquipement->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueEquipement->setGravite_intrinseque();
        $risqueEquipement->setLabel_gravite_intrinseque();
        $risqueEquipement->mesures_confinement = $request->mesures_confinement;
        $risqueEquipement->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueEquipement->mesures_palliation = $request->mesures_palliation;
        $risqueEquipement->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueEquipement->impact_actuel = $request->impact_actuel;
        $risqueEquipement->setImpact_residuel();
        $risqueEquipement->mesures_dissuation = $request->mesures_dissuation;
        $risqueEquipement->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueEquipement->mesures_prevention = $request->mesures_prevention;
        $risqueEquipement->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueEquipement->potentialite_actuel = $request->potentialite_actuel;
        $risqueEquipement->setPotentialite_residuel();
        $risqueEquipement->setNiveau_gravite();
        $risqueEquipement->setLabel_gravite();
        $risqueEquipement->preconisations1 = $request->preconisations1;
        $risqueEquipement->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueEquipement->preconisation2 = $request->preconisation2;
        $risqueEquipement->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueEquipement->equipement_id = $request->equipement_id;
        $risqueEquipement->save();
        Session::flash('success', 'Le risque sur l\'Equipement a ete ajoute avec succes.');

        return redirect( route('equVerify'));
    }

    public function list()
    {
        
        return view('validation.equipement.equipement')->with('risqueEquipements', RisqueEquipement::all());
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
        return view('etat.equipement.equ_show', ['equipement' => $equipement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risqueEquipement = RisqueEquipement::where('id', $id)->first();
        return view('validation.equipement.equipement_edit', ['risqueEquipement' => $risqueEquipement, 
                                                    'equipements' => Equipement::all()]);
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
            $risqueEquipement = RisqueEquipement::find($id);
        $risqueEquipement->titre = $request->titre;
        $risqueEquipement->redacteur = $request->redacteur;
        $risqueEquipement->participants = $request->participants;
        $risqueEquipement->valideur = $request->valideur;
        $risqueEquipement->contexte = $request->contexte;
        $risqueEquipement->perimetre = $request->perimetre;
        $risqueEquipement->consequence_metier = $request->consequence_metier;
        $risqueEquipement->manifestation_origine = $request->manifestation_origine;
        $risqueEquipement->menace = $request->menace;
        $risqueEquipement->besoin_securite = $request->besoin_securite;
        $risqueEquipement->niveau_impact = $request->niveau_impact;
        $risqueEquipement->type_menace = $request->type_menace;
        $risqueEquipement->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueEquipement->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueEquipement->setGravite_intrinseque();
        $risqueEquipement->setLabel_gravite_intrinseque();
        $risqueEquipement->mesures_confinement = $request->mesures_confinement;
        $risqueEquipement->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueEquipement->mesures_palliation = $request->mesures_palliation;
        $risqueEquipement->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueEquipement->impact_actuel = $request->impact_actuel;
        $risqueEquipement->setImpact_residuel();
        $risqueEquipement->mesures_dissuation = $request->mesures_dissuation;
        $risqueEquipement->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueEquipement->mesures_prevention = $request->mesures_prevention;
        $risqueEquipement->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueEquipement->potentialite_actuel = $request->potentialite_actuel;
        $risqueEquipement->setPotentialite_residuel();
        $risqueEquipement->setNiveau_gravite();
        $risqueEquipement->setLabel_gravite();
        $risqueEquipement->preconisations1 = $request->preconisations1;
        $risqueEquipement->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueEquipement->preconisation2 = $request->preconisation2;
        $risqueEquipement->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueEquipement->validation = 1;
        $risqueEquipement->equipement_id = $request->equipement_id;
        $risqueEquipement->update();
        Session::flash('success', 'L\'analyse de l\'equipement a ete validee avec succes.');

        return redirect( route('risque_equipement'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        risqueEquipement::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_equipement'));
    }

    public function riskList()
    { 
        return view('validation.equipement.equipement_list')->with('risqueEquipements', RisqueEquipement::all());
    }


    public function etat($id)
    {
        $risqueEquipement = RisqueEquipement::where('id', $id)->first();
        return view('validation.equipement.equipement_etat', ['risqueEquipement' => $risqueEquipement]);
    }



    public function global_form()
    {
        
        return view('global.form.equipement.equ')->with('equipements', Equipement::all());
    }

    public function verify()
    {
        $risqueEquipement = RisqueEquipement::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.equipement.equ_verify', ['risqueEquipement' => $risqueEquipement]);
    }
    public function delete()
    {
        risqueEquipement::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formequ'));
    }

}
