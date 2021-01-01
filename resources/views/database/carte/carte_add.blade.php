@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Ajouter une carte</center>
                </div>

                <div class="panel-body">
                    <form action="{{ route('carte.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_carte"> Nom de la carte </label>
                            <input type="text" name="nom_carte" id="nom_carte" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module"> Module </label>
                            <select name="module" id="module" class="form-control">
                                    @foreach($modules as $carte)
                                        <option value="{{ $carte->nom_module }}">{{$carte->nom_module}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="module">module_id </label>
                                <select name="module_id" id="module" class="form-control">
                                    @foreach($modules as $module)
                                        <option value="{{ $module->id }}">{{$module->id}}-{{$module->nom_module}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="equipement"> Equipement </label>
                            <select name="equipement" id="equipement" class="form-control">
                                    @foreach($equipements as $carte)
                                        <option value="{{ $carte->nom_equipement }}">{{$carte->nom_equipement}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <select name="division" id="division" class="form-control">
                                    @foreach($divisions as $carte)
                                        <option value="{{ $carte->nom_division }}">{{$carte->nom_division}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <select name="departement" id="departement" class="form-control">
                                    @foreach($departements as $carte)
                                        <option value="{{ $carte->nom_departement }}">{{$carte->nom_departement}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <select name="direction" id="direction" class="form-control">
                                    @foreach($directions as $carte)
                                        <option value="{{ $carte->nom_direction }}">{{$carte->nom_direction}} </option>
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