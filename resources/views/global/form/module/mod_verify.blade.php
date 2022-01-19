@extends('layouts.da.form')

@section('content')
	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="/danal/formb/images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(/danal/formb/images/bg-01.jpg);">
				<span class="contact100-form-title-1">
                Etat du Risque sur ce Module
				</span>

				<span class="contact100-form-title-2">
					ci-dessous les caracteristiques du risque!
				</span>
			</div>  
                        <form action = "" method = "post">
                    @csrf
                        <fieldset>
                                    <p>

                                            <legend><center><h3> Presentation </h3></center></legend>
                                        <div class = "form-group">
                                            <label for = "titre">Titre</label>
                                            <input type = "text" name = "titre"  disabled value="{{ $risqueModule->titre}}" class = "form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="created_at"> date de creation </label>
                                            <input type="text"  name = "created_at"  disabled value="{{ $risqueModule->created_at}}" class="form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "redacteur">Redacteur</label>
                                            <input type = "text" name = "redacteur" disabled value="{{ $risqueModule->redacteur}}" class = "form-control" >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "participants">Participants</label>
                                            <textarea name = "participants" disabled value="{{ $risqueModule->participants}}" class = "form-control" >
                                            {{ $risqueModule->participants}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "valideur">Valideur</label>
                                            <input type = "text" name = "valideur" disabled value="{{ $risqueModule->valideur}}" class = "form-control" >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "contexte">Contexte</label>
                                            <textarea name = "contexte" disabled value="{{ $risqueModule->contexte}}" class = "form-control" >
                                            {{ $risqueModule->contexte}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "perimetre">Perimetre</label>
                                            <input type = "text" name = "perimetre" disabled value="{{ $risqueModule->perimetre}}" class = "form-control" >
                                        </div>
                                </p>
                                </fieldset>
                                <p class = "description">
                                    <center><h3> Description </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "consequence_metier">Consequence metier</label>
                                            <textarea name = "consequence_metier" disabled value="{{ $risqueModule->consequence_metier}}" class = "form-control" >
                                            {{ $risqueModule->consequence_metier}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "manifestation_origine">Manifestation a l'origine du dysfonctionnement:</label>
                                            <textarea name = "manifestation_origine" disabled value="{{ $risqueModule->manifestation_origine}}" class = "form-control" >
                                            {{ $risqueModule->manifestation_origine}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "menace">Menace</label>
                                            <input type = "text" name = "menace" disabled value="{{ $risqueModule->menace}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "analyse">
                                <center><h3> Analyse intrinseque </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "besoin_securite">Besoin de securite</label>
                                            <input type = "text" name = "besoin_securite" disabled value = "{{ $risqueModule->besoin_securite}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "niveau_impact">Impact intrinseque</label>
                                            <input type = "text" name = "niveau_impact" disabled value="{{ $risqueModule->niveau_impact}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "type_menace">Type de menace</label>
                                            <input type = "text" name = "type_menace" disabled value="{{ $risqueModule->type_menace}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_intrinseque">Potentialite intrinseque</label>
                                            <input type = "number" name = "potentialite_intrinseque" disabled value="{{ $risqueModule->potentialite_intrinseque}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "justification_potentialite_intrinseque">Justification_potentialite_intrinseque</label>
                                            <textarea name = "justification_potentialite_intrinseque" disabled value="{{ $risqueModule->justification_potentialite_intrinseque}}" class = "form-control" >
                                            {{ $risqueModule->justification_potentialite_intrinseque}}
                                            </textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "gravite_intrinseque">Gravite intrinseque</label>
                                                @if($risqueModule->gravite_intrinseque==1 || $risqueModule->gravite_intrinseque==2)
                                                    <div class="p-3 mb-2 bg-success text-white">{{ $risqueModule->label_gravite_intrinseque}}</div>                                                
                                                @elseif($risqueModule->gravite_intrinseque==3)
                                                    <div class="p-3 mb-2 bg-warning text-white">{{ $risqueModule->label_gravite_intrinseque}}</div>
                                                @else
                                                    <div class="p-3 mb-2 bg-danger text-white">{{ $risqueModule->label_gravite_intrinseque}}</div>
                                                @endif                                         
                                        </div>
                                        <div class = "form-group">
                                            <label for = "label_gravite_intrinseque">Label gravite intrinseque</label>
                                            <input type = "text" name = "label_gravite_intrinseque"  disabled value="{{ $risqueModule->label_gravite_intrinseque}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "reduction_impact">
                                <center><h3> Reduction d'impact </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "mesures_confinement">Mesures de confinement</label>
                                            <textarea name = "mesures_confinement" disabled value="{{ $risqueModule->mesures_confinement}}" class = "form-control" >
                                            {{ $risqueModule->mesures_confinement}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_confininement">Efficacite des mesures de confinement</label>
                                            <input type = "number" name = "efficacite_mesures_confininement" disabled value="{{ $risqueModule->efficacite_mesures_confininement}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mesures_palliation">Mesures de palliation</label>
                                            <textarea name = "mesures_palliation"  disabled value="{{ $risqueModule->mesures_palliation}}" class = "form-control" >
                                            {{ $risqueModule->mesures_palliation}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_palliation">Efficacite des mesures de palliation</label>
                                            <input type = "number" name = "efficacite_mesures_palliation" disabled value="{{ $risqueModule->efficacite_mesures_palliation}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "impact_actuel">Impact actuel </label>
                                            <input type = "number" name = "impact_actuel"  disabled value="{{ $risqueModule->impact_actuel}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "impact_residuel">impact residuel </label>
                                            <input type = "number" name = "impact_residuel"  disabled value="{{ $risqueModule->impact_residuel}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "reduction_potentialite">
                                <center><h3> Reduction de potentialite </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "mesures_dissuation">Mesures de dissuation</label>
                                            <textarea name = "mesures_dissuation" disabled value="{{ $risqueModule->mesures_dissuation}}" class = "form-control" >
                                            {{ $risqueModule->mesures_dissuation}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_dissuation">Efficacite des mesures de dissuation</label>
                                            <input type = "number" name = "efficacite_mesures_dissuation"  disabled value="{{ $risqueModule->efficacite_mesures_dissuation}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mesures_prevention">Mesures de prevention</label>
                                            <textarea name = "mesures_prevention"  disabled value="{{ $risqueModule->mesures_prevention}}" class = "form-control" >
                                            {{ $risqueModule->mesures_prevention}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_prevention">Efficacite des mesures de prevention</label>
                                            <input type = "number" name = "efficacite_mesures_prevention"  disabled value="{{ $risqueModule->efficacite_mesures_prevention}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_actuel">Potentialite actuelle </label>
                                            <input type = "number" name = "potentialite_actuel"  disabled value="{{ $risqueModule->potentialite_actuel}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_residuel">Potentialite residuelle </label>
                                            <input type = "number" name = "potentialite_residuel"  disabled value="{{ $risqueModule->potentialite_residuel}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "gravite">
                                    <center><h3>Gravite apres application des mesures </h3></center>
                                    <div class = "form-group">
                                         <div class = "form-group">
                                            <label for = "niveau_gravite">Niveau gravite </label>
                                            <input type = "number" name = "niveau_gravite"  disabled value="{{ $risqueModule->niveau_gravite}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "label_gravite">Label gravite</label>
                                                @if($risqueModule->niveau_gravite==1 || $risqueModule->niveau_gravite==2)
                                                    <div class="alert alert-success" role="alert">{{ $risqueModule->label_gravite}}
                                                        <a href="" class="alert-link"></a>
                                                    </div>                                                
                                                @elseif($risqueModule->niveau_gravite==3)
                                                    <div class="alert alert-warning" role="alert">{{ $risqueModule->label_gravite}}
                                                        <a href="" class="alert-link"></a>
                                                    </div>
                                                @else
                                                    <div class="alert alert-danger" role="alert">{{ $risqueModule->label_gravite}}
                                                        <a href="" class="alert-link"></a>
                                                    </div>
                                                @endif                                        </div>
                                    </div>
                                </p>
                                <p class = "preconisations">
                                    <center><h3>Preconisations </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "preconisations1">preconisation 1</label>
                                            <input type = "text" name = "preconisations1"  disabled value="{{ $risqueModule->preconisations1}}" class = "form-control">                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_preconisations1">Efficacite preconisation 1</label>
                                            <input type = "number" name = "efficacite_preconisations1"  disabled value="{{ $risqueModule->efficacite_preconisations1}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "preconisation2">Preconisation 2</label>
                                            <input type = "text" name = "preconisation2"  disabled value="{{ $risqueModule->preconisation2}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_preconisation2">Efficacite Preconisation 2</label>
                                            <input type = "number" name = "efficacite_preconisation2"  disabled value="{{ $risqueModule->efficacite_preconisation2}}" class = "form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <center>
                                        <a href="{{ route('modform_delete')}}" class="btn btn-danger btn-lg menu left">Annuler</a>
                                        <a href="{{ route('globalform_module')}}" class="btn btn-success btn-lg menu-right">Enregistrer</a> 
                                    </center> 
                        </div>
                        </form>
                    </div>
                </div>
@endsection
                                
