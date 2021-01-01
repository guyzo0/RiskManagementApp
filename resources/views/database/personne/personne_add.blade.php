@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Ajouter une personne</center>
                </div>

                <div class="panel-body">
                    <form action="{{ route('personne.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_personne"> Nom de personne </label>
                            <input type="text" name="nom_personne" id="nom_personne" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <select name="division" id="division" class="form-control">
                                    @foreach($divisions as $personne)
                                        <option value="{{ $personne->nom_division }}">{{$personne->nom_division}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="division">division_id </label>
                                <select name="division_id" id="division" class="form-control">
                                    @foreach($divisions as $division)
                                        <option value="{{ $division->id }}">{{$division->id}}-{{$division->nom_division}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <select name="departement" id="departement" class="form-control">
                                    @foreach($departements as $personne)
                                        <option value="{{ $personne->nom_departement }}">{{$personne->nom_departement}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <select name="direction" id="direction" class="form-control">
                                    @foreach($directions as $personne)
                                        <option value="{{ $personne->nom_direction }}">{{$personne->nom_direction}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-success btn-lg">Enregistrer</button>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2">
            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> Erreur! </strong> {{Session::get('error')}}
                </div>
            @endif
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
</div>
@endsection