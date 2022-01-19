@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">modification de l'activite {{ $activite->id}}</span>
                    <form action="{{ route('activite.update', ['id'=>$activite->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_activite"> Nom de l'activite </label>
                            <input type="text" name="nom_activite" id="nom_activite" value="{{ $activite->nom_activite}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" name="division" id="division" value="{{ $activite->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" name="departement" id="departement" value="{{ $activite->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" name="direction" id="direction" value="{{ $activite->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="activite"> division_id </label>
                                <select name="division_id" id="division" class="form-control">
                                    @foreach($divisions as $division)
                                        @if($division->id == $activite->division_id)
                                        <option value="{{ $division->id }}" selected>{{$division->id}}-{{$division->nom_activite}} </option>
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
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">x</span>
                    </button>
                        <strong> Succes! </strong> {{Session::get('success')}}
            </div>
            @endif
        </div>
    </div> 
    </div>
@endsection