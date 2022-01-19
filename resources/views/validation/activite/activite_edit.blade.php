@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">Etat du Risque sur cette Activite</span>  
                        <form action = "{{ route('risqueActivite_update', ['id'=>$risqueActivite->id])}}" method = "post">
                    @csrf
                        <fieldset>
                        <p class = "analyse">
                                    <center><h3> Localisation</h3></center>
                                        <div class = "form-group">
                                            <label for = "activite_id">Activite</label>
                                            <select name="activite_id" id="activite" class="form-control">
                                                @foreach($activites as $activite)
                                                    @if($activite->id == $risqueActivite->activite_id)
                                                        <option value="{{ $activite->id }}" selected>{{$activite->id}}-{{$activite->nom_activite}} </option>
                                                    @else
                                                        <option value="{{ $activite->id }}">{{$activite->id}}-{{$activite->nom_activite}} </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </p>
                                    <p>
                                    <legend><center><h3> Presentation </h3></center></legend>
                                        <div class = "form-group">
                                            <label for = "titre">Titre</label>
                                            <input type="text" name="titre" id="titre" required value="{{ $risqueActivite->titre }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="created_at"> date de creation </label>
                                            <input type="text"  name = "created_at" id = "created_at" required value="{{ $risqueActivite->created_at}}" class="form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "redacteur">Redacteur</label>
                                            <input type = "text" name = "redacteur" id = "redacteur" required value="{{ $risqueActivite->redacteur}}" class = "form-control" >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "participants">Participants</label>
                                            <textarea name = "participants" id = "participants" required value="{{ $risqueActivite->participants}}" class = "form-control" >
                                            {{ $risqueActivite->participants}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "valideur">Valideur</label>
                                            <input type = "text" name = "valideur" id = "valideur" required value="{{ $risqueActivite->valideur}}" class = "form-control" >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "contexte">Contexte</label>
                                            <textarea name = "contexte" id = "contexte" required value="{{ $risqueActivite->contexte}}" class = "form-control" >
                                            {{ $risqueActivite->contexte}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "perimetre">Perimetre</label>
                                            <input type = "text" name = "perimetre" id = "perimetre" required value="{{ $risqueActivite->perimetre}}" class = "form-control" >
                                        </div>
                                </p>
                                </fieldset>
                                <p class = "description">
                                    <center><h3> Description </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "consequence_metier">Consequence metier</label>
                                            <textarea name = "consequence_metier" id = "consequence_metier" required value="{{ $risqueActivite->consequence_metier}}" class = "form-control" >
                                            {{ $risqueActivite->consequence_metier}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "manifestation_origine">Manifestation a l'origine du dysfonctionnement:</label>
                                            <textarea name = "manifestation_origine" id = "manifestation_origine" required value="{{ $risqueActivite->manifestation_origine}}" class = "form-control" >
                                            {{ $risqueActivite->manifestation_origine}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "menace">Menace</label>
                                            <input type = "text" name = "menace" id = "menace" required value="{{ $risqueActivite->menace}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "analyse">
                                <center><h3> Analyse intrinseque </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "besoin_securite">Besoin de securite</label>
                                            <input type = "text" name = "besoin_securite" id = "besoin_securite" required value = "{{ $risqueActivite->besoin_securite}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "niveau_impact">Impact intrinseque</label>
                                            <input type = "text" name = "niveau_impact" id = "niveau_impact" required value="{{ $risqueActivite->niveau_impact}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "type_menace">Type de menace</label>
                                            <input type = "text" name = "type_menace" id = "type_menace" required value="{{ $risqueActivite->type_menace}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_intrinseque">Potentialite intrinseque</label>
                                            <input type = "number" name = "potentialite_intrinseque" id = "potentialite_intrinseque" required value="{{ $risqueActivite->potentialite_intrinseque}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "justification_potentialite_intrinseque">Justification_potentialite_intrinseque</label>
                                            <textarea name = "justification_potentialite_intrinseque" id = "justification_potentialite_intrinseque" required value="{{ $risqueActivite->justification_potentialite_intrinseque}}" class = "form-control" >
                                            {{ $risqueActivite->justification_potentialite_intrinseque}}
                                            </textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "gravite_intrinseque">Gravite intrinseque</label>
                                            <input type = "number" name = "gravite_intrinseque" id = "gravite_intrinseque" disabled value="{{ $risqueActivite->gravite_intrinseque}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "label_gravite_intrinseque">Label gravite intrinseque</label>
                                            <input type = "text" name = "label_gravite_intrinseque" id = "label_gravite_intrinseque" disabled value="{{ $risqueActivite->label_gravite_intrinseque}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "reduction_impact">
                                <center><h3> Reduction d'impact </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "mesures_confinement">Mesures de confinement</label>
                                            <textarea name = "mesures_confinement" id = "mesures_confinement" required value="{{ $risqueActivite->mesures_confinement}}" class = "form-control" >
                                            {{ $risqueActivite->mesures_confinement}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_confininement">Efficacite des mesures de confinement</label>
                                            <input type = "number" name = "efficacite_mesures_confininement" id = "efficacite_mesures_confininement" required value="{{ $risqueActivite->efficacite_mesures_confininement}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mesures_palliation">Mesures de palliation</label>
                                            <textarea name = "mesures_palliation" id = "mesures_palliation" required value="{{ $risqueActivite->mesures_palliation}}" class = "form-control" >
                                            {{ $risqueActivite->mesures_palliation}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_palliation">Efficacite des mesures de palliation</label>
                                            <input type = "number" name = "efficacite_mesures_palliation" id = "efficacite_mesures_palliation" required value="{{ $risqueActivite->efficacite_mesures_palliation}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "impact_actuel">Impact actuel </label>
                                            <input type = "number" name = "impact_actuel" id = "impact_actuel" required value="{{ $risqueActivite->impact_actuel}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "impact_residuel">impact residuel </label>
                                            <input type = "number" name = "impact_residuel" id = "impact_residuel" disabled value="{{ $risqueActivite->impact_residuel}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "reduction_potentialite">
                                <center><h3> Reduction de potentialite </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "mesures_dissuation">Mesures de dissuation</label>
                                            <textarea name = "mesures_dissuation" id = "mesures_dissuation" required value="{{ $risqueActivite->mesures_dissuation}}" class = "form-control" >
                                            {{ $risqueActivite->mesures_dissuation}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_dissuation">Efficacite des mesures de dissuation</label>
                                            <input type = "number" name = "efficacite_mesures_dissuation" id = "efficacite_mesures_dissuation" required value="{{ $risqueActivite->efficacite_mesures_dissuation}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mesures_prevention">Mesures de prevention</label>
                                            <textarea name = "mesures_prevention" id = "mesures_prevention" required value="{{ $risqueActivite->mesures_prevention}}" class = "form-control" >
                                            {{ $risqueActivite->mesures_prevention}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_prevention">Efficacite des mesures de prevention</label>
                                            <input type = "number" name = "efficacite_mesures_prevention" id = "efficacite_mesures_prevention" required value="{{ $risqueActivite->efficacite_mesures_prevention}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_actuel">Potentialite actuelle </label>
                                            <input type = "number" name = "potentialite_actuel" id = "potentialite_actuel" required value="{{ $risqueActivite->potentialite_actuel}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_residuel">Potentialite residuelle </label>
                                            <input type = "number" name = "potentialite_residuel" id = "potentialite_residuel" disabled value="{{ $risqueActivite->potentialite_residuel}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "gravite">
                                    <center><h3>Gravite apres application des mesures </h3></center>
                                    <div class = "form-group">
                                         <div class = "form-group">
                                            <label for = "niveau_gravite">Niveau gravite </label>
                                            <input type = "number" name = "niveau_gravite" id = "niveau_gravite" disabled value="{{ $risqueActivite->niveau_gravite}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "label_gravite">Label gravite</label>
                                            <input type = "text" name = "label_gravite" id = "label_gravite" disabled value="{{ $risqueActivite->label_gravite}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "preconisations">
                                    <center><h3>Preconisations </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "preconisations1">preconisation 1</label>
                                            <input type = "text" name = "preconisations1" id = "preconisations1" required value="{{ $risqueActivite->preconisations1}}" class = "form-control">                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_preconisations1">Efficacite preconisation 1</label>
                                            <input type = "number" name = "efficacite_preconisations1" id = "efficacite_preconisations1" required value="{{ $risqueActivite->efficacite_preconisations1}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "preconisation2">Preconisation 2</label>
                                            <input type = "text" name = "preconisation2" id = "preconisation2" required value="{{ $risqueActivite->preconisation2}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_preconisation2">Efficacite Preconisation 2</label>
                                            <input type = "number" name = "efficacite_preconisation2" id = "efficacite_preconisation2" required value="{{ $risqueActivite->efficacite_preconisation2}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                 <div class = "form-group">
                                 <center>
                                    <button type = "submit" class = "btn btn-success btn-lg">Valider</button>
                                    <a href="{{ route('risqueActivite_delete', ['id'=>$risqueActivite->id])}}" class="btn btn-sm btn-danger">Annuler</a>
                                </center>
                                </div>
                        </form>
                    </div>
                </div>
@endsection
                                
