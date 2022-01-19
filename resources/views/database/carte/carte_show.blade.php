@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">Affichage de la carte {{ $carte->id}}</span> 
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID de la carte </label>
                            <input type="number" disabled value="{{ $carte->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_carte"> Nom de la carte </label>
                            <input type="text" disabled value="{{ $carte->nom_carte}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module"> Module </label>
                            <input type="text" disabled value="{{ $carte->module}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="equipement"> Equipement </label>
                            <input type="text" disabled value="{{ $carte->equipement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" disabled value="{{ $carte->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" disabled value="{{ $carte->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" disabled value="{{ $carte->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module_id"> ID du module </label>
                            <input type="number" disabled value="{{ $carte->module_id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $carte->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $carte->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('carte')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
@endsection