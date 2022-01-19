@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">Affichage du port {{ $port->id}}</span> 
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID du port </label>
                            <input type="number" disabled value="{{ $port->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_port"> Nom du port </label>
                            <input type="text" disabled value="{{ $port->nom_port}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type_port"> Type du port </label>
                            <input type="text" disabled value="{{ $port->type_port}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="carte"> Carte </label>
                            <input type="text" disabled value="{{ $port->carte}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module"> Module </label>
                            <input type="text" disabled value="{{ $port->module}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="equipement"> Equipement </label>
                            <input type="text" disabled value="{{ $port->equipement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" disabled value="{{ $port->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" disabled value="{{ $port->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $port->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="carte_id"> ID de la carte </label>
                            <input type="number" disabled value="{{ $port->carte_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $port->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $port->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('port')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection