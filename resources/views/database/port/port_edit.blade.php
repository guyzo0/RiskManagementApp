@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">modification du port {{ $port->id}}</span>
                    <form action="{{ route('port.update', ['id'=>$port->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_port"> Nom du port </label>
                            <input type="text" name="nom_port" id="nom_port" value="{{ $port->nom_port}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type_port"> Type du port </label>
                            <input type="text" name="type_port" id="type_port" value="{{ $port->type_port}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="carte"> Carte </label>
                            <input type="text" name="carte" id="carte" value="{{ $port->carte}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module"> Module </label>
                            <input type="text" name="module" id="module" value="{{ $port->module}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="equipement"> Equipement </label>
                            <input type="text" name="equipement" id="equipement" value="{{ $port->equipement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" name="division" id="division" value="{{ $port->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" name="departement" id="departement" value="{{ $port->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" name="direction" id="direction" value="{{ $port->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="carte"> Carte_id </label>
                                <select name="carte_id" id="carte" class="form-control">
                                    @foreach($cartes as $carte)
                                        @if($carte->id == $port->carte_id)
                                        <option value="{{ $carte->id }}" selected>{{$carte->id}}-{{$carte->nom_carte}} </option>
                                        @else
                                        <option value="{{ $carte->id }}">{{$carte->id}}-{{$carte->nom_carte}} </option>
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
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> Succes! </strong> {{Session::get('success')}}
            </div>
            @endif
        </div>
    </div>  
</div>
@endsection