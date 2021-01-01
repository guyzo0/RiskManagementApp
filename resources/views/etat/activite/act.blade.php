@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center> <span>Analyser ou connaitre l'etat du risque sur chaque activite</span> </center>
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
                            @foreach($activites as $activite)
                                <tr>
                                    <th>{{ $activite->id }}</th>
                                    <th>{{ $activite->nom_activite }}</th>
                                   
                                    <th>
                                        <a href="{{ route('act.show', ['id'=>$activite->id])}}" class="btn btn-sm btn-primary">Details</a>
                                    </th>
                                    <th>
                                        <a href="" class="btn btn-sm btn-warning">Etat</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('formact')}}" class="btn btn-sm btn-success">Analyser</a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="form-group">
                      
                            <a href="" class="btn btn-warning pull-right btn-lg">Etat general des activites</a>
                      
                            <a href="{{ route('formact')}}" class="btn btn-success pull-left btn-lg">Analyse general des activites</a>
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