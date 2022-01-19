<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carte;
use App\Models\RisqueCarte;
use Session;

class CarteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.carte.car')->With('cartes', Carte::all());
    }

    public function getForm()
    {
        $c = Carte::orderBy('created_at', 'desc')->get();
        return view('formulaire/formcar', ['cartes' => Carte::all(),
                            'risqueCartes' => RisqueCarte::all()])->with('carte', $c);
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
        $risqueCarte=new RisqueCarte;
        $risqueCarte->titre = $request->titre;
        $risqueCarte->redacteur = $request->redacteur;
        $risqueCarte->participants = $request->participants;
        $risqueCarte->valideur = $request->valideur;
        $risqueCarte->contexte = $request->contexte;
        $risqueCarte->perimetre = $request->perimetre;
        $risqueCarte->consequence_metier = $request->consequence_metier;
        $risqueCarte->manifestation_origine = $request->manifestation_origine;
        $risqueCarte->menace = $request->menace;
        $risqueCarte->besoin_securite = $request->besoin_securite;
        $risqueCarte->niveau_impact = $request->niveau_impact;
        $risqueCarte->type_menace = $request->type_menace;
        $risqueCarte->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueCarte->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueCarte->setGravite_intrinseque();
        $risqueCarte->setLabel_gravite_intrinseque();
        $risqueCarte->mesures_confinement = $request->mesures_confinement;
        $risqueCarte->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueCarte->mesures_palliation = $request->mesures_palliation;
        $risqueCarte->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueCarte->impact_actuel = $request->impact_actuel;
        $risqueCarte->setImpact_residuel();
        $risqueCarte->mesures_dissuation = $request->mesures_dissuation;
        $risqueCarte->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueCarte->mesures_prevention = $request->mesures_prevention;
        $risqueCarte->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueCarte->potentialite_actuel = $request->potentialite_actuel;
        $risqueCarte->setPotentialite_residuel();
        $risqueCarte->setNiveau_gravite();
        $risqueCarte->setLabel_gravite();
        $risqueCarte->preconisations1 = $request->preconisations1;
        $risqueCarte->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueCarte->preconisation2 = $request->preconisation2;
        $risqueCarte->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueCarte->carte_id = $request->carte_id;
        $risqueCarte->save();
        Session::flash('success', 'Le risque sur la Carte a ete ajoute avec succes.');

        return redirect( route('carVerify'));
    }

    public function list()
    {
        
        return view('validation.carte.carte')->with('risqueCartes', RisqueCarte::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carte = Carte::where('id', $id)->first();
        return view('etat.carte.car_show', ['carte' => $carte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risqueCarte = RisqueCarte::where('id', $id)->first();
        return view('validation.carte.carte_edit', ['risqueCarte' => $risqueCarte, 'cartes' => Carte::all()]);
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
            $risqueCarte = RisqueCarte::find($id);
        $risqueCarte->titre = $request->titre;
        $risqueCarte->redacteur = $request->redacteur;
        $risqueCarte->participants = $request->participants;
        $risqueCarte->valideur = $request->valideur;
        $risqueCarte->contexte = $request->contexte;
        $risqueCarte->perimetre = $request->perimetre;
        $risqueCarte->consequence_metier = $request->consequence_metier;
        $risqueCarte->manifestation_origine = $request->manifestation_origine;
        $risqueCarte->menace = $request->menace;
        $risqueCarte->besoin_securite = $request->besoin_securite;
        $risqueCarte->niveau_impact = $request->niveau_impact;
        $risqueCarte->type_menace = $request->type_menace;
        $risqueCarte->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueCarte->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueCarte->setGravite_intrinseque();
        $risqueCarte->setLabel_gravite_intrinseque();
        $risqueCarte->mesures_confinement = $request->mesures_confinement;
        $risqueCarte->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueCarte->mesures_palliation = $request->mesures_palliation;
        $risqueCarte->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueCarte->impact_actuel = $request->impact_actuel;
        $risqueCarte->setImpact_residuel();
        $risqueCarte->mesures_dissuation = $request->mesures_dissuation;
        $risqueCarte->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueCarte->mesures_prevention = $request->mesures_prevention;
        $risqueCarte->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueCarte->potentialite_actuel = $request->potentialite_actuel;
        $risqueCarte->setPotentialite_residuel();
        $risqueCarte->setNiveau_gravite();
        $risqueCarte->setLabel_gravite();
        $risqueCarte->preconisations1 = $request->preconisations1;
        $risqueCarte->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueCarte->preconisation2 = $request->preconisation2;
        $risqueCarte->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueCarte->validation = 1;
        $risqueCarte->carte_id = $request->carte_id;
        $risqueCarte->update();
        Session::flash('success', 'L\'analyse de la carte a ete validee avec succes.');

        return redirect( route('risque_carte'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        risqueCarte::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_carte'));
    }

    public function riskList()
    { 
        return view('validation.carte.carte_list')->with('risqueCartes', RisqueCarte::all());
    }


    public function etat($id)
    {
        $risqueCarte = RisqueCarte::where('id', $id)->first();
        return view('validation.carte.carte_etat', ['risqueCarte' => $risqueCarte]);
    }


    public function global_form()
    {
        
        return view('global.form.carte.car')->with('cartes', Carte::all());
    }

    public function verify()
    {
        $risqueCarte = RisqueCarte::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.carte.car_verify', ['risqueCarte' => $risqueCarte]);
    }
    public function delete()
    {
        risqueCarte::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formcar'));
    }
}
