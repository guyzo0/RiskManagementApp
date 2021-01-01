@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center> <span>Liste des personnes disponibles</span> </center>
                    <a href="{{ route('personne.add')}}" class="btn btn-xs pull-right btn-success"> ajouter une personne </a>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Index</th>
                            <th>Nom</th>
                            <th>Division</th>
                            <th>Details</th>
                            <th>Editer</th>
                            <th>Supprimer</th>
                        </thead>

                        <tbody>
                            @foreach($personnes as $personne)
                                <tr>
                                    <th>{{ $personne->id }}</th>
                                    <th>{{ $personne->nom_personne }}</th>
                                    <th>{{ $personne->division }}</th>
                                   
                                    <th>
                                        <a href="{{ route('personne.show', ['id'=>$personne->id])}}" class="btn btn-sm btn-primary">Details</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('personne.edit', ['id'=>$personne->id])}}" class="btn btn-sm btn-warning">Editer</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('personne.delete', ['id'=>$personne->id])}}" class="btn btn-sm btn-danger">Supprimer</a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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