@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>modification du processus {{ $processus->id}}</center>
                </div>

                <div class="panel-body">
                    <form action="{{ route('processus.update', ['id'=>$processus->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_processus"> Nom du processus </label>
                            <input type="text" name="nom_processus" id="nom_processus" value="{{ $processus->nom_processus}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="division"> Division </label>
                            <input type="text" name="division" id="division" value="{{ $processus->division}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> Departement </label>
                            <input type="text" name="departement" id="departement" value="{{ $processus->departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" name="direction" id="direction" value="{{ $processus->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="processus"> division_id </label>
                                <select name="division_id" id="division" class="form-control">
                                    @foreach($divisions as $division)
                                        @if($division->id == $processus->division_id)
                                        <option value="{{ $division->id }}" selected>{{$division->id}}-{{$division->nom_processus}} </option>
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