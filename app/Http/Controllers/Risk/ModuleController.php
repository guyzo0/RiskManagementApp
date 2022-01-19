<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\RisqueModule;
use Session;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etat.module.mod')->With('modules', Module::all());
    }

    public function getForm()
    {
        $m = Module::orderBy('created_at', 'desc')->get();
        return view('formulaire/formmod', ['modules' => Module::all(),
                            'risqueModules' => RisqueModule::all()])->with('module', $m);
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
        
        $risqueModule=new RisqueModule;
        $risqueModule->titre = $request->titre;
        $risqueModule->redacteur = $request->redacteur;
        $risqueModule->participants = $request->participants;
        $risqueModule->valideur = $request->valideur;
        $risqueModule->contexte = $request->contexte;
        $risqueModule->perimetre = $request->perimetre;
        $risqueModule->consequence_metier = $request->consequence_metier;
        $risqueModule->manifestation_origine = $request->manifestation_origine;
        $risqueModule->menace = $request->menace;
        $risqueModule->besoin_securite = $request->besoin_securite;
        $risqueModule->niveau_impact = $request->niveau_impact;
        $risqueModule->type_menace = $request->type_menace;
        $risqueModule->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueModule->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueModule->setGravite_intrinseque();
        $risqueModule->setLabel_gravite_intrinseque();
        $risqueModule->mesures_confinement = $request->mesures_confinement;
        $risqueModule->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueModule->mesures_palliation = $request->mesures_palliation;
        $risqueModule->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueModule->impact_actuel = $request->impact_actuel;
        $risqueModule->setImpact_residuel();
        $risqueModule->mesures_dissuation = $request->mesures_dissuation;
        $risqueModule->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueModule->mesures_prevention = $request->mesures_prevention;
        $risqueModule->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueModule->potentialite_actuel = $request->potentialite_actuel;
        $risqueModule->setPotentialite_residuel();
        $risqueModule->setNiveau_gravite();
        $risqueModule->setLabel_gravite();
        $risqueModule->preconisations1 = $request->preconisations1;
        $risqueModule->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueModule->preconisation2 = $request->preconisation2;
        $risqueModule->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueModule->module_id = $request->module_id;
        $risqueModule->save();
        Session::flash('success', 'Le risque sur le Module a ete ajoute avec succes.');

        return redirect( route('modVerify'));
    }

    public function list()
    {
        
        return view('validation.module.module')->with('risqueModules', RisqueModule::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = Module::where('id', $id)->first();
        return view('etat.module.mod_show', ['module' => $module]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $risqueModule = RisqueModule::where('id', $id)->first();
        return view('validation.module.module_edit', ['risqueModule' => $risqueModule, 
                                                    'modules' => Module::all()]);
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
            $risqueModule = RisqueModule::find($id);
        $risqueModule->titre = $request->titre;
        $risqueModule->redacteur = $request->redacteur;
        $risqueModule->participants = $request->participants;
        $risqueModule->valideur = $request->valideur;
        $risqueModule->contexte = $request->contexte;
        $risqueModule->perimetre = $request->perimetre;
        $risqueModule->consequence_metier = $request->consequence_metier;
        $risqueModule->manifestation_origine = $request->manifestation_origine;
        $risqueModule->menace = $request->menace;
        $risqueModule->besoin_securite = $request->besoin_securite;
        $risqueModule->niveau_impact = $request->niveau_impact;
        $risqueModule->type_menace = $request->type_menace;
        $risqueModule->potentialite_intrinseque = $request->potentialite_intrinseque;
        $risqueModule->justification_potentialite_intrinseque = $request->justification_potentialite_intrinseque;
        $risqueModule->setGravite_intrinseque();
        $risqueModule->setLabel_gravite_intrinseque();
        $risqueModule->mesures_confinement = $request->mesures_confinement;
        $risqueModule->efficacite_mesures_confininement = $request->efficacite_mesures_confininement;
        $risqueModule->mesures_palliation = $request->mesures_palliation;
        $risqueModule->efficacite_mesures_palliation = $request->efficacite_mesures_palliation;
        $risqueModule->impact_actuel = $request->impact_actuel;
        $risqueModule->setImpact_residuel();
        $risqueModule->mesures_dissuation = $request->mesures_dissuation;
        $risqueModule->efficacite_mesures_dissuation = $request->efficacite_mesures_dissuation;
        $risqueModule->mesures_prevention = $request->mesures_prevention;
        $risqueModule->efficacite_mesures_prevention = $request->efficacite_mesures_prevention;
        $risqueModule->potentialite_actuel = $request->potentialite_actuel;
        $risqueModule->setPotentialite_residuel();
        $risqueModule->setNiveau_gravite();
        $risqueModule->setLabel_gravite();
        $risqueModule->preconisations1 = $request->preconisations1;
        $risqueModule->efficacite_preconisations1 = $request->efficacite_preconisations1;
        $risqueModule->preconisation2 = $request->preconisation2;
        $risqueModule->efficacite_preconisation2 = $request->efficacite_preconisation2;
        $risqueModule->validation = 1;
        $risqueModule->module_id = $request->module_id;
        $risqueModule->update();
        Session::flash('success', 'L\'analyse du module a ete validee avec succes.');

        return redirect( route('risque_module'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        risqueModule::find($id)->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez contacter l\'analyste pour une nouvelle analyse.');

        return redirect( route('risque_module'));
    }

    public function riskList()
    { 
        return view('validation.module.module_list')->with('risqueModules', RisqueModule::all());
    }


    public function etat($id)
    {
        $risqueModule = RisqueModule::where('id', $id)->first();
        return view('validation.module.module_etat', ['risqueModule' => $risqueModule]);
    }


    public function global_form()
    {
        
        return view('global.form.module.mod')->with('modules', Module::all());
    }

    public function verify()
    {
        $risqueModule = RisqueModule::where('validation', 0)->latest('created_at')->get()->first();
        return view('global.form.module.mod_verify', ['risqueModule' => $risqueModule]);
    }
    public function delete()
    {
        risqueModule::where('validation', 0)->latest('created_at')->delete();
        Session::flash('refus', 'cette analyse a ete annulee veillez reprendre!');

        return redirect( route('formmod'));
    }

}
