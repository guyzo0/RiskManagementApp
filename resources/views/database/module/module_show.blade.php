@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">Affichage du module {{ $module->id}}</span>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID du module </label>
                            <input type="number" disabled value="{{ $module->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_module"> Nom du module </label>
                            <input type="text" disabled value="{{ $module->nom_module}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="equipement"> Equipement </label>
                            <input type="text" disabled value="{{ $module->equipement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" disabled value="{{ $module->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" disabled value="{{ $module->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $module->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module_id"> ID de l'equipement </label>
                            <input type="number" disabled value="{{ $module->equipement_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $module->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $module->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('module')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
@endsection