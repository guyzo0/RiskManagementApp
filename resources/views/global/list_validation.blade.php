@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Choisir a quel niveau verifier l'analyse faite sur une entite afin de valider
                </div>
                <div class="card-body">
                    <form>
                    <div class="card-header">
                    <a href="{{route('risque_direction')}}">Direction</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_departement')}}">Departement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_division')}}">Division</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_equipement')}}">Equipement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_module')}}">Module</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_carte')}}">Carte</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_port')}}">Port</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_activite')}}">Activite</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_personne')}}">Personne</a>
                </div>
                <div class="card-header">
                    <a href="{{route('risque_processus')}}">Processus</a>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
