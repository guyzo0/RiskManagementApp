@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">                 
                    @foreach($departements as $departement)
                                <div class="card-header">
                                    <a href = "{{ route('div', ($id, $departement_id))}}" class = "form-control"> {{ $departement->nom_departement}}</a>
                                </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
