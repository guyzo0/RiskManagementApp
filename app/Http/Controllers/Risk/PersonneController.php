<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\RisquePersonne;
use Session;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.personne.per')->With('personnes', Personne::all());
    }

    public function getForm()
    {
        $p = Personne::orderBy('created_at', 'desc')->get();
        return view('formulaire/formper', ['personnes' => Personne::all(),
                            'risquePersonnes' => RisquePersonne::all()])->with('personne', $p);
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
        $risquePersonne=new RisquePersonne;
        $risquePersonne->titre = $request->titre;
        $risquePersonne->redacteur = $request->redacteur;
        $risquePersonne->participants = $request->participants;
        $risquePersonne->valideur = $request->valideur;
        $risquePersonne->contexte = $request->contexte;
        $risquePersonne->perimetre = $request->perimetre;
        $risquePersonne->consequence_metier = $request->consequence_metier;
        $risquePersonne->manifestation_origine = $request->manifestation_origine;
        $risquePersonne->menace = $request->menace;
        $risquePersonne->besoin_securite = $request->besoin_securite;
        $risquePersonne->niveau_impact = $request->niveau_impact;
        $risquePersonne->type_menace = $request->type_menace;
        $risquePersonne->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risquePersonne->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risquePersonne->setGravite_intrinseque();
        $risquePersonne->setLabel_gravite_intrinseque();
        $risquePersonne->mesures_confinement = $request->mesures_confinement;
        $risquePersonne->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risquePersonne->mesures_palliation = $request->mesures_palliation;
        $risquePersonne->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risquePersonne->impact_actuel = $request->impact_actuel;
        $risquePersonne->setImpact_residuel();
        $risquePersonne->mesures_dissuation = $request->mesures_dissuation;
        $risquePersonne->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risquePersonne->mesures_prevention = $request->mesures_prevention;
        $risquePersonne->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risquePersonne->potentialite_actuel = $request->potentialite_actuel;
        $risquePersonne->setPotentialite_residuel();
        $risquePersonne->setNiveau_gravite();
        $risquePersonne->setLabel_gravite();
        $risquePersonne->preconisations1 = $request->preconisations1;
        $risquePersonne->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risquePersonne->preconisation2 = $request->preconisation2;
        $risquePersonne->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risquePersonne->personne_id = $request->personne_id;
        $risquePersonne->save();
        Session::flash('success', 'Le risque sur la Personne a ete ajoute avec succes.');

        return redirect( route('perVerify'));
    }

    public function list()
    {
        
        return view('validation.personne.personne')->with('risquePersonnes', RisquePersonne::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personne = Personne::where('id', $id)->first();
        return view('etat.personne.per_show', ['personne' => $personne]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risquePersonne = RisquePersonne::where('id', $id)->first();
        return view('validation.personne.personne_edit', ['risquePersonne' => $risquePersonne, 
                                                    'personnes' => Personne::all()]);
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
            $risquePersonne = RisquePersonne::find($id);
        $risquePersonne->titre = $request->titre;
        $risquePersonne->redacteur = $request->redacteur;
        $risquePersonne->participants = $request->participants;
        $risquePersonne->valideur = $request->valideur;
        $risquePersonne->contexte = $request->contexte;
        $risquePersonne->perimetre = $request->perimetre;
        $risquePersonne->consequence_metier = $request->consequence_metier;
        $risquePersonne->manifestation_origine = $request->manifestation_origine;
        $risquePersonne->menace = $request->menace;
        $risquePersonne->besoin_securite = $request->besoin_securite;
        $risquePersonne->niveau_impact = $request->niveau_impact;
        $risquePersonne->type_menace = $request->type_menace;
        $risquePersonne->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risquePersonne->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risquePersonne->setGravite_intrinseque();
        $risquePersonne->setLabel_gravite_intrinseque();
        $risquePersonne->mesures_confinement = $request->mesures_confinement;
        $risquePersonne->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risquePersonne->mesures_palliation = $request->mesures_palliation;
        $risquePersonne->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risquePersonne->impact_actuel = $request->impact_actuel;
        $risquePersonne->setImpact_residuel();
        $risquePersonne->mesures_dissuation = $request->mesures_dissuation;
        $risquePersonne->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risquePersonne->mesures_prevention = $request->mesures_prevention;
        $risquePersonne->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risquePersonne->potentialite_actuel = $request->potentialite_actuel;
        $risquePersonne->setPotentialite_residuel();
        $risquePersonne->setNiveau_gravite();
        $risquePersonne->setLabel_gravite();
        $risquePersonne->preconisations1 = $request->preconisations1;
        $risquePersonne->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risquePersonne->preconisation2 = $request->preconisation2;
        $risquePersonne->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risquePersonne->validation = 1;
        $risquePersonne->personne_id = $request->personne_id;
        $risquePersonne->update();
        Session::flash('success', 'L\'analyse de personne a ete validee avec succes.');

        return redirect( route('risque_personne'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RisquePersonne::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_personne'));
    }

    public function riskList()
    { 
        return view('validation.personne.personne_list')->with('risquePersonnes', RisquePersonne::all());
    }


    public function etat($id)
    {
        $risquePersonne = RisquePersonne::where('id', $id)->first();
        return view('validation.personne.personne_etat', ['risquePersonne' => $risquePersonne]);
    }


    public function global_form()
    {
        
        return view('global.form.personne.per')->with('personnes', Personne::all());
    }

    public function verify()
    {
        $risquePersonne = RisquePersonne::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.personne.per_verify', ['risquePersonne' => $risquePersonne]);
    }
    public function delete()
    {
        risquePersonne::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formper'));
    }

}
