@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">Affichage de l'activite {{ $activite->id}}</span> 
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID de l'activite </label>
                            <input type="number" disabled value="{{ $activite->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_activite"> Nom de l'activite </label>
                            <input type="text" disabled value="{{ $activite->nom_activite}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" disabled value="{{ $activite->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" disabled value="{{ $activite->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $activite->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division_id"> ID de la division </label>
                            <input type="number" disabled value="{{ $activite->division_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $activite->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $activite->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('activite')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
@endsection