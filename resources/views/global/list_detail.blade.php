@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                    Choisir le niveau sur lequel connaitre les details d'une entite selectionnee
                </div>
                <div class="card-body">
                    <form>
                <div class="col">
                <div class="card-header">
                    <a href="{{route('dir')}}">direction</a>
                </div>
                <div class="card-header">
                    <a href="{{route('dep')}}">departement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('div')}}">division</a>
                </div>
                <div class="card-header">
                    <a href="{{route('equ')}}">equipement</a>
                </div>
                <div class="card-header">
                    <a href="{{route('mod')}}">module</a>
                </div>
                <div class="card-header">
                    <a href="{{route('car')}}">carte</a>
                </div>
                <div class="card-header">
                    <a href="{{route('por')}}">port</a>
                </div>
                <div class="card-header">
                    <a href="{{route('act')}}">activite</a>
                </div>
                <div class="card-header">
                    <a href="{{route('per')}}">personne</a>
                </div>
                <div class="card-header">
                    <a href="{{route('pro')}}">processus</a>
                </div>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
