@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Affichage du departement {{ $departement->id}}</center>
                </div>

                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID du departement </label>
                            <input type="number" disabled value="{{ $departement->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_departement"> Nom du departement </label>
                            <input type="text" disabled value="{{ $departement->nom_departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $departement->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction_id"> ID de la direction </label>
                            <input type="number" disabled value="{{ $departement->direction_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $departement->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $departement->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('departement')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection