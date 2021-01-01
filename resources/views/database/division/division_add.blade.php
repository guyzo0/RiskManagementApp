@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Ajouter une division</center>
                </div>

                <div class="panel-body">
                    <form action="{{ route('division.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_division"> Nom de la division </label>
                            <input type="text" name="nom_division" id="nom_division" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <select name="departement" id="departement" class="form-control">
                                    @foreach($departements as $division)
                                        <option value="{{ $division->nom_departement }}">{{$division->nom_departement}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="departement">departement_id </label>
                                <select name="departement_id" id="departement" class="form-control">
                                    @foreach($departements as $departement)
                                        <option value="{{ $departement->id }}">{{$departement->id}}-{{$departement->nom_departement}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <select name="direction" id="direction" class="form-control">
                                    @foreach($directions as $division)
                                        <option value="{{ $division->nom_direction }}">{{$division->nom_direction}} </option>
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