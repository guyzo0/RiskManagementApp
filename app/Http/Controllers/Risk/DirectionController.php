<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\RisqueDirection;
use Session;


class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.direction.dir')->With('directions', Direction::all());
    }

    public function getForm()
    {
        $d = Direction::orderBy('created_at', 'desc')->get();
        return view('formulaire/formdir', ['directions' => Direction::all(),
                            'risqueDirections' => RisqueDirection::all()])->with('direction', $d);
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
           $risqueDirection = new RisqueDirection;
        $risqueDirection->titre = $request->titre;
        $risqueDirection->redacteur = $request->redacteur;
        $risqueDirection->participants = $request->participants;
        $risqueDirection->valideur = $request->valideur;
        $risqueDirection->contexte = $request->contexte;
        $risqueDirection->perimetre = $request->perimetre;
        $risqueDirection->consequence_metier = $request->consequence_metier;
        $risqueDirection->manifestation_origine = $request->manifestation_origine;
        $risqueDirection->menace = $request->menace;
        $risqueDirection->besoin_securite = $request->besoin_securite;
        $risqueDirection->niveau_impact = $request->niveau_impact;
        $risqueDirection->type_menace = $request->type_menace;
        $risqueDirection->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueDirection->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueDirection->setGravite_intrinseque();
        $risqueDirection->setLabel_gravite_intrinseque();
        $risqueDirection->mesures_confinement = $request->mesures_confinement;
        $risqueDirection->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueDirection->mesures_palliation = $request->mesures_palliation;
        $risqueDirection->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueDirection->impact_actuel = $request->impact_actuel;
        $risqueDirection->setImpact_residuel();
        $risqueDirection->mesures_dissuation = $request->mesures_dissuation;
        $risqueDirection->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueDirection->mesures_prevention = $request->mesures_prevention;
        $risqueDirection->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueDirection->potentialite_actuel = $request->potentialite_actuel;
        $risqueDirection->setPotentialite_residuel();
        $risqueDirection->setNiveau_gravite();
        $risqueDirection->setLabel_gravite();
        $risqueDirection->preconisations1 = $request->preconisations1;
        $risqueDirection->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueDirection->preconisation2 = $request->preconisation2;
        $risqueDirection->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueDirection->direction_id = $request->direction_id;
        $risqueDirection->save();
        Session::flash('success', 'Le risque sur la direction a ete ajoute avec succes.');

        return redirect( route('dirVerify'));
    }

    public function list()
    {
        
        return view('validation.direction.direction')->with('risqueDirections', RisqueDirection::all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direction = Direction::where('id', $id)->first();
        return view('etat.direction.dir_show', ['direction' => $direction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risqueDirection = RisqueDirection::where('id', $id)->first();
        return view('validation.direction.direction_edit', ['risqueDirection' => $risqueDirection,
                                                        'directions' => Direction::all()]);
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
            $risqueDirection = RisqueDirection::find($id);
        $risqueDirection->titre = $request->titre;
        $risqueDirection->redacteur = $request->redacteur;
        $risqueDirection->participants = $request->participants;
        $risqueDirection->valideur = $request->valideur;
        $risqueDirection->contexte = $request->contexte;
        $risqueDirection->perimetre = $request->perimetre;
        $risqueDirection->consequence_metier = $request->consequence_metier;
        $risqueDirection->manifestation_origine = $request->manifestation_origine;
        $risqueDirection->menace = $request->menace;
        $risqueDirection->besoin_securite = $request->besoin_securite;
        $risqueDirection->niveau_impact = $request->niveau_impact;
        $risqueDirection->type_menace = $request->type_menace;
        $risqueDirection->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueDirection->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueDirection->setGravite_intrinseque();
        $risqueDirection->setLabel_gravite_intrinseque();
        $risqueDirection->mesures_confinement = $request->mesures_confinement;
        $risqueDirection->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueDirection->mesures_palliation = $request->mesures_palliation;
        $risqueDirection->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueDirection->impact_actuel = $request->impact_actuel;
        $risqueDirection->setImpact_residuel();
        $risqueDirection->mesures_dissuation = $request->mesures_dissuation;
        $risqueDirection->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueDirection->mesures_prevention = $request->mesures_prevention;
        $risqueDirection->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueDirection->potentialite_actuel = $request->potentialite_actuel;
        $risqueDirection->setPotentialite_residuel();
        $risqueDirection->setNiveau_gravite();
        $risqueDirection->setLabel_gravite();
        $risqueDirection->preconisations1 = $request->preconisations1;
        $risqueDirection->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueDirection->preconisation2 = $request->preconisation2;
        $risqueDirection->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueDirection->validation = 1;
        $risqueDirection->direction_id = $request->direction_id;
        $risqueDirection->update();
        Session::flash('success', 'L\'analyse de la direction a ete validee avec succes.');

        return redirect( route('risque_direction'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        risqueDirection::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_direction'));
    }

    public function riskList()
    { 
        return view('validation.direction.direction_list')->with('risqueDirections', RisqueDirection::all());
    }


    public function etat($id)
    {
        $risqueDirection = RisqueDirection::where('id', $id)->first();
        return view('validation.direction.direction_etat', ['risqueDirection' => $risqueDirection]);
    }



    public function global_form()
    {
        
        return view('global.form.direction.dir')->with('directions', Direction::all());
    }

    public function verify()
    {
        $risqueDirection = RisqueDirection::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.direction.dir_verify', ['risqueDirection' => $risqueDirection]);
    }
    public function delete()
    {
        risqueDirection::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formdir'));
    }

}
