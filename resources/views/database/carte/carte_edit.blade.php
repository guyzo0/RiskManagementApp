@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>modification de la carte {{ $carte->id}} </center>
                </div>

                <div class="panel-body">
                    <form action="{{ route('carte.update', ['id'=>$carte->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_carte"> Nom de la carte </label>
                            <input type="text" name="nom_carte" id="nom_carte" value="{{ $carte->nom_carte}}" class="form-control">
                        <div class="form-group">
                            <label for="module"> Module </label>
                            <input type="text" name="module" id="module" value="{{ $carte->module}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="equipement"> Equipement </label>
                            <input type="text" name="equipement" id="equipement" value="{{ $carte->equipement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" name="division" id="division" value="{{ $carte->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" name="departement" id="departement" value="{{ $carte->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" name="direction" id="direction" value="{{ $carte->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module"> Module_id </label>
                                <select name="module_id" id="module" class="form-control">
                                    @foreach($modules as $module)
                                        @if($module->id == $carte->module_id)
                                        <option value="{{ $module->id }}" selected>{{$module->id}}-{{$module->nom_module}} </option>
                                        @else
                                        <option value="{{ $module->id }}">{{$module->id}}-{{$module->nom_module}} </option>
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