@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">Affichage de la direction {{ $direction->id}}</span>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id"> ID de la direction </label>
                            <input type="number" disabled value="{{ $direction->id}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom_direction"> Nom de la direction </label>
                            <input type="text" disabled value="{{ $direction->nom_direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="created_at"> date de creation </label>
                            <input type="text" disabled value="{{ $direction->created_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="update_at"> date de la derniere modification </label>
                            <input type="text" disabled value="{{ $direction->update_at}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <center>
                            <a href="{{ route('dir')}}" class="btn btn-success btn-lg">Retour</a>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
@endsection