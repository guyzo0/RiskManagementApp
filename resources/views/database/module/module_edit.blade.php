@extends('layouts.da.form')

@section('content')
<div class="container-contact100">
		<div class="wrap-contact100"> 
        <span class="contact100-form-title">modification du module {{ $module->id}}</span>
                    <form action="{{ route('module.update', ['id'=>$module->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_module"> Nom du module </label>
                            <input type="text" name="nom_module" id="nom_module" value="{{ $module->nom_module}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="equipement"> Equipement </label>
                            <input type="text" name="equipement" id="equipement" value="{{ $module->equipement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" name="division" id="division" value="{{ $module->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" name="departement" id="departement" value="{{ $module->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" name="direction" id="direction" value="{{ $module->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="module"> equipement_id </label>
                                <select name="equipement_id" id="equipement" class="form-control">
                                    @foreach($equipements as $equipement)
                                        @if($equipement->id == $module->equipement_id)
                                        <option value="{{ $equipement->id }}" selected>{{$equipement->id}}-{{$equipement->nom_equipement}} </option>
                                        @else
                                        <option value="{{ $equipement->id }}">{{$equipement->id}}-{{$equipement->nom_equipement}} </option>
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