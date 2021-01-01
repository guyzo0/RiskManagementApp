@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Affichage de la direction {{ $direction->id}}</center>
                </div>

                <div class="panel-body">
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
        </div>
    </div>  
</div>
@endsection