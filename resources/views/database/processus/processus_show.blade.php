@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">Affichage du processus {{ $processus->id}}</span> 
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID de l'processus </label>
                            <input type="number" disabled value="{{ $processus->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_processus"> Nom du processus </label>
                            <input type="text" disabled value="{{ $processus->nom_processus}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" disabled value="{{ $processus->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" disabled value="{{ $processus->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $processus->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division_id"> ID de la division </label>
                            <input type="number" disabled value="{{ $processus->division_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $processus->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $processus->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('processus')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection