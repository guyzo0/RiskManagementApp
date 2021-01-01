@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>modification de personne {{ $personne->id}} </center>
                </div>

                <div class="panel-body">
                    <form action="{{ route('personne.update', ['id'=>$personne->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_personne"> Nom de personne </label>
                            <input type="text" name="nom_personne" id="nom_personne" value="{{ $personne->nom_personne}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" name="division" id="division" value="{{ $personne->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" name="departement" id="departement" value="{{ $personne->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" name="direction" id="direction" value="{{ $personne->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="equipement"> division_id </label>
                                <select name="division_id" id="division" class="form-control">
                                    @foreach($divisions as $division)
                                        @if($division->id == $personne->division_id)
                                        <option value="{{ $division->id }}" selected>{{$division->id}}-{{$division->nom_personne}} </option>
                                        @else
                                        <option value="{{ $division->id }}">{{$division->id}}-{{$division->nom_division}} </option>
                                        @endif
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-success btn-lg">modifier</button>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> Erreur! </strong> {{Session::get('error')}}
                </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> Succes! </strong> {{Session::get('success')}}
            </div>
            @endif
        </div>
    </div>  
</div>
@endsection