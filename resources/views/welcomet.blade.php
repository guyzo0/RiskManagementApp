@extends('layouts.app')

    @section('content_header')
        <h1><center>bienvenue dans l'application de gestion des Risques!</center></h1>
    @endsection

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col- md-8">
                    <div class="card">
                        <h2><center>bienvenue dans l'application de gestion des Risques!</center></h2>
                    </div>
                        <div class="card-body">
                        <div class="alert alert-primary" role="alert">Compte des
                            <a href="{{route('login')}}" class="alert-link">{{ _('Analystes')}}</a>->
                        </div>
                        <div class="alert alert-secondary" role="alert">Compte des 
                            <a href="{{route('expert.login')}}" class="alert-link">{{ _('Experts')}}</a>->
                        </div>
                        <div class="alert alert-success" role="alert">Compte du 
                            <a href="{{route('decideur.login')}}" class="alert-link">{{ _('Manager')}}</a>->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    