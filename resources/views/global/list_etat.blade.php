@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Choisir le niveau sur lequel connaitre l'etat du risque sur une entite selectionnee
                </div>
                <div class="card-body">
                    <form>
                <div class="card-header">
                    <a href="{{route('listRisque_direction')}}">Direction</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_departement')}}">Departement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_division')}}">Division</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_equipement')}}">Equipement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_module')}}">Module</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_carte')}}">Carte</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_port')}}">Port</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_activite')}}">Activite</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_personne')}}">Personne</a>
                </div>
                <div class="card-header">
                    <a href="{{route('listRisque_processus')}}">Processus</a>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
