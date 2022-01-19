@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                    Choisir a quel niveau obtenir le formulaire d'analyse de risque
                </div>
                <div class="card-body">
                    <form>
                <div class="card-header">
                    <a href="{{route('globalform_direction')}}">Direction</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_departement')}}">Departement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_division')}}">Division</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_equipement')}}">Equipement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_module')}}">Module</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_carte')}}">Carte</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_port')}}">Port</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_activite')}}">Activite</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_personne')}}">Personne</a>
                </div>
                <div class="card-header">
                    <a href="{{route('globalform_processus')}}">Processus</a>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
