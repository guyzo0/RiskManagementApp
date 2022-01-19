<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\RisqueDepartement;
use Session;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.departement.dep')->With('departements', Departement::all());
    }

    public function getForm()
    {
        $d = Departement::orderBy('created_at', 'desc')->get();
        return view('formulaire/formdep', ['departements' => Departement::all(),
                            'risqueDepartements' => RisqueDepartement::all()])->with('departement', $d);
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
        $risqueDepartement=new RisqueDepartement;
        $risqueDepartement->titre = $request->titre;
        $risqueDepartement->redacteur = $request->redacteur;
        $risqueDepartement->participants = $request->participants;
        $risqueDepartement->valideur = $request->valideur;
        $risqueDepartement->contexte = $request->contexte;
        $risqueDepartement->perimetre = $request->perimetre;
        $risqueDepartement->consequence_metier = $request->consequence_metier;
        $risqueDepartement->manifestation_origine = $request->manifestation_origine;
        $risqueDepartement->menace = $request->menace;
        $risqueDepartement->besoin_securite = $request->besoin_securite;
        $risqueDepartement->niveau_impact = $request->niveau_impact;
        $risqueDepartement->type_menace = $request->type_menace;
        $risqueDepartement->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueDepartement->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueDepartement->setGravite_intrinseque();
        $risqueDepartement->setLabel_gravite_intrinseque();
        $risqueDepartement->mesures_confinement = $request->mesures_confinement;
        $risqueDepartement->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueDepartement->mesures_palliation = $request->mesures_palliation;
        $risqueDepartement->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueDepartement->impact_actuel = $request->impact_actuel;
        $risqueDepartement->setImpact_residuel();
        $risqueDepartement->mesures_dissuation = $request->mesures_dissuation;
        $risqueDepartement->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueDepartement->mesures_prevention = $request->mesures_prevention;
        $risqueDepartement->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueDepartement->potentialite_actuel = $request->potentialite_actuel;
        $risqueDepartement->setPotentialite_residuel();
        $risqueDepartement->setNiveau_gravite();
        $risqueDepartement->setLabel_gravite();
        $risqueDepartement->preconisations1 = $request->preconisations1;
        $risqueDepartement->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueDepartement->preconisation2 = $request->preconisation2;
        $risqueDepartement->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueDepartement->departement_id = $request->departement_id;
        $risqueDepartement->save();
        Session::flash('success', 'Le risque sur le Departement a ete ajoute avec succes.');

        return redirect( route('depVerify'));
    }

    public function list()
    {
        
        return view('validation.departement.departement')->with('risqueDepartements', RisqueDepartement::all());
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
        return view('etat.departement.dep_show', ['departement' => $departement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risqueDepartement = RisqueDepartement::where('id', $id)->first();
        return view('validation.departement.departement_edit', ['risqueDepartement' => $risqueDepartement, 
                                                                'departements' => Departement::all()]);
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
            $risqueDepartement = RisqueDepartement::find($id);
        $risqueDepartement->titre = $request->titre;
        $risqueDepartement->redacteur = $request->redacteur;
        $risqueDepartement->participants = $request->participants;
        $risqueDepartement->valideur = $request->valideur;
        $risqueDepartement->contexte = $request->contexte;
        $risqueDepartement->perimetre = $request->perimetre;
        $risqueDepartement->consequence_metier = $request->consequence_metier;
        $risqueDepartement->manifestation_origine = $request->manifestation_origine;
        $risqueDepartement->menace = $request->menace;
        $risqueDepartement->besoin_securite = $request->besoin_securite;
        $risqueDepartement->niveau_impact = $request->niveau_impact;
        $risqueDepartement->type_menace = $request->type_menace;
        $risqueDepartement->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueDepartement->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueDepartement->setGravite_intrinseque();
        $risqueDepartement->setLabel_gravite_intrinseque();
        $risqueDepartement->mesures_confinement = $request->mesures_confinement;
        $risqueDepartement->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueDepartement->mesures_palliation = $request->mesures_palliation;
        $risqueDepartement->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueDepartement->impact_actuel = $request->impact_actuel;
        $risqueDepartement->setImpact_residuel();
        $risqueDepartement->mesures_dissuation = $request->mesures_dissuation;
        $risqueDepartement->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueDepartement->mesures_prevention = $request->mesures_prevention;
        $risqueDepartement->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueDepartement->potentialite_actuel = $request->potentialite_actuel;
        $risqueDepartement->setPotentialite_residuel();
        $risqueDepartement->setNiveau_gravite();
        $risqueDepartement->setLabel_gravite();
        $risqueDepartement->preconisations1 = $request->preconisations1;
        $risqueDepartement->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueDepartement->preconisation2 = $request->preconisation2;
        $risqueDepartement->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueDepartement->validation = 1;
        $risqueDepartement->departement_id = $request->departement_id;
        $risqueDepartement->update();
        Session::flash('success', 'L\'analyse du departement a ete validee avec succes.');

        return redirect( route('risque_departement'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        risqueDepartement::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_departement'));
    }

    
    public function riskList()
    { 
        return view('validation.departement.departement_list')->with('risqueDepartements', RisqueDepartement::all());
    }


    public function etat($id)
    {
        $risqueDepartement = RisqueDepartement::where('id', $id)->first();
        return view('validation.departement.departement_etat', ['risqueDepartement' => $risqueDepartement]);
    }



    public function global_form()
    {
        
        return view('global.form.departement.dep')->with('departements', Departement::all());
    }

    public function verify()
    {
        $risqueDepartement = RisqueDepartement::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.departement.dep_verify', ['risqueDepartement' => $risqueDepartement]);
    }
    public function delete()
    {
        risqueDepartement::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formdep'));
    }
    
}
