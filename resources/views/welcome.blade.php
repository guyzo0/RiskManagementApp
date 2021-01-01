@extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <h1><center>bienvenue dans l'application de gestion des Risques!</center></h1>
                    </div>
                    <div class="form-group">
                        <div class="links">
                            <a class="btn btn-outline-primary" href="{{route('login')}}">{{ _('Compte des Analystes du Risque')}}</a>
                        </div>
                        <div class= "links">
                            <a class="btn btn-outline-primary" href="{{route('expert.login')}}">{{ _('Compte des Experts')}}</a>
                        </div>
                        <div class= "links">
                            <a class="btn btn-outline-primary" href="{{route('decideur.login')}}">{{ _('Compte du Manager')}}</a>
                        </div>
                </div>
            </div>
        </div>
    @endsection
    