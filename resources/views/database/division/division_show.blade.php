@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Affichage de la division {{ $division->id}}</center>
                </div>

                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID de la division </label>
                            <input type="number" disabled value="{{ $division->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_division"> Nom de la division </label>
                            <input type="text" disabled value="{{ $division->nom_division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" disabled value="{{ $division->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $division->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module_id"> ID du departement </label>
                            <input type="number" disabled value="{{ $division->departement_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $division->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $division->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('division')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection