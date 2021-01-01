@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-4 mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('form')}}">formulaire du risque</a>
                </div>
                <div class="card-header">
                    <a href="{{route('port')}}">port</a>
                </div>
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
                    <a href="{{route('activite')}}">activite</a>
                </div>
                <div class="card-header">
                    <a href="{{route('personne')}}">personne</a>
                </div>
                <div class="card-header">
                    <a href="{{route('processus')}}">processus</a>
                </div>
                <div class="card-header">
                    <a href="{{route('dir')}}">etat direction</a>
                </div>
                <div class="card-header">
                    <a href="{{route('dep')}}">etat departement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('div')}}">etat division</a>
                </div>
                <div class="card-header">
                    <a href="{{route('equ')}}">etat equipement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('mod')}}">etat module</a>
                </div>
                <div class="card-header">
                    <a href="{{route('car')}}">etat carte</a>
                </div>
                <div class="card-header">
                    <a href="{{route('por')}}">etat port</a>
                </div>
                <div class="card-header">
                    <a href="{{route('act')}}">etat activite</a>
                </div>
                <div class="card-header">
                    <a href="{{route('per')}}">etat personne</a>
                </div>
                <div class="card-header">
                    <a href="{{route('pro')}}">etat processus</a>
                </div>
                <div class="card-body">
                        <a href="">choisir une direction</a>
                </div>
            </div>
        </div>
    </div>
        <div class="pt-4 mt-4">
            
        </div>
</div>
@endsection
