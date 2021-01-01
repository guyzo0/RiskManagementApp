@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Ajouter un port</center>
                </div>

                <div class="panel-body">
                    <form action="{{ route('port.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_port"> Nom du port </label>
                            <input type="text" name="nom_port" id="nom_port" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type_port"> Type du port </label>
                            <input type="text" name="type_port" id="type_port" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="carte"> Carte </label>
                            <select name="carte" id="carte" class="form-control">
                                    @foreach($cartes as $port)
                                        <option value="{{ $port->nom_carte }}">{{$port->nom_carte}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="carte"> Carte_id </label>
                                <select name="carte_id" id="carte" class="form-control">
                                    @foreach($cartes as $carte)
                                        <option value="{{ $carte->id }}">{{$carte->id}}-{{$carte->nom_carte}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="module"> Module </label>
                            <select name="module" id="module" class="form-control">
                                    @foreach($modules as $port)
                                        <option value="{{ $port->nom_module }}">{{$port->nom_module}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="equipement"> Equipement </label>
                            <select name="equipement" id="equipement" class="form-control">
                                    @foreach($equipements as $port)
                                        <option value="{{ $port->nom_equipement }}">{{$port->nom_equipement}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <select name="division" id="division" class="form-control">
                                    @foreach($divisions as $port)
                                        <option value="{{ $port->nom_division }}">{{$port->nom_division}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <select name="departement" id="departement" class="form-control">
                                    @foreach($departements as $port)
                                        <option value="{{ $port->nom_departement }}">{{$port->nom_departement}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <select name="direction" id="direction" class="form-control">
                                    @foreach($directions as $port)
                                        <option value="{{ $port->nom_direction }}">{{$port->nom_direction}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                        <center>
                            <button type="submit" class="btn btn-success btn-lg">Enregistrer</button>
                        </center>
                        </div>
                    </form>
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
</div>
@endsection