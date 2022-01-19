@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100">  
                        <form action = "{{ route('RisqueCarte.store')}}" method = "post">
                    @csrf
                    <span class="contact100-form-title">Formulaire d'analyse du Risque sur une carte</span>
                    <fieldset>
                    <p class = "analyse">
                                <center><h3> Localisation</h3></center>
                                        <div class = "form-group">
                                            <label for = "carte_id">Carte, Module, Equipement, Division, Departement, Direction</label>
                                            <select name="carte_id" id="carte" class="form-control">
                                                @foreach($cartes as $carte)
                                                    <option value="{{ $carte->id }}">{{$carte->id}}-{{$carte->nom_carte}}, {{$carte->module}}, 
                                                    {{$carte->equipement}}, {{$carte->division}}, {{$carte->departement}}, {{$carte->Direction}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                </p>
                                    <p>

                                            <legend><center><h3> Presentation </h3></center></legend>
                                        <div class = "form-group">
                                            <label for = "titre">Titre</label>
                                            <select name="titre" id="titre" class="form-control">
                                                @foreach($cartes as $carte)
                                                    <option value="{{ $carte->nom_carte }}">{{$carte->id}}-{{$carte->nom_carte}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "redacteur">Redacteur</label>
                                            <input type = "text" name = "redacteur" id = "redacteur" class = "form-control" required >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "participants">Participants</label>
                                            <textarea name = "participants" id = "participants" class = "form-control"required ></textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "valideur">Valideur</label>
                                            <input type = "text" name = "valideur" id = "valideur" class = "form-control" required >
                                        </div>
                                        <div class = "form-group">
                                            <label for = "contexte">Contexte</label>
                                            <textarea name = "contexte" id = "contexte" class = "form-control" required ></textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "perimetre">Perimetre</label>
                                            <input type = "text" name = "perimetre" id = "perimetre" class = "form-control" required >
                                        </div>
                                </p>
                                </fieldset>
                                <p class = "description">
                                    <center><h3> Description </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "consequence_metier">Consequence metier</label>
                                            <textarea name = "consequence_metier" id = "consequence_metier" class = "form-control" required ></textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "manifestation_origine">Manifestation a l'origine du dysfonctionnement:</label>
                                            <textarea name = "manifestation_origine" id = "manifestation_origine" class = "form-control"required ></textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "menace">Menace</label>
                                            <input type = "text" name = "menace" id = "menace" class = "form-control" required>
                                        </div>
                                    </div>
                                </p>
                                <p class = "analyse">
                                <center><h3> Analyse intrinseque </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "besoin_securite">Besoin de securite</label>
                                            <select name = "besoin_securite" id = "besoin_securite" class = "form-control" required>
                                                <option value = "disponibilite"> D </option>
                                                <option value = "integrite"> I </option>
                                                <option value = "confidentialite"> C </option>
                                                <option value = "efficience"> E </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "niveau_impact">Impact intrinseque</label>
                                            <select name = "niveau_impact" id = "niveau_impact" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "type_menace">Type de menace</label>
                                            <select name = "type_menace" id = "type_menace" class = "form-control" required>
                                                <option value = "accident"> A </option>
                                                <option value = "erreur"> E </option>
                                                <option value = "volontaire"> V </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_intrinseque">Potentialite intrinseque</label>
                                            <select name = "potentialite_intrinseque" id = "potentialite_intrinseque" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "justification_potentialite_intrinseque">Justification_potentialite_intrinseque</label>
                                            <textarea name = "justification_potentialite_intrinseque" id = "justification_potentialite_intrinseque" class = "form-control" required ></textarea>
                                        </div>
                                    </div>
                                </p>
                                <p class = "reduction_impact">
                                <center><h3> Reduction d'impact </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "mesures_confinement">Mesures de confinement</label>
                                            <textarea name = "mesures_confinement" id = "mesures_confinement" class = "form-control" required ></textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_confininement">Efficacite des mesures de confinement</label>
                                            <select name = "efficacite_mesures_confininement" id = "efficacite_mesures_confininement" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mesures_palliation">Mesures de palliation</label>
                                            <textarea name = "mesures_palliation" id = "mesures_palliation" class = "form-control" required ></textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_palliation">Efficacite des mesures de palliation</label>
                                            <select name = "efficacite_mesures_palliation" id = "efficacite_mesures_palliation" class = "form-control" required>
                                            <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "impact_actuel">Impact actuel </label>
                                            <select name = "impact_actuel" id = "impact_actuel" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>

                                        </div>
                                    </div>
                                </p>
                                <p class = "reduction_potentialite">
                                <center><h3> Reduction de potentialite </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "mesures_dissuation">Mesures de dissuation</label>
                                            <textarea name = "mesures_dissuation" id = "mesures_dissuation" class = "form-control" required ></textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_dissuation">Efficacite des mesures de dissuation</label>
                                            <select name = "efficacite_mesures_dissuation" id = "efficacite_mesures_dissuation" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mesures_prevention">Mesures de prevention</label>
                                            <textarea name = "mesures_prevention" id = "mesures_prevention" class = "form-control" required ></textarea>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_mesures_prevention">Efficacite des mesures de prevention</label>
                                            <select name = "efficacite_mesures_prevention" id = "efficacite_mesures_prevention" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "potentialite_actuel">Potentialite actuelle </label>
                                            <select name = "potentialite_actuel" id = "potentialite_actuel" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                    </div>
                                </p>
                                <p class = "preconisations">
                                    <center><h3>Preconisations </h3></center>
                                    <div class = "form-group">
                                        <div class = "form-group">
                                            <label for = "preconisations1">preconisation 1</label>
                                            <input type = "text" name = "preconisations1" id = "preconisation1" class = "form-control" required>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_preconisations1">Efficacite preconisation 1</label>
                                            <select name = "efficacite_preconisations1" id = "efficacite_preconisations1" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "preconisation2">Preconisation 2</label>
                                            <input type = "text" name = "preconisation2" id = "preconisation2" class = "form-control" required>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "efficacite_preconisation2">Efficacite Preconisation 2</label>
                                            <select name = "efficacite_preconisation2" id = "efficacite_preconisation2" class = "form-control" required>
                                                <option value = "1"> 1 </option>
                                                <option value = "2"> 2 </option>
                                                <option value = "3"> 3 </option>
                                                <option value = "4"> 4 </option>
                                            </select>
                                        </div>
                                    </div>
                                </p>
                                 <div class = "form-group">
                                    <center><button type = "submit" class = "btn btn-success btn-lg">verifier</button></center>
                                </div>
                        </form>
                    </div>
                </div>
@endsection
                                
