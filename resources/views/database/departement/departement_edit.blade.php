@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>modification du departement {{ $departement->id}} </center>
                </div>

                <div class="panel-body">
                    <form action="{{ route('departement.update', ['id'=>$departement->id])}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="nom_departement"> Nom du departement </label>
                            <input type="text" name="nom_departement" id="nom_departement" value="{{ $departement->nom_departement}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direction"> Direction </label>
                            <input type="text" name="direction" id="direction" value="{{ $departement->direction}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departement"> direction_id </label>
                                <select name="direction_id" id="direction" class="form-control">
                                    @foreach($directions as $direction)
                                        @if($direction->id == $departement->direction_id)
                                        <option value="{{ $direction->id }}" selected>{{$direction->id}}-{{$direction->nom_departement}} </option>
                                        @else
                                        <option value="{{ $direction->id }}">{{$direction->id}}-{{$direction->nom_direction}} </option>
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