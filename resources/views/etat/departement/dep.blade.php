@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center> <span>Analyser ou connaitre l'etat du risque sur chaque departement</span> </center>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Index</th>
                            <th>Nom</th>
                            <th>Details</th>
                            <th>Etat</th>
                            <th>Analyser</th>
                        </thead>

                        <tbody>
                            @foreach($departements as $departement)
                                <tr>
                                    <th>{{ $departement->id }}</th>
                                    <th>{{ $departement->nom_departement }}</th>
                                   
                                    <th>
                                        <a href="{{ route('dep.show', ['id'=>$departement->id])}}" class="btn btn-sm btn-primary">Details</a>
                                    </th>
                                    <th>
                                        <a href="" class="btn btn-sm btn-warning">Etat</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('formdep')}}" class="btn btn-sm btn-success">Analyser</a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="form-group">
                      
                            <a href="" class="btn btn-warning pull-right btn-lg">Etat general des departements</a>
                      
                            <a href="{{ route('formdir')}}" class="btn btn-success pull-left btn-lg">Analyse general des departements</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> Succes! </strong> {{Session::get('success')}}
            </div>  
            @endif
        </div>
    </div>
</div>
    @endsection