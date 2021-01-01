@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Affichage de personne {{ $personne->id}}</center>
                </div>

                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID de personne </label>
                            <input type="number" disabled value="{{ $personne->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_personne"> Nom de personne </label>
                            <input type="text" disabled value="{{ $personne->nom_personne}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" disabled value="{{ $personne->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" disabled value="{{ $personne->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $personne->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division_id"> ID de la division </label>
                            <input type="number" disabled value="{{ $personne->division_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $personne->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $personne->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('personne')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection