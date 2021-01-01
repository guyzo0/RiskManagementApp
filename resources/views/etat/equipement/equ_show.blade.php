@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Affichage de l'equipement {{ $equipement->id}}</center>
                </div>

                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID de l'equipement </label>
                            <input type="number" disabled value="{{ $equipement->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_equipement"> Nom de l'equipement </label>
                            <input type="text" disabled value="{{ $equipement->nom_equipement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" disabled value="{{ $equipement->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" disabled value="{{ $equipement->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $equipement->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division_id"> ID de la division </label>
                            <input type="number" disabled value="{{ $equipement->division_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $equipement->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $equipement->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('equ')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection