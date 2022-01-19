<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Port;
use App\Models\RisquePort;
use Session;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.port.por')->With('ports', Port::all());
    }

    public function getForm()
    {
        $p = Port::orderBy('created_at', 'desc')->get();
        return view('formulaire/formpor', ['ports' => Port::all(),
                            'risquePorts' => RisquePort::all()])->with('port', $p); 
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
       
            $risquePort=new RisquePort;
        $risquePort->titre = $request->titre;
        $risquePort->redacteur = $request->redacteur;
        $risquePort->participants = $request->participants;
        $risquePort->valideur = $request->valideur;
        $risquePort->contexte = $request->contexte;
        $risquePort->perimetre = $request->perimetre;
        $risquePort->consequence_metier = $request->consequence_metier;
        $risquePort->manifestation_origine = $request->manifestation_origine;
        $risquePort->menace = $request->menace;
        $risquePort->besoin_securite = $request->besoin_securite;
        $risquePort->niveau_impact = $request->niveau_impact;
        $risquePort->type_menace = $request->type_menace;
        $risquePort->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risquePort->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risquePort->setGravite_intrinseque();
        $risquePort->setLabel_gravite_intrinseque();
        $risquePort->mesures_confinement = $request->mesures_confinement;
        $risquePort->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risquePort->mesures_palliation = $request->mesures_palliation;
        $risquePort->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risquePort->impact_actuel = $request->impact_actuel;
        $risquePort->setImpact_residuel();
        $risquePort->mesures_dissuation = $request->mesures_dissuation;
        $risquePort->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risquePort->mesures_prevention = $request->mesures_prevention;
        $risquePort->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risquePort->potentialite_actuel = $request->potentialite_actuel;
        $risquePort->setPotentialite_residuel();
        $risquePort->setNiveau_gravite();
        $risquePort->setLabel_gravite();
        $risquePort->preconisations1 = $request->preconisations1;
        $risquePort->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risquePort->preconisation2 = $request->preconisation2;
        $risquePort->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risquePort->port_id = $request->port_id;
        $risquePort->save();
        Session::flash('success', 'Le risque sur le Port a ete ajoute avec succes.');

        return redirect( route('porVerify'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        
        return view('validation.port.port')->with('risquePorts', RisquePort::all());
    }


    public function show($id)
    {
        $port = Port::where('id', $id)->first();
        return view('etat.port.por_show', ['port' => $port]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risquePort = RisquePort::where('id', $id)->first();
        return view('validation.port.port_edit', ['risquePort' => $risquePort, 'ports' => Port::all()]);
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
            $risquePort = RisquePort::find($id);
        $risquePort->titre = $request->titre;
        $risquePort->redacteur = $request->redacteur;
        $risquePort->participants = $request->participants;
        $risquePort->valideur = $request->valideur;
        $risquePort->contexte = $request->contexte;
        $risquePort->perimetre = $request->perimetre;
        $risquePort->consequence_metier = $request->consequence_metier;
        $risquePort->manifestation_origine = $request->manifestation_origine;
        $risquePort->menace = $request->menace;
        $risquePort->besoin_securite = $request->besoin_securite;
        $risquePort->niveau_impact = $request->niveau_impact;
        $risquePort->type_menace = $request->type_menace;
        $risquePort->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risquePort->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risquePort->setGravite_intrinseque();
        $risquePort->setLabel_gravite_intrinseque();
        $risquePort->mesures_confinement = $request->mesures_confinement;
        $risquePort->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risquePort->mesures_palliation = $request->mesures_palliation;
        $risquePort->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risquePort->impact_actuel = $request->impact_actuel;
        $risquePort->setImpact_residuel();
        $risquePort->mesures_dissuation = $request->mesures_dissuation;
        $risquePort->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risquePort->mesures_prevention = $request->mesures_prevention;
        $risquePort->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risquePort->potentialite_actuel = $request->potentialite_actuel;
        $risquePort->setPotentialite_residuel();
        $risquePort->setNiveau_gravite();
        $risquePort->setLabel_gravite();
        $risquePort->preconisations1 = $request->preconisations1;
        $risquePort->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risquePort->preconisation2 = $request->preconisation2;
        $risquePort->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risquePort->validation = 1;
        $risquePort->port_id = $request->port_id;
        $risquePort->update();
        Session::flash('success', 'L\'analyse du port a ete validee avec succes.');

        return redirect( route('risque_port'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RisquePort::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_port'));
    }

    public function riskList()
    { 
        return view('validation.port.port_list')->with('risquePorts', RisquePort::all());
    }


    public function etat($id)
    {
        $risquePort = RisquePort::where('id', $id)->first();
        return view('validation.port.port_etat', ['risquePort' => $risquePort]);
    }


    public function global_form()
    {
        
        return view('global.form.port.por')->with('ports', Port::all());
    }

    public function verify()
    {
        $risquePort = RisquePort::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.port.por_verify', ['risquePort' => $risquePort]);
    }
    public function delete()
    {
        risquePort::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formpor'));
    }
    

}
