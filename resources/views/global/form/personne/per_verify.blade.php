@extends('layouts.da.form')

@section('content')
	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="/danal/formb/images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(/danal/formb/images/bg-01.jpg);">
				<span class="contact100-form-title-1">
                Etat du Risque sur cette Personne
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
                                            <input type = "text" name = "titre"  disabled value="{{ $risquePersonne->titre}}" class = "form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="created_at"> date de creation </label>
                                            <input type="text"  name = "created_at"  disabled value="{{ $risquePersonne->created_at}}" class="form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "redacteur">Redacteur</label>
                                            <input type = "text" name = "redacteur" disabled value="{{ $risquePersonne->redacteur}}" class = "form-control" >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "participants">Participants</label>
                                            <textarea name = "participants" disabled value="{{ $risquePersonne->participants}}" class = "form-control" >
                                            {{ $risquePersonne->participants}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "valideur">Valideur</label>
                                            <input type = "text" name = "valideur" disabled value="{{ $risquePersonne->valideur}}" class = "form-control" >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "contexte">Contexte</label>
                                            <textarea name = "contexte" disabled value="{{ $risquePersonne->contexte}}" class = "form-control" >
                                            {{ $risquePersonne->contexte}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "perimetre">Perimetre</label>
                                            <input type = "text" name = "perimetre" disabled value="{{ $risquePersonne->perimetre}}" class = "form-control" >
                                        </div>
                                </p>
                                </fieldset>
                                <p class = "description">
                                    <center><h3> Description </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "consequence_metier">Consequence metier</label>
                                            <textarea name = "consequence_metier" disabled value="{{ $risquePersonne->consequence_metier}}" class = "form-control" >
                                            {{ $risquePersonne->consequence_metier}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "manifestation_origine">Manifestation a l'origine du dysfonctionnement:</label>
                                            <textarea name = "manifestation_origine" disabled value="{{ $risquePersonne->manifestation_origine}}" class = "form-control" >
                                            {{ $risquePersonne->manifestation_origine}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "menace">Menace</label>
                                            <input type = "text" name = "menace" disabled value="{{ $risquePersonne->menace}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "analyse">
                                <center><h3> Analyse intrinseque </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "besoin_securite">Besoin de securite</label>
                                            <input type = "text" name = "besoin_securite" disabled value = "{{ $risquePersonne->besoin_securite}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "niveau_impact">Impact intrinseque</label>
                                            <input type = "text" name = "niveau_impact" disabled value="{{ $risquePersonne->niveau_impact}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "type_menace">Type de menace</label>
                                            <input type = "text" name = "type_menace" disabled value="{{ $risquePersonne->type_menace}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_intrinseque">Potentialite intrinseque</label>
                                            <input type = "number" name = "potentialite_intrinseque" disabled value="{{ $risquePersonne->potentialite_intrinseque}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "justification_potentialite_intrinseque">Justification_potentialite_intrinseque</label>
                                            <textarea name = "justification_potentialite_intrinseque" disabled value="{{ $risquePersonne->justification_potentialite_intrinseque}}" class = "form-control" >
                                            {{ $risquePersonne->justification_potentialite_intrinseque}}
                                            </textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "gravite_intrinseque">Gravite intrinseque</label>
                                            <input type = "number" name = "gravite_intrinseque"  disabled value="{{ $risquePersonne->gravite_intrinseque}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "label_gravite_intrinseque">Label gravite intrinseque</label>
                                                @if($risquePersonne->gravite_intrinseque==1 || $risquePersonne->gravite_intrinseque==2)
                                                    <div class="p-3 mb-2 bg-success text-white">{{ $risquePersonne->label_gravite_intrinseque}}</div>                                                
                                                @elseif($risquePersonne->gravite_intrinseque==3)
                                                    <div class="p-3 mb-2 bg-warning text-white">{{ $risquePersonne->label_gravite_intrinseque}}</div>
                                                @else
                                                    <div class="p-3 mb-2 bg-danger text-white">{{ $risquePersonne->label_gravite_intrinseque}}</div>
                                                @endif                                        
                                        </div>
                                    </div>
                                </p>
                                <p class = "reduction_impact">
                                <center><h3> Reduction d'impact </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "mesures_confinement">Mesures de confinement</label>
                                            <textarea name = "mesures_confinement" disabled value="{{ $risquePersonne->mesures_confinement}}" class = "form-control" >
                                            {{ $risquePersonne->mesures_confinement}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_confininement">Efficacite des mesures de confinement</label>
                                            <input type = "number" name = "efficacite_mesures_confininement" disabled value="{{ $risquePersonne->efficacite_mesures_confininement}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mesures_palliation">Mesures de palliation</label>
                                            <textarea name = "mesures_palliation"  disabled value="{{ $risquePersonne->mesures_palliation}}" class = "form-control" >
                                            {{ $risquePersonne->mesures_palliation}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_palliation">Efficacite des mesures de palliation</label>
                                            <input type = "number" name = "efficacite_mesures_palliation" disabled value="{{ $risquePersonne->efficacite_mesures_palliation}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "impact_actuel">Impact actuel </label>
                                            <input type = "number" name = "impact_actuel"  disabled value="{{ $risquePersonne->impact_actuel}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "impact_residuel">impact residuel </label>
                                            <input type = "number" name = "impact_residuel"  disabled value="{{ $risquePersonne->impact_residuel}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "reduction_potentialite">
                                <center><h3> Reduction de potentialite </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "mesures_dissuation">Mesures de dissuation</label>
                                            <textarea name = "mesures_dissuation" disabled value="{{ $risquePersonne->mesures_dissuation}}" class = "form-control" >
                                            {{ $risquePersonne->mesures_dissuation}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_dissuation">Efficacite des mesures de dissuation</label>
                                            <input type = "number" name = "efficacite_mesures_dissuation"  disabled value="{{ $risquePersonne->efficacite_mesures_dissuation}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mesures_prevention">Mesures de prevention</label>
                                            <textarea name = "mesures_prevention"  disabled value="{{ $risquePersonne->mesures_prevention}}" class = "form-control" >
                                            {{ $risquePersonne->mesures_prevention}}</textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_prevention">Efficacite des mesures de prevention</label>
                                            <input type = "number" name = "efficacite_mesures_prevention"  disabled value="{{ $risquePersonne->efficacite_mesures_prevention}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_actuel">Potentialite actuelle </label>
                                            <input type = "number" name = "potentialite_actuel"  disabled value="{{ $risquePersonne->potentialite_actuel}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_residuel">Potentialite residuelle </label>
                                            <input type = "number" name = "potentialite_residuel"  disabled value="{{ $risquePersonne->potentialite_residuel}}" class = "form-control">
                                        </div>
                                    </div>
                                </p>
                                <p class = "gravite">
                                    <center><h3>Gravite apres application des mesures </h3></center>
                                    <div class = "form-group">
                                         <div class = "form-group">
                                            <label for = "niveau_gravite">Niveau gravite </label>
                                            <input type = "number" name = "niveau_gravite"  disabled value="{{ $risquePersonne->niveau_gravite}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "label_gravite">Label gravite</label>
                                                @if($risquePersonne->niveau_gravite==1 || $risquePersonne->niveau_gravite==2)
                                                    <div class="p-3 mb-2 bg-success text-white">{{ $risquePersonne->label_gravite}}</div>                                                
                                                @elseif($risquePersonne->niveau_gravite==3)
                                                    <div class="p-3 mb-2 bg-warning text-white">{{ $risquePersonne->label_gravite}}</div>
                                                @else
                                                    <div class="p-3 mb-2 bg-danger text-white">{{ $risquePersonne->label_gravite}}</div>
                                                @endif                                        
                                        </div>
                                    </div>
                                </p>
                                <p class = "preconisations">
                                    <center><h3>Preconisations </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "preconisations1">preconisation 1</label>
                                            <input type = "text" name = "preconisations1"  disabled value="{{ $risquePersonne->preconisations1}}" class = "form-control">                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_preconisations1">Efficacite preconisation 1</label>
                                            <input type = "number" name = "efficacite_preconisations1"  disabled value="{{ $risquePersonne->efficacite_preconisations1}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "preconisation2">Preconisation 2</label>
                                            <input type = "text" name = "preconisation2"  disabled value="{{ $risquePersonne->preconisation2}}" class = "form-control">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_preconisation2">Efficacite Preconisation 2</label>
                                            <input type = "number" name = "efficacite_preconisation2"  disabled value="{{ $risquePersonne->efficacite_preconisation2}}" class = "form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <center>
                                        <a href="{{ route('perform_delete')}}" class="btn btn-danger btn-lg menu left">Annuler</a>
                                        <a href="{{ route('globalform_personne')}}" class="btn btn-success btn-lg menu-right">Enregistrer</a> 
                                    </center> 
                        </div>
                        </form>
                    </div>
                </div>
@endsection
                                
