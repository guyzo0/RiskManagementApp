@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Choisir le niveau sur lequel gerer la base de donnee(ajouter, modifier ou supprimer)
                </div>
                <div class="card-body">
                    <form>
                <div class="card-header">
                    <a href="{{route('direction')}}">direction</a>
                </div>
                <div class="card-header">
                    <a href="{{route('departement')}}">departement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('division')}}">division</a>
                </div>
                <div class="card-header">
                    <a href="{{route('equipement')}}">equipement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('module')}}">module</a>
                </div>
                <div class="card-header">
                    <a href="{{route('carte')}}">carte</a>
                </div>
                <div class="card-header">
                    <a href="{{route('port')}}">port</a>
                </div>
                <div class="card-header">
                    <a href="{{route('activite')}}">activite</a>
                </div>
                <div class="card-header">
                    <a href="{{route('personne')}}">personne</a>
                </div>
                <div class="card-header">
                    <a href="{{route('processus')}}">processus</a>
                </div>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
